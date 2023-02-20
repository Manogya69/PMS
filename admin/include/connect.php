<?php
session_start();


$con=new mysqli('localhost','root','','pms');

if(!$con){
    die(mysqli_error($con));
}