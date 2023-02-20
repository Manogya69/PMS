<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM signup WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:../manage_user.php');
    }
    else{
        die(mysqli_error($con));
    }

}
?>