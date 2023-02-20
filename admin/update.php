<?php
include 'include/connect.php';
$id = $_GET['updateid'];
if (isset($_POST['update'])) {
  $companyname = $_POST['companyName'];
  $name = $_POST['userName'];
  $address = $_POST['Address'];
  $mobile = $_POST['mobileNumber'];
  $email = $_POST['Email'];

  $sql = "UPDATE signup SET companyName= '$companyname', userName ='$name' , Address='$address', mobileNumber='$mobile', Email='$email' WHERE id =$id ";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location:manage_user.php');
  } else {
    die(mysqli_error($con));
  }
}
//purano data display garney code..
if ($_REQUEST['updateid']) {
  $update_id = $_REQUEST['updateid'];
  $query = "SELECT * FROM `signup` WHERE `ID`='$update_id' LIMIT 1";
  $data = mysqli_query($con, $query);
  $data = $data->fetch_assoc();
}
?>



<html>

<head>
  <title>Update User</title>

  <link rel="stylesheet" href="css/signup.css">

</head>

<body>

  <?php
  include "include/header.php";
  ?>


  <form method="post" style="border:1px solid #ccc">
    <div class="container">
      <h1>Update Users</h1>
      <p>Please fill in this form to Update a user.</p>
      <hr>

      <label for="company name"><b>Company Name</b></label>
      <input type="text" value="<?php echo ($data['companyName']); ?>" placeholder="Enter Your Company Name" name="companyName" required autocomplete="off">

      <label for="UserName"><b>Full Name</b></label>
      <input type="text" value="<?php echo (($data['userName'])); ?>" placeholder="Enter Your Name" name="userName" required autocomplete="off">

      <label for="Address"><b>Address</b></label>
      <input type="text" value="<?php echo ($data['Address']); ?>" placeholder="Enter Your Address" name="Address" required autocomplete="off">

      <label for="Mobile Number"><b>Mobile Number</b></label>
      <input type="text" value="<?php echo ($data['mobileNumber']); ?>" placeholder="Enter Your Mobile number" name="mobileNumber"  pattern="[1-9]{1}[0-9]{9}" required autocomplete="off">

      <label for="email"><b>Email</b></label>
      <input type="text" value="<?php echo (($data['Email'])); ?>" placeholder="Enter Email" name="Email" required autocomplete="off">

      <div class="clearfix">
        <button type="button" class="cancelbtn1">Cancel</button>
        <button type="submit" class="signupbtn1" name="update">Update</button>
      </div>
    </div>
  </form>



  <?php
  include "include/footer.php";
  ?>



</body>

</html>