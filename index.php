<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 21/10/2018
 * Time: 6:28 AM
 */
header('Content-type:application/json;charset=utf-8');
include_once "controls/db.php";

$json = new stdClass();

if (isset($_POST['action'])){
    $action = $_POST['action'];
    require_once "module/load.php";
}elseif (isset($_GET['action'])){
    $action = $_GET['action'];
    //require_once "module/load.php";
}else{
    $json->Error = "4100";
    $json->Message ="No action request";
    echo $json_out = json_encode($json);
    exit(0);
}

