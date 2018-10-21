<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 21/10/2018
 * Time: 6:04 AM
 */

$servername = "iquipe.heliohost.org";
$username = "iquipe_quaye";
$password = "@passWD8282";
$database ="iquipe_bank2018";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();

