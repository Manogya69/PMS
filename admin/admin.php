<?php
session_start();

?>


<!DOCTYPE html>

<head>
    <title>Admin Page</title>
</head>
<body>
  <?php include "include/header.php";
  ?>


<h1 style="text-align: center ;">Welcome to the admin panel, <?php echo $_SESSION["adminName"]; ?></h1>
<br><br><br><br><br><br><br><br><br><br><br><br>











  <?php include "include/footer.php";
  ?>
</body>

</html>