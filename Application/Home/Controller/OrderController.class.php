<?php
/**
 * Created by PhpStorm.
 * User: gaoyy
 * Date: 2016/10/27 0027
 * Time: 13:30
 */
namespace Home\Controller;

use Think\Controller;

/**
 * 订单管理
 * Class OrderController
 * @package Home\Controller
 */
class OrderController extends CommonController
{

    //一页10条数据
    const perPage = 10;

    /**
     * 添加订单
     */
    public function addOrder()
    {
        $this->display("addorder");
    }

    /**
     * 提交添加菜单
     */
    public function addOrderHandle()
    {
        $phone = trim($_POST["phone"]);
        $address = trim($_POST["address"]);
        $price = trim($_POST["price"]);
        $remark = trim($_POST["remark"]);

        $this->alertAjax($phone, "请填写客户电话");
        $this->alertAjax($address, "请填写客户地址");
        $this->alertAjax($price, "请填写订单价格");

        $om = M("order");
        $om->startTrans();
        $data = array(
            "dispatcher" => $_SESSION["user"]["id"],
            "customer_phone" => $phone,
            "customer_address" => $address,
            "price" => $price,
            "remark" => $remark,
            "create_time" => date("Y-m-d H:i:s", time()),
        );
        $om->add($data);
        if ($om->getDbError())
        {
            $om->rollback();
            $json["code"] = 0;
            $json["info"] = "提交失败";
        }
        else
        {
            $om->commit();
            $json["code"] = 1;
            $json["info"] = "提交成功";
        }
        $this->ajaxReturn($json, "JSON");
    }

    /**
     * 订单管理
     */
    public function orderList()
    {
        $orderList = $this->getOrderListByPageIndex();
        $pageIndex = $this->getPageIndexHtml();
        $this->assign("orderList", $orderList);
        $this->assign("pageIndex", $pageIndex);
        $this->display("orderlist");
    }

    /**
     * 分页返回html
     */
    public function pageIndex()
    {
        $index = trim($_POST["index"]);
        $orderList = $this->getOrderListByPageIndex($index);
        if (empty($orderList))
        {
            $json["code"] = 0;
            $json["info"] = "当前无数据";
        }
        else
        {
            $json["code"] = 1;
            $json["info"] = "加载成功";
            $json["orderhtml"] = $this->orderList2html($orderList);
        }
        $this->ajaxReturn($json, "JSON");


    }

    /**
     *
     * @param $orderList
     * @return null|string
     */
    public function orderList2html($orderList)
    {
        $orderListhtml = null;
        foreach ($orderList as $key => $value)
        {
            if ($value["receiver"] == "")
            {
                $receiver = "暂无";
            }
            else
            {
                $receiver = $value["receiver"];
            }
            switch ($value["status"])
            {
                case 0:
                    $status = "<span style=\"color:#d58512 \">等待</span>";
                    break;
                case 1:
                    $status = "<span style=\"color: #1155CC\">接受</span>";
                    break;
                case 2:
                    $status = "<span style=\"color: #269abc \">派送</span>";
                    break;
                case 3:
                    $status = "<span style=\"color: #4cae4c\">完成</span>";
                    break;
            }

            $orderListhtml = $orderListhtml . <<<html
                        <tr>
                            <td>
                                {$value["id"]}
                            </td>
                            <td>
                                {$value["dispatcher"]}
                            </td>
                            <td>
                                <span style="color: Red">{$receiver}</span>
                            </td>
                            <td>
                                {$value["customer_phone"]}
                            </td>
                            <td>
                                {$value["customer_address"]}
                            </td>
                            <td>
                                {$value["price"]}
                            </td>
                            <td>
                                {$value["remark"]}
                            </td>
                            <td>
                                {$status}
                            </td>
                            <td>
                            </td>
                        </tr>
html;

        }
        return $orderListhtml;
    }

    public function getPageIndexHtml()
    {
        $om = M("order");
        $sum = $om->count();
        if ($sum % self::perPage == 0)
        {
            $length = $sum / self::perPage;
        }
        else
        {
            $length = (int)($sum / self::perPage + 1);
        }
        $pageIndexHtml = <<<html
            <ul class="pagination">
              <li><a href="#" id="left">&laquo;</a></li>
html;
        for ($i = 1; $i <= $length; $i++)
        {
            if ($i == 1)
            {
                $active = "class=\"active\"";
            }
            else
            {
                unset($active);
            }
            $pageIndexHtml = $pageIndexHtml . <<<html
                <li $active><a href="#" onclick="pageIndex({$i})">{$i}</a></li>
html;
        }
        $pageIndexHtml = $pageIndexHtml . <<<html
                  <li><a href="#" id="right">&raquo;</a></li>
                </ul>
html;
        return $pageIndexHtml;
    }

    /**
     * 根据页码获取分页数据
     * @param int $index 默认第一页数据
     * @return mixed
     */
    public function getOrderListByPageIndex($index = 1)
    {
        $orderList = M("order")->page($index, self::perPage)->select();
        foreach ($orderList as $key => $value)
        {
            if (!empty($value["dispatcher"]))
            {
                $orderList[$key]["dispatcher"] = M("user")->where("id = {$value["dispatcher"]}")->getField("username");
            }
            if (!empty($value["receiver"]))
            {
                $orderList[$key]["receiver"] = M("user")->where("id = {$value["receiver"]}")->getField("username");
            }
        }
        return $orderList;
    }

    /**
     * 显示实时位置
     */
    public function getRealTimeLocation()
    {
        $address = $_GET["address"];
        $orderId = $_GET["oid"];
        $location = $this->getLatAndLng($address);

        $restaurantLocation = $this->getLatAndLng("广州世界大观");
        $customerLocation = $this->getLatAndLng("广州奥林匹克网球中心");

        $ol = M("order_location");
        $driver = $ol->where("order_id = {$orderId}")->field("longitude,latitude")->find();

        $driverLocation["lat"] = floatval($driver["latitude"]);
        $driverLocation["lng"] = floatval($driver["longitude"]);

        $this->assign("restaurantLocation", $restaurantLocation);
        $this->assign("customerLocation", $customerLocation);
        $this->assign("driverLocation", $driverLocation);
        $this->display("location");

    }

    /**
     * 根据地址获取经纬度
     * @param $address
     * @return array
     */
    public function getLatAndLng($address)
    {
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&key=" . C("GOOGLE_MAPS_API_KEYS");
        $json = file_get_contents($url);
        $output = json_decode($json);
        $lat = $output->results[0]->geometry->location->lat;
        $lng = $output->results[0]->geometry->location->lng;
        return array("lat" => $lat, "lng" => $lng);
    }

}