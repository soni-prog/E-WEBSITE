<?php
require("includes/common.php");
if (isset($_SESSION['email'])) 
    {   
    header('location: products.php'); 
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
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
        <div class="container">
            <div class="row row_style">
                <div class="col-sm-12">
                    <h1><b>SIGN UP</b></h1>
                    <form methdo="POST" action="Signup_script.php">
                        <div class="form-group">
                        <input type="text" placeholder="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="password" name="password" class="form-control" patteren=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="contect" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="city" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="address" class="form-control">
                        </div>
                        <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
       require("includes/footer.php");
        ?>
    </body>
</html>


