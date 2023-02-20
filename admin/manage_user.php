<?php
include 'include/connect.php';
?>

<!DOCTYPE html>

<head>
  <title>manage Users</title>
  <link rel="stylesheet" href="css/manageUser.css">

</head>

<body>
  <?php include "include/header.php";
  ?>

  <table id="users">
    <tr>
      <th>No.</th>
      <th>Company Name</th>
      <th>Name</th>
      <th>Address</th>
      <th>Mobile</th>
      <th>Email</th>
      <th>Operations</th>
    </tr>
    <?php

    $sql = "SELECT * FROM signup";
    $result = mysqli_query($con, $sql);
    if ($result) {
      $id = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        $id++;
        $companyName = $row['companyName'];
        $userName = $row['userName'];
        $Address = $row['Address'];
        $mobileNumber = $row['mobileNumber'];
        $Email = $row['Email'];

        echo '<tr>
        <th>' . $id . '</th>
        <td>' . $companyName . '</td>
        <td>' . $userName . '</td>
        <td>' . $Address . '</td>
        <td>' . $mobileNumber . '</td>
        <td>' . $Email . '</td>
        <td>
            <button class="button button1"><a href="update.php?updateid=' . $row['ID'] . '">Update</a></button>
            
            <button class="button delete"><a href="include/delete.php?deleteid=' . $row['ID'] . '">Delete</a></button>
            
  </td>

      </tr>';
      }
    }

    ?>

  </table>
  <button id="addUserBtn"> <a href="add_user.php">Add users</a></button>

  <br><br><br><br><br>








  <?php include "include/footer.php";
  ?>
</body>

</html>