<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from salero.dexignzone.com/codeigniter/demo/ecom_product_order by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 12:59:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	 <!-- Meta -->
     <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="keywords" content="admin, admin dashboard, admin template, analytics, bootstrap, bootstrap 5, codeigniter admin template, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app, frontend, shop, shop cart, blog">
	<meta name="description" content="Discover Salero - the ultimate admin dashboard and CodeIgniter template. Specially designed for professionals, and for business. W3Admin provides advanced features and an easy-to-use interface for creating a top-quality website">
	<meta property="og:title" content="Salero CodeIgniter Restaurant Admin Bootstrap Template">
	<meta property="og:description" content="Discover Salero - the ultimate admin dashboard and CodeIgniter template. Specially designed for professionals, and for business. W3Admin provides advanced features and an easy-to-use interface for creating a top-quality website">
	<meta property="og:image" content="../social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- PAGE TITLE HERE -->
	<title>Salero CodeIgniter Restaurant Admin Bootstrap Template</title>
    <!-- Favicon icon -->
	
	<link rel="icon" type="image/png" sizes="16x16" href="adm/public/assets/images/favicon.png">	
	
			
		 <link href="adm/public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>	
		
		 <link href="adm/public/assets/css/style.css" rel="stylesheet" type="text/css"/>	
	
</head>
<?php
include 'conn.php';
session_start();
$un=$_SESSION['uname'];

$cres=mysqli_query($con,"select * from sales where username='$un' and (status='Delivered' or status='new order')");
if (isset($_POST['submit']))
{
	$st=$_POST['submit'];
	mysqli_query($con,"update sales set status='Delivered',counterno='$no' where salesno='$id'");
	header('location:order_list.php');
}



?>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-box">
				<div class="icon">
				  <i class="fas fa-utensils"></i>
				</div>
			</div>
		</div>
	</div>	
	
    <!--*******************
        Preloader end
    ********************-->
	
	<!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

		<!--**********************************
    Nav header start
***********************************-->

<!--**********************************
    Nav header end
***********************************-->		<!--**********************************
	Chat box start
***********************************-->

<!--**********************************
	Chat box End
***********************************-->        <!--**********************************
	Header start
***********************************-->
<div class="header">
	<div class="header-content">
		<nav class="navbar navbar-expand">
			<div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
					<div class="dashboard_bar">
					My Orders					</div>
				</div>
				
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</div>
<!--**********************************
	Header end 
***********************************-->        <!--**********************************
    Sidebar start
***********************************-->

<!--**********************************
    Sidebar end
***********************************-->        <!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-sm mb-0">
								<thead class="text-white bg-primary">
									<tr>
										
										<th class="align-middle">Order Number</th>
										<th class="align-middle pe-7">Date</th>
										<th class="align-middle" style="min-width: 8 rem;">Name</th>
										<th class="align-middle text-end">Amount</th>
										<th class="align-middle text-end">Status</th>
										<th class="align-middle text-end">Counter Number</th>
										<th class="align-middle text-end">Actions</th>
										
										<th class="no-sort"></th>
									</tr>
								</thead>
								<tbody id="orders">
									<?php
								while($result=mysqli_fetch_array($cres))
            {
                ?>
									<tr class="btn-reveal-trigger">
										

										<td class="py-2">
											
												<span class="order"><?php echo $result['salesno'];?></span></td>
										<td class="py-2"><?php echo $result['sdate'];?></td>
										
										
									
										<td class="py-2"><?php echo $result['username'];?></td>
										
										
										<td class="py-2 text-end font-w600"><?php echo $result['totalamt'];?>
										</td>	

										<td class="py-2 text-end"><span class="badge badge-success badge-sm"><?php echo $result['status'];?><span
													class="ms-1 fa fa-check"></span></span>
										</td>
										<td class="py-2 text-end font-w600"><?php echo $result['counterno'];?>
										</td>	
										<td>
                        <form method="post">
						<input class="py-2 text-end font-w600" type="hidden" name="submit" value="<?php echo $result['status']; ?>">
						<td>
						<td>
    <?php
    $status = $result['status'];
    if ($status == 'new order') {
        echo '<a href="cancel_order.php?order_id=' . $result['salesno'] . '">Cancel</a>';
    } elseif ($status == 'Delivered') {
        echo '<a href="collect_order.php?order_id=' . $result['salesno'] . '">Collect</a>';
    }
    ?>
</td>
										
										<td class="py-2 text-end">
											
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
		</div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->
        <!--**********************************
    Footer start
***********************************-->

<!--**********************************
    Footer end
***********************************-->        
		
	</div>
			<script src="adm/public/assets/vendor/global/global.min.js"></script>
			<script src="adm/public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
		

		
			<script src="adm/public/assets/js/custom.js"></script>
			<script src="adm/public/assets/js/deznav-init.js"></script>
			<script src="adm/public/assets/js/demo.js"></script>
			<script src="adm/public/assets/js/styleSwitcher.js"></script>
		

    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from salero.dexignzone.com/codeigniter/demo/ecom_product_order by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 12:59:58 GMT -->
</html>