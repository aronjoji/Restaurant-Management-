<?php
include 'conn.php';
if (isset($_GET['order_id']))
 {
    $orderid = $_GET['order_id'];
    $data=mysqli_query($con,"select * from sales_sub where salesno='$orderid'");
    while($res=mysqli_fetch_array($data))

    {
        $pn=$res['pname'];
        $qn=$res['quantity'];
       
       
        $s=mysqli_query($con,"update addpr set quantity=quantity+'$qn' where pname='$pn'");
       
        
    }
   
    
    $sql = "DELETE FROM sales WHERE salesno = $orderid";
    
     mysqli_query($con, $sql);
     $sq1="DELETE FROM sales_sub WHERE salesno = $orderid";
     mysqli_query($con, $sql);
     header('location:myorder.php');
}
       
       
?>






