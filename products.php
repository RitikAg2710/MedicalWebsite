
<?php
session_start();
include_once 'dbconnect.php';
$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if (isset($_POST['categ'])){
	$cat = $_POST['category'];
	header("Location:products.php?cat=".$cat."");
}

if(isset($_GET["page"])){
	 $page  = $_GET["page"];
}
else{
	$page=1;
}

if(isset($_GET["cat"])){
	$cat = $_GET["cat"];
	$res = mysqli_query($con,"SELECT COUNT(*) AS total FROM products WHERE cname='".$cat."' ");
	$row = mysqli_fetch_array($res);
	$total_pages = ceil($row["total"] / 16);
	$start = ($page-1) * 16;
	$catsel = mysqli_query($con,"SELECT * FROM products WHERE cname='".$cat."' LIMIT $start,16");
}
else{
	$res = mysqli_query($con,"SELECT COUNT(*) AS total FROM products");
	$row = mysqli_fetch_array($res);
	$total_pages = ceil($row["total"] / 16);
	$start = ($page-1) * 16;
	$catsel = mysqli_query($con,"SELECT * FROM products LIMIT $start,16");
}
?>




<!DOCTYPE html>
<html>
<head>
<title>Products|MySite</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





<?php

	if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		$_SESSION['usr_email'] = $row['email'];

}
	else {
		$errormsg = "Incorrect Email or Password!!!";
	echo'	<script type="text/javascript">
				$(document).ready(function(){
				$("#myModal").modal("show");
				});
			</script> ';

	}
}



?>


<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
<style>
/.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px<!-- <li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li> -->; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 0px;
    border: 1px solid #888;
    width: 90%;
	    margin-top: 40px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}* The Modal (background) */

.button{
	font-size: 14px;
    color: #fff;
    background: #3399cc;
    text-decoration: none;
    position: relative;
    border: none;
    border-radius: 0;
    width: 100%;
    text-transform: uppercase;
    padding: .5em 0;
    outline: none;
}


</style>

<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">

			<div class="agile-login">
				<ul>

					<?php if (isset($_SESSION['usr_name'])) { ?>
					<li><p style="font-weight:bold; color:white">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
					<li><a href="logout.php">Log out</a></li>
					<?php } else { ?>
					<li><a href="login.php">Login</a></li>
					<li><a href="registered.php">Create Account</a></li>
					<?php } ?>

				</ul>
			</div>
			<div class="product_list_header">

						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value="" onclick="location.href='cart.php'"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
<!--
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>

				</ul>
-->
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Pharmacy Store</a></h1>
			</div>
		<div class="w3l_search">
			<form action="search.php" method="post">
        <?php $searchtext = NULL; ?>
        <input type="search" name="searchtext" id="searchtext" placeholder="Search for a Medicine..." required="" value="<?php echo $searchtext; ?>">
				<button type="submit" name="search" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>

			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>
									<!-- Mega Menu -->
									
									<li><a href="products.php">Category 1</a></li>
									<li><a href="products.php">Category 2</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>

<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
		<?php		if(isset($_GET["cat"])){
					$cat = $_GET["cat"];
					echo '<li class="active">'.$cat.'</li>';	
		}
		?>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- gourmet --->
	<div class="products">
		<div class="container">

			<div class="col-md-12 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
						<div class="sorting">
							<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="categorydropdown">
							<select id="country" name="category" class="frm-field required sect">

								<?php

									$sql = mysqli_query($con, "SELECT * FROM category");
									while ($row = mysqli_fetch_array($sql)){
									echo 	'<option value="'.$row['cname'].'"><i class="fa fa-arrow-right" aria-hidden="true"></i>'.$row['cname'].'</option>';
            						}
            					?>
              </select>
							<input style="    margin-top: 10px;min-width: 85px;background-color: #369acc;border-color: #3399cc;border-radius: 22px;
" type="submit" value="Go" name="categ">
							</form>

						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
            </div>


						<?php	if(isset($_SESSION['usr_id'])){
								echo '<input type="hidden" id="userid" name="userid" value="'. $_SESSION['usr_id'] .'" />    ';
								}
						?>



				<div class="agile_top_brands_grids">
	<?php
				$i=1;
				if(mysqli_num_rows($catsel) == 0){
					echo " <h2 align='center'>Sorry,there is no products in this category</h2> ";
				}
				while ($row = mysqli_fetch_array($catsel)) {
					$id = $row['id'];
				echo	'<div class="col-md-3 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">

								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="single.php?link=' .$id .'"><img style="height:150px" title=" " alt=" " src="'.$row['image'].'" /></a><br>
															<p><a href="single.php?link=' .$id .'">'.$row['name'].'</a></p>
															<h4>???'.$row['price'].'</h4>
														</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="" method="post">
													<fieldset>
														<input type="hidden" name="productid" value="'.$row['id'].'">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="'.$row['name'].'">
														<input type="hidden" name="amount" value="'.$row['price'].'">
														<input type="hidden" name="discount_amount" value="0.00">
														<input type="hidden" name="currency_code" value="INR">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">';
					if(isset($_SESSION['usr_id'])){
												echo  '<input type="button" class="button" id="'. $row['id'] .'" onclick="SubmitFormData(this);" value="ADD To CART" />';
					}
											echo	'</fieldset>
												</form>
												<div id="results'. $row['id'] .'">';
					if(!isset($_SESSION['usr_id'])){

											echo '<button type="button" Style="font-size: 14px;color: #fff;background: #3399cc;text-decoration: none;position: relative;border: none; border-radius: 0;width: 100%;text-transform: uppercase;padding: .5em 0;outline: none;	" data-toggle="modal" data-target="#myModal">ADD TO CART</button>';
					}
									echo	'</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>';

					if($i%4==0){
					echo   '<div class="clearfix"> </div>
							</div>
							<div class="agile_top_brands_grids">';

					}
					$i++;
			}
		?>





				<div class="agile_top_brands_grids">


				<div class="clearfix"> </div>
				</div>
				<nav class="numbering">
					<ul class="pagination paging">


							<?php
							if(isset($_GET["cat"])){
								$cat = $_GET["cat"];
								for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
									if($i==$page){
										echo " <li class='active'><a href='products.php?page=".$i."&cat=".$cat."'>".$i."<span class='sr-only'>(current)</span></a></li> ";
									}
									else{
										echo "<li><a href='products.php?page=".$i."&cat=".$cat."'";
										echo ">".$i."</a></li> ";
									}
								};
							}
							else{
								$cat = NULL;
								for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
									if($i==$page){
										echo " <li class='active'><a href='products.php?page=".$i."'>".$i."<span class='sr-only'>(current)</span></a></li> ";
									}
									else{
										echo "<li><a href='products.php?page=".$i."'";
										echo ">".$i."</a></li> ";
									}
								};
							}
							?>


						</li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

<!--- gourmet --->
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>

				<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Online Pharmacy<span>Contact Me.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@onlinepharmacy.com">info@onlinepharmacy.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>9325058722</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.php">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.php">Contact Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.php">FAQ's</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Category 1</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Category 2</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="cart.php">My Cart</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Login</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.php">Create Account</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<div class="footer-copy">

			<div class="container">
	<p> Design by <a>"Ritik Agrawal and Bhagyesh Joshi"</a></p>
			</div>
		</div>

	</div>



<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

	  <button type="button" class="close" data-dismiss="modal">&times;</button>
    <div style="padding: 1em 0;" class="login">
		<div class="container">
			<h2>Login Form</h2>

			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form role="form" action="<?php echo $_SESSION['url']; ?>" method="post" name="loginform">
					<input type="email" placeholder="Email Address" required=" " name="email" >
					<input type="password" placeholder="Password" required=" " name="password" >
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" value="Login" name="login">
				</form>
				<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
			</div>
			<h4>For New People</h4>
			<p><a href="registered.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
  </div>

</div>



<script>
	function SubmitFormData(elem) {
    var name = elem.id;
	var email = $("#userid").val();
    $.post("submit.php", { name: name, email: email },
    function(data) {
	 $("#result"+name).html(data);
	 $("#results"+name).html(data);
	 $('#myForm')[0].reset();
    });
}
</script>
