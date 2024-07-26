<?php
include 'conn.php';
if (isset($_GET['order_id'])) 
{
    $orderId = $_GET['order_id'];
    
    
    $sql = "UPDATE sales SET status = 'collected' WHERE salesno = $orderId";
    mysqli_query($con, $sql);
    $sql = "UPDATE sales SET counterno = '0' WHERE salesno = $orderId";
    
    mysqli_query($con, $sql);
        
        header('location:invoice.php');
}
    

        
?>