<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="repa/fonts/icomoon/style.css">
    <link rel="stylesheet" href="repa/css/owl.carousel.min.css">
    <link rel="stylesheet" href="repa/css/bootstrap.min.css">
    <link rel="stylesheet" href="repa/css/style.css">
    <title> Forget Password </title>
</head>
<?php
include 'conn.php';
session_start();

if (isset($_POST['submit'])) {
    $em = $_POST['email'];
    $_SESSION['ff']=$em;
    header('location:src/verifymail.php');
    

    }
 ?>

       
<body>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="repa/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Change password</h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                        </div>
                        <form action="" method="post">

                            <div class="form-group first">
                                <label for="opword">Enter your Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            

                            <input type="submit" name="submit" value="Change Password" class="btn btn-block btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="repa/js/jquery-3.3.1.min.js"></script>
<script src="repa/js/popper.min.js"></script>
<script src="repa/js/bootstrap.min.js"></script>
<script src="repa/js/main.js"></script>


</body>
</html>
