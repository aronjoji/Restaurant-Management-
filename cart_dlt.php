<?php
include 'conn.php';
$n=$_GET['id'];
$n=mysqli_query($con,"delete from cart where id='$n'");
header('location:cart.php');
?>