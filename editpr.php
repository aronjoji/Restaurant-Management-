<!doctype html>
<html lang="en">
  <head>
  	<title>Table 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="table/css/style.css">

	</head>
	<?php
include 'conn.php';
session_start();
$_SESSION['m']=0;

$cres=mysqli_query($con,"select * from addpr");
?>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Edit Products</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="h5 mb-4 text-center">Table </h3>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>

							
						    	<th>Product Name</th>
						      <th>Price</th>
							  <th>Photo</th>
						      <th>Quantity</th>
							  <th>Actions</th>
						     
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php
            while($result=mysqli_fetch_array($cres))
            {
                ?>
            
            <tr>
                <td>
               
              <?php echo $result['pname'];?>
              </td>
              <td><?php echo $result['price'];?></td>
              <td>
              <img src="<?php echo $result['photo'];?>" width="200" height="200"/>
              </td>
              <td><?php echo $result['quantity'];?></td>
              
              <td>
                
                    <a href="edit.php?id=<?php echo $result['pname'];?>">
                      edit
                    </a>
            </td>
            <td>
                    <a href="delete.php?id=<?php echo $result['pname'];?>">
           delete
                    </a>
            </td>
            </tr>
            <?php
            }
            ?>
            
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="table/js/jquery.min.js"></script>
  <script src="table/js/popper.js"></script>
  <script src="table/js/bootstrap.min.js"></script>
  <script src="table/js/main.js"></script>

	</body>
</html>

