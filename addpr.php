<!doctype html>
<html lang="en">
  <head>
  	<title>Product Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="add/css/style.css">

	</head>
    <?php 
   include 'conn.php'; 
   if(isset($_POST['s1']))
   {
    $mpnm=$_POST['pname'];
    $mquan=$_POST['quan'];
    $mprice=$_POST['price'];
   
    $dup=mysqli_query($con,"select * from addpr where pname='$mpnm'");
    $dupress=mysqli_fetch_array($dup);
    if (empty($dupress[0]))
    {
    move_uploaded_file($_FILES['file']["tmp_name"],"img/".$_FILES['file']["name"]);
    $photo="img/".$_FILES['file']["name"];
    
    $n=mysqli_query($con,"insert into addpr(pname,quantity,price,photo) values('$mpnm','$mquan','$mprice','$photo')");
    if ($n >0)
    {
    header('location:adminpage.php');

    }
}
else
{
 echo"<script> alert('Product name exist');</script>";
}
}
?>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Add Products</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper img" style="background-image: url(add/images/img.jpg);">
						<div class="row">
							<div class="col-md-9 col-lg-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Enter the Details</h3>
									
									<form action="" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Product Name</label>
													<input type="text" class="form-control" name="pname" id="name" placeholder="Product name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Quantity</label>
													<input type="text" class="form-control" name="quan" id="text" placeholder="quantity">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Price</label>
													<input type="text" class="form-control" name="price" id="subject" placeholder="Price">
												</div>
											</div>
                                            <p>Upload Product image</p>
											<div class="input-box">
                                      <input type="file" placeholder="Upload Product image" name="file" required>
                                           </div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="submit" name="s1" class="btn btn-primary">
													<div class="submit"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="add/js/jquery.min.js"></script>
  <script src="add/js/popper.js"></script>
  <script src="add/js/bootstrap.min.js"></script>
  <script src="add/js/jquery.validate.min.js"></script>
  <script src="add/js/main.js"></script>

	</body>
</html>

