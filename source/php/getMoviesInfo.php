<?php
    $date = date('Y-m-d');

    // ini_set('display_errors', '1');
    // ini_set('display_startup_errors', '1');
    // error_reporting(E_ALL);

    function curlRequest($url){
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result = json_decode(curl_exec($ch), true);

        return $result;

        curl_close($ch);
    }

    $result = curlRequest("http://api.tvmaze.com/schedule?country={$_REQUEST["isoCode"]}&date={$date}");

    if($result != []){
        foreach($result as $val){
            $output[] = [
                "name" => $val["show"]["name"],
                "seasons" => $val["season"],
                "episodes" => $val["number"],
                "info" => $val["show"]["url"],
                "genre" => $val["show"]["type"],
                "status" => $val["show"]["status"],
                "image" => ($val["show"]["image"]) ? $val["show"]["image"]["medium"] : "None"
            ];
        }
    }else{
        $output = null;
    }

    header("Content-Type: application/json; charset=UTF-8");

    echo json_encode($output); 
?>