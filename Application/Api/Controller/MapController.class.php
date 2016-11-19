<?php
/**
 * Created by PhpStorm.
 * User: gaoyy
 * Date: 2016/11/6 0006
 * Time: 21:18
 */
namespace Api\Controller;

use Think\Controller;

class MapController extends AppController
{
    /**
     * 根据地理地址获取经纬度
     * https://maps.googleapis.com/maps/api/geocode/json?
     * address=address&key=key
     * ps.address中的空格必须替换成+，否则访问不了api
     */
    public function getLatAndLngByAddress($address)
    {
//        header("Content-type: text/html; charset=utf-8");
        $data = $this->getLatLng($address);
        return $data;
    }

    public function getLatAndLngByAddressV2()
    {
//        $restaurant = trim($_GET["restaurant"]);
//        $customer = trim($_GET["customer"]);
        $restaurant = trim($_POST["restaurant"]);
        $customer = trim($_POST["customer"]);
        $restaurantLatLng = $this->getLatLng($restaurant);
        $customerLatLng = $this->getLatLng($customer);
        $data = array(
            "restaurant_latlng" => $restaurantLatLng,
            "customer_latlng" => $customerLatLng,
        );
        $this->returnResponseOK($data);
    }

    /**
     * 此API返回的实时位置包含饭店位置A，客户位置B，司机当前位置C由Android客户端获取
     * 返回的Direction包含C->A，A->B
     * 接收的参数分别为饭店地理位置，客户地理位置
     */
    public function get2LocationAndDirection()
    {
//        $restaurant = trim($_POST["restaurant"]);
//        $customer = trim($_POST["customer"]);
//
//        $localLat = trim($_POST["lat"]);//23.1306821
//        $localLng = trim($_POST["lng"]);//113.3980644
        $restaurant = trim($_GET["restaurant"]);
        $customer = trim($_GET["customer"]);

        $localLat = trim($_GET["lat"]);//23.1306821
        $localLng = trim($_GET["lng"]);//113.3980644


//        $localLat = 23.1306821;//113.3980644
//        $localLng = 113.3980644;//113.3980644

//        header("Content-type: text/html; charset=utf-8");

        if (empty($restaurant) || empty($customer))
        {
            $this->returnResponseError("请检查提交信息是否为空！");
        }

        $rl = $this->getLatAndLngByAddress($restaurant);
        $cl = $this->getLatAndLngByAddress($customer);

        //获取从饭店到客户的路径 A-B
        $restaurant_customer = $this->getDirectionPolyline($rl["formatted_address"], $cl["formatted_address"]);
        $local = $this->reverseGeocodingForLatLng($localLat, $localLng);

        //获取当前位置到饭店的路径C-A
        $local_restaurant = $this->getDirectionPolyline($local, $rl["formatted_address"]);
        $data = array(
            "restaurant" => $rl,
            "customer" => $cl,
            "local" => $local,
            "restaurant_customer" => $restaurant_customer,
            "local_restaurant" => $local_restaurant,
        );

        $this->returnResponseOK($data);
    }


    public function handleStringForApi($address)
    {
        return str_replace(' ', '+', $address);
    }

    /**
     *origin ：起点  destination：终点
     * https://maps.googleapis.com/maps/api/directions/json?origin=Toronto&destination=Montreal&key=YOUR_API_KEY
     *
     */
    public function getDirectionPolyline($orign, $destination)
    {
        $orign = $this->handleStringForApi($orign);
        $destination = $this->handleStringForApi($destination);

        $url = "https://maps.googleapis.com/maps/api/directions/json?language=zh-CN&origin={$orign}&destination={$destination}&key=" . C("GOOGLE_MAPS_API_KEYS");

        $json = file_get_contents($url);
        $output = json_decode($json);

        $points = $output->routes[0]->overview_polyline->points;
        return $points;
    }

    public function getDirectionPolylineV2()
    {
        $orign = trim($_POST["origin"]);
        $destination = trim($_POST["destination"]);
//        $orign = trim($_GET["orign"]);
//        $destination = trim($_GET["destination"]);

        $orign = $this->handleStringForApi($orign);
        $destination = $this->handleStringForApi($destination);

        $url = "https://maps.googleapis.com/maps/api/directions/json?language=zh-CN&origin={$orign}&destination={$destination}&key=" . C("GOOGLE_MAPS_API_KEYS");

        $json = file_get_contents($url);
        $output = json_decode($json);

        $points = $output->routes[0]->overview_polyline->points;
        $this->returnResponseOK($points);
    }


    /**
     * 反向地理编码
     * https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=YOUR_API_KEY
     */
    public function reverseGeocodingForLatLng($lat, $lng)
    {
        $url = "https://maps.googleapis.com/maps/api/geocode/json?language=zh-CN&latlng={$lat},{$lng}&key=" . C("GOOGLE_MAPS_API_KEYS");

        $json = file_get_contents($url);
        $output = json_decode($json);

        $formattedAddress = $output->results[0]->formatted_address;
        return $formattedAddress;
    }

    public function reverseGeocodingForLatLngV2()
    {
        $lat = trim($_POST["lat"]);
        $lng = trim($_POST["lng"]);
//        $lat = trim($_GET["lat"]);
//        $lng = trim($_GET["lng"]);
        $url = "https://maps.googleapis.com/maps/api/geocode/json?language=zh-CN&latlng={$lat},{$lng}&key=" . C("GOOGLE_MAPS_API_KEYS");

        $json = file_get_contents($url);
        $output = json_decode($json);

        $formattedAddress = $output->results[0]->formatted_address;
        $this->returnResponseOK($formattedAddress);
    }

    /**
     * @param $address
     * @return array
     */
    public function getLatLng($address)
    {
        $address = $this->handleStringForApi($address);
        $url = "https://maps.googleapis.com/maps/api/geocode/json?language=zh-CN&address={$address}&key=" . C("GOOGLE_MAPS_API_KEYS");
        $json = file_get_contents($url);
        $output = json_decode($json);
        $lat = $output->results[0]->geometry->location->lat;
        $lng = $output->results[0]->geometry->location->lng;
        $formattedAddress = $output->results[0]->formatted_address;
        $location = array("lat" => $lat, "lng" => $lng);
        $data = array(
            "formatted_address" => $formattedAddress,
            "location" => $location
        );
        return $data;
    }


    public function uploadLocation()
    {
        $orderId = trim($_POST["oid"]);
        $lat = trim($_POST["lat"]);
        $lng = trim($_POST["lng"]);
        $om = M("order_location");
        $om->startTrans();
        $data = array(
            "order_id" => $orderId,
            "longitude" => $lng,
            "latitude" => $lat,
            "upload_time" => date("Y-m-d H:i:s", time()),
        );
        if ($om->where("order_id = $orderId")->count() != 0)
        {
            $om->where("order_id = $orderId")->save($data);
        }
        else
        {
            $om->add($data);
        }

        if ($om->getDbError())
        {
            $om->rollback();
            $this->returnResponseError("上传失败");
        }
        else
        {
            $om->commit();
            $this->returnResponseOK("上传成功");
        }
    }


    public function getDriverLocationByOrderId()
    {
//        $orderId = trim($_GET["oid"]);
        $orderId = trim($_POST["oid"]);
        $om = M("order_location");

        $location = $om->where("order_id = {$orderId}")->find();

        if ($location == null)
        {
            $om->rollback();
            $this->returnResponseError("该订单暂无法获取司机位置");
        }
        else
        {
            $om->commit();
            $this->returnResponseOK($location);
        }




    }

}