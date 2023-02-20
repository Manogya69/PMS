<?php
    $companyName = $_POST['companyName'];
    $userName = $_POST['userName'];
    $Address = $_POST['Address'];
    $mobileNumber = $_POST['mobileNumber'];
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    
//SERVERSIDE VALIDATION
if(!empty($companyName) || !empty($userName) ||!empty($Address) || !empty($mobileNumber) ||!empty($Email) || !empty($password)) {

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "PMS";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT Email From signup Where Email = ? Limit 1";
        $INSERT = "INSERT Into signup (companyName, userName, Address, mobileNumber, Email, password) values(?, ?, ?, ?, ?, ?)";
        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        $stmt->bind_result($Email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssiss", $companyName, $userName, $Address, $mobileNumber, $Email, $password);
            $stmt->execute();
            header('location:login.php');
        }
        else{
            header('location:signup.php?error:invalid data');

        }
        $stmt->close();
        $conn->close();
    }
}   else{
    echo "all fields are required";
    die();
}
    
?>
