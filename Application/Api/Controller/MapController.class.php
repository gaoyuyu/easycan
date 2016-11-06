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
    public function getLatAndLngByAddress()
    {
//        header("Content-type: text/html; charset=utf-8");
        $address = $prepAddr = str_replace(' ', '+', $_GET["address"]);
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&key=" . C("GOOGLE_MAPS_API_KEYS");
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
        $this->returnResponseOK($data);
    }
}