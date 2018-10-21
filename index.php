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
    echo $_POST['action'];
}else{
    $json->Error = "4100";
    $json->Message ="No action request";
    echo $json_out = json_encode($json);
    exit(0);
}

