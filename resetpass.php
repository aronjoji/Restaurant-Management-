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
    <title>Password Change</title>
</head>
<?php
include 'conn.php';
session_start();

if (isset($_POST['submit'])) {
    $opword = $_POST['opword'];
    $npword = $_POST['npword'];
    $rpword = $_POST['rpword'];

    $op = $_SESSION['pword'];
    $un = $_SESSION['uname'];

    if ($opword == $op)
      {
         if ($npword == $rpword)
           {
            $updatePasswordQuery = mysqli_query($con, "UPDATE registration SET password = '$npword' where username = '$un'");
           
    
           echo "<script>alert('Password changed');window.location.href='shop.php';</script>";
        }
       else
         {
       echo "<script>alert('Password not changed');window.location.href='shop.php';</script>";
         }
         }
       else
         {
        echo "<script>alert('Old password is incorrect');window.location.href='shop.php';</script>";
        }

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
                                <label for="opword">Old Password</label>
                                <input type="password" class="form-control" id="opword" name="opword">
                            </div>
                            <br>

                            <div class="form-group last mb-4">
                                <label for="npword">New Password</label>
                                <input type="password" class="form-control" id="npword" name="npword">
                            </div>

                            <div class="form-group last mb-4">
                                <label for="rpword">Confirm Password</label>
                                <input type="password" class="form-control" id="rpword" name="rpword">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" name="remember" checked="checked"/>
                                    <div class="control__indicator"></div>
                                </label>
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
