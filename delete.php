<?php
include 'conn.php';
$n=$_GET['id'];
$n=mysqli_query($con,"delete from addpr where pname='$n'");
header('location:editpr.php');
?>