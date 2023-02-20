<html>

<head>
  <title>Project</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/signup.css">

</head>

<body>

  <?php
  include "include/header.php";
  ?>


  <form action="connect.php" method="post" style="border:1px solid #ccc">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="company name"><b>Company Name</b></label>
      <input type="text" placeholder="Enter Your Company Name" name="companyName" required>

      <label for="UserName"><b>Full Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="userName" required>

      <label for="Address"><b>Address</b></label>
      <input type="text" placeholder="Enter Your Address" name="Address" required>

      <label for="Mobile Number"><b>Mobile Number</b></label>
      <input type="text" placeholder="Enter Your Mobile number" name="mobileNumber" pattern="[1-9]{1}[0-9]{9}" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="Email" required>

      <label for="password"><b>Password</b></label> 
      <input type="password" placeholder="Enter Password" name="password" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn1">Cancel</button>
        <button type="submit" class="signupbtn1">Sign Up</button>
      </div>
    </div>
  </form>



  <?php
  include "include/footer.php";
  ?>



</body>

</html>