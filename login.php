<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>


  <?php
  include "include/header.php";
  ?>

    <h1 style="text-align: center;">Welcome!
     <br> Please login to continue
    </h1>
    <form action="validation.php" method="post">



  <div class="container" id="box">
      <div class="form">
    <input type="text" placeholder="Enter Username" name="uname" required>


    <input type="password" placeholder="Enter Password" name="psw" required>

    <br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br>

    <button type="submit" class="submitbtn">Login</button>
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

    <br><br>

<span class="psw"> <a href="forgot.php">Forgot password?</a></span>
<span class="mem"> <a href="signup.php">Become a Member</a></span>

    </div>

    
  </div>
  </form>

  <?php
  include "include/footer.php";
  ?>
</body>
</html>