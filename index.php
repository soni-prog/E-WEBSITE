<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="getbootstrap.com/docs/3.4/components/" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner_image">
            <div class="container">
                 <div id="banner_content">
                     <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                 </div>
              </div>
             </div>
        <?php
         require("includes/footer.php");
        ?>
    </body>
</html>
