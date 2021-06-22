<?php
include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="Login_submit">
                            <p class="text-warning"><i>Login to make a purchase</i></p>
                            <input type="text" name="email" placeholder="Email" required></br></br>
                            <input type="password" placeholder="Password" required></br></br>
                            <button class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account?<a href="#">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php 
          include 'includes/footer.php';
            ?>
    </body>
</html>


