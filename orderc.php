<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
    <style>
        /* CSS styles for the confirmation page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }

        .order-details {
            margin-top: 20px;
            text-align: center;
        }

        .thank-you {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: green;
        }

        .checkmark {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-image: url('checkmark.png'); /* Replace with the path to your checkmark image */
            background-size: cover;
            margin-right: 10px;
            vertical-align: middle;
        }

        .decoration {
            width: 100px;
            height: 100px;
            background-image: url('decoration.png'); /* Replace with the path to your decoration image */
            background-size: cover;
            margin: 0 auto;
            margin-top: 20px;
        }

        .continue-shopping {
            text-align: center;
            margin-top: 20px;
        }

        .continue-shopping button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<?php
include 'conn.php';
session_start();
if (isset($_SESSION['cn'])) 
    {
        $cn =$_SESSION['cn'];
    }
    $mxno=mysqli_query($con,"select max(salesno)+1 from sales");
    $no=mysqli_fetch_array($mxno);
    if(empty($no[0]))
    $sno=1;
else
$sno=$no[0];
$fn=$_SESSION['First_name'];
$un=$_SESSION['uname'];
$em=$_SESSION['email'];
$t=$_SESSION['t'];
if(isset($_POST['submit']))
{
    $sdate=date('Y-m-d');
    $s=mysqli_query($con,"insert into sales(salesno,sdate,username,cardno,totalamt,counterno,status)values('$sno','$sdate','$un','$cn','$t',0,'new order')");
    $data=mysqli_query($con,"select * from cart where username='$un'");
   
    $slno=1;
    while($res=mysqli_fetch_array($data))

    {
        $pn=$res['pname'];
        $qn=$res['quantity'];
        $pr=$res['price'];
        $t=$res['total'];
        $s=mysqli_query($con,"insert into sales_sub(salesno,slno,pname,quantity,price,total)values('$sno','$slno','$pn','$qn','$pr','$t')");
        $s=mysqli_query($con,"update addpr set quantity=quantity-'$qn' where pname='$pn'");
       
        $slno++;
    }
    $s=mysqli_query($con,"delete from cart where username='$un'");
    header('location:shop.php');
    
}
?>

<body>
    <div class="container">
      
        <h1>Order Confirmation</h1>
<form method="post">
        <div class="order-details">
            <h2>Order Details</h2>
            <p><strong class="checkmark"></strong> Order ID: <?php echo $sno; ?> </p>
            <p><strong class="checkmark"></strong> Name:  <?php echo $fn; ?> </p>
            <p><strong class="checkmark"></strong> Email: <?php echo $em; ?>  </p>
            <!-- Add more order details here as needed -->
        </div>

        <div class="decoration"></div>

        <div class="thank-you">
            <p>Thank you for your order!</p>
            <p>Your order has been successfully placed.</p>
        </div>

        <div class="continue-shopping">
       
            <button type='submit' name='submit'>Continue Shopping</button>
        </div>
</form>
    </div>
</body>
</html>
