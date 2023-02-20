<?php

$host = "localhost";
    $uname = "root";
    $psw = "";
    $db = "PMS";

session_start();
$con = mysqli_connect("localhost","root","","pms");

$data = mysqli_connect($host,$uname,$psw,$db);
?>