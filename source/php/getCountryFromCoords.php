<?php
    include ("./static/config.php");

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $ch = curl_init("https://api.opencagedata.com/geocode/v1/json?q={$_REQUEST["capital"]}&key={$geoCodeApiKey}");
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $result = json_decode(curl_exec($ch), true);

    curl_close($ch);

    $output["coords"] = $result["results"][0]["geometry"];

    header("Content-Type: application/json; charset=UTF-8");

    echo json_encode($output); 
?>