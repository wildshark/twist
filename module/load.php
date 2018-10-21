<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 21/10/2018
 * Time: 1:33 PM
 */
switch ($action){

    case 'create-account';
        require_once "module/user.php";
    break;

    default:
        $json->Error = "4110";
        $json->Message ="Action do not exist";
        echo $json_out = json_encode($json);
        exit(0);
}