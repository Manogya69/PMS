<html>

<head>
  <title>Project</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <?php
  include "include/header.php";
  ?>



  <!-- Automatic Slideshow -->
  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="img/welcome.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="img/sale.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="img/discount.webp" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="img/thankyou.jpg" style="width:100%">
    </div>
    
  </div>
  
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
  </script>
  <!-- Automatic Slideshow -->



  <?php
  include "box.php";
  include "include/footer.php";


  ?>

</body>

</html>