<html>

<head>
    <title>Project</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <?php
    include "include/header.php";
    ?>

<div class="mapouter"><div class="gmap_canvas">
    <iframe width="600" height="500" id="gmap_canvas" 
    src="http://maps.google.com/maps?q=27.695318,85.304390&z=15&output=embed" frameborder="0" scrolling="no" marginheight="0"
     marginwidth="0"></iframe><br>

      
      
        <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
       
        <style>.gmap_canvas {overflow:hidden;background:none!important;height:700px;width:1000px; }</style></div></div>



    <?php
    include "include/footer.php";
    ?>
</body>

</html>