<html>

<head>
  <title>Project</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    * {
      box-sizing: border-box;
    }

    /* Style the search field */
    form.example input[type=text] {
      padding: 10px;
      margin-left: 125px;
      font-size: 17px;
      border: 1px solid grey;
      float: left;
      width: 75%;
      background: #f1f1f1;
      height: 50px;
    }

    /* Style the submit button */
    form.example button {
      float: left;
      width: 5%;
      padding: 10px;
      margin-top: 8px;
      margin-left: 5px;
      background: #2196F3;
      color: white;
      font-size: 17px;
      border: 1px solid grey;
      border-left: none;
      /* Prevent double borders */
      cursor: pointer;
      height: 50px;
      border: 1px solid grey;
      border-radius: 4px;
    }

    form.example button:hover {
      background: #0b7dda;
    }

    /* Clear floats */
    form.example::after {
      content: "";
      clear: both;
      display: table;
    }
  </style>
</head>

<body>

  <?php
  include "include/header.php";
  ?>

  <form class="example" action="action_page.php">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>



  <?php
  include "box.php";
  ?>

  <div class="card">
    <div class="image">
      <img src="img/brochure.jpg">
    </div>
    <div class="title">
      <h1>
       Brochure</h1>
    </div>
    <div class="des">
      <button class="button">Read More...</button>
    </div>

  </div>
  <div class="card">
    <div class="image">
      <img src="img/book.png">
    </div>
    <div class="title">
      <h1>
        Books</h1>
    </div>
    <div class="des">
      <button class="button">Read More...</button>
    </div>

  </div>
  <div class="card">
    <div class="image">
      <img src="img/badge.jpg">
    </div>
    <div class="title">
      <h1>
       badges</h1>
    </div>
    <div class="des">
      <button class="button">Read More...</button>
    </div>

  </div>
  <div class="card">
    <div class="image">
      <img src="img/cup.jpg">
    </div>
    <div class="title">
      <h1>
        Cups and more</h1>
    </div>
    <div class="des">
      <button class="button">Read More...</button>
    </div>
  </div>

  <?php
  include "include/footer.php";
  ?>

</body>

</html>