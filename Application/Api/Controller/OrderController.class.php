<?php
/**
 * Created by PhpStorm.
 * User: gaoyy
 * Date: 2016/10/24 0024
 * Time: 23:39
 */
namespace Api\Controller;

use Think\Controller;

class OrderController extends AppController
{
    //一页10条数据
    const perPage = 10;

    public function submitOrder()
    {
        $uid = trim($_POST["uid"]);
        $phone = trim($_POST["phone"]);
        $address = trim($_POST["address"]);
        $price = trim($_POST["price"]);
        $remark = trim($_POST["remark"]);
        //        $uid = trim($_POST["uid"]);
        //        $phone = trim($_POST["phone"]);
        //        $address = trim($_POST["address"]);
        //        $price = trim($_POST["price"]);
        //        $remark = trim($_POST["remark"]);

        if (empty($phone) || empty($address) || empty($price))
        {
            $this->returnResponseError("请检查提交信息是否为空！");
        }

        $data = array(
            "dispatcher" => $uid,
            "customer_phone" => $phone,
            "customer_address" => $address,
            "price" => $price,
            "remark" => $remark,
            "create_time" => date("Y-m-d H:i:s", time()),
        );
        $om = M("order");
        $om->startTrans();
        $om->add($data);
        if ($om->getDbError())
        {
            $om->rollback();
            $this->returnResponseError("提交失败");
        } else
        {
            $om->commit();
            $this->returnResponseOK("提交成功");
        }
    }

    public function orderList()
    {
        //        $currentPage = $_GET["currentPage"];
        //        $uid = $_GET["uid"];
        $uid = $_POST["uid"];
        $currentPage = $_POST["currentPage"];

        if ($uid != null)
        {
            $where["receiver"] = $uid;
        }

        $om = M("order");
        $count = $om->count();
        $orderList = $om->page($currentPage, self::perPage)->where($where)->order("id desc")->select();
        //                dump($orderList);
        //                exit(0);

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
        $data = array(
            "count" => $count,
            "prePage" => self::perPage,
            "pageCount" => $this->getPageCount($count, self::perPage),
            "currentPage" => $currentPage,
            "list" => $orderList,
        );

        $this->returnResponseOK($data);
    }


    public function getPageCount($count, $perPage)
    {
        $pageCount = -1;
        if ($count % $perPage == 0)
        {
            $pageCount = $count / $perPage;
        } else
        {
            $pageCount = (int)($count / $perPage + 1);
        }
        return $pageCount;
    }

    public function receiveOrder()
    {
        $orderId = trim($_POST["oid"]);
        $receiver = trim($_POST["uid"]);
        //        $orderId = $_GET["oid"];
        //        $receiver = $_GET["uid"];

        if (empty($orderId) || empty($receiver))
        {
            $this->returnResponseError("请检查提交信息是否为空！");
        }


        $om = M("order");
        $om->startTrans();

        $hasReceived = $om->where("receiver = {$receiver} and status =1")->count();
        if ($hasReceived != 0)
        {
            $this->returnResponseError("当前有正在派送的订单，请完成订单后再接单");
        }

        $data = array(
            "receiver" => $receiver,
            "status" => 1
        );

        $om->where("id = {$orderId}")->save($data);

        if ($om->getDbError())
        {
            $om->rollback();
            $this->returnResponseError("接单失败");
        } else
        {
            $om->commit();
            $this->returnResponseOK("接单成功");
        }
    }

    public function finishOrder()
    {
        $orderId = trim($_POST["oid"]);
//        $orderId = trim($_GET["oid"]);
        if (empty($orderId))
        {
            $this->returnResponseError("请检查提交信息是否为空！");
        }

        $om = M("order");
        $om->startTrans();

        
        
        
        $om->where("id = {$orderId}")->setField("status", 2);

        if ($om->getDbError())
        {
            $om->rollback();
            $this->returnResponseError("未能成功，请重试");
        } else
        {
            $om->commit();
            $this->returnResponseOK("收货成功");
        }


    }


}