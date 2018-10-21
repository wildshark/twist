<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 21/10/2018
 * Time: 11:51 AM
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['f-name'])){
        $fname = $_POST['f-name'];
    }elseif (isset($_POST['l-name'])) {
        $lname = $_POST['l-name'];
    }else{
        $json->Error ="4111";
        $json->Message ="Some field are empty";
        echo json_encode($json);
        exit(0);
    }

}else{
    $json->Error ="4110";
    $json->Message ="Missing request method";
    echo json_encode($json);
    exit(0);
}

