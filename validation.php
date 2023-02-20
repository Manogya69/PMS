<?php

require('include/connection.inc.php');

mysqli_select_db($con, 'pms');

$uname = $_POST['uname'];
$psw = $_POST['psw'];


$s = " select * from signup where userName = '".$uname."' AND password = '".$psw."' ";

$result = mysqli_query($data, $s);
$num = mysqli_fetch_assoc($result);


if ($num["user_type"] == '0' ){
    $_SESSION['adminName']=$num['userName'];
    if($uname==$num['userName'] && $psw==$num['password']){

        header('location:admin/admin.php');
    }
}else if($num["user_type"] == '1' ){
    $_SESSION['clientName']=$num['userName'];
    if($uname==$num['userName'] && $psw==$num['password']){

        header('location:user/user.php');
    }
}else{
    
    header('location:login.php?error:invalid data');

}
