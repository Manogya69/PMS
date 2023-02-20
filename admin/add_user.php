<?php
include 'include/connect.php';
if(isset($_POST['add'])){
  $companyname =$_POST['companyName'];
  $name =$_POST['userName'];
  $address =$_POST['Address'];
  $mobile =$_POST['mobileNumber'];
  $email =$_POST['Email'];
  $password =$_POST['password'];

  // $sql="insert into 'signup' (companyName,userName,Address,mobileNumber,Email,password)
  // values('$companyname','$name','$address','$mobile','$email','$password')";
  $sql="INSERT Into signup (companyName, userName, Address, mobileNumber, Email, password) values('$companyname','$name','$address','$mobile','$email','$password')";
  $result = mysqli_query($con,$sql);
  if($result){
    header('location:manage_user.php');
  }
  else{
    die(mysqli_error($con));
  }
}

?>



<html>

<head>
  <title>Add User</title>

  <link rel="stylesheet" href="css/signup.css">

</head>

<body>

  <?php
  include "include/header.php";
  ?>


  <form method="post" style="border:1px solid #ccc">
    <div class="container">
      <h1>Add Users</h1>
      <p>Please fill in this form to Add a user.</p>
      <hr>

      <label for="company name"><b>Company Name</b></label>
      <input type="text" placeholder="Enter Your Company Name" name="companyName" required autocomplete = "off">

      <label for="UserName"><b>Full Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="userName" required autocomplete = "off">

      <label for="Address"><b>Address</b></label>
      <input type="text" placeholder="Enter Your Address" name="Address" required autocomplete = "off">

      <label for="Mobile Number"><b>Mobile Number</b></label>
      <input type="text" placeholder="Enter Your Mobile number" name="mobileNumber"  pattern="[1-9]{1}[0-9]{9}" required autocomplete = "off">

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="Email" required autocomplete = "off">

      <label for="password"><b>Password</b></label> 
      <input type="password" placeholder="Enter Password" name="password" required autocomplete = "off">

      <!-- <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

      <div class="clearfix">
        <button type="button" class="cancelbtn1">Cancel</button>
        <button type="submit" class="signupbtn1" name ="add">Add</button>
      </div>
    </div>
  </form>



  <?php
  include "include/footer.php";
  ?>



</body>

</html>