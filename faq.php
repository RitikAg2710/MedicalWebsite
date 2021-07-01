
<?php
session_start();
include_once 'dbconnect.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>FAQ|MySite</title>
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
<!-- start-smoth-scrolling -->
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
					<form action="cart.php" method="post" class="last">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">

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
								
									</li>
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
				<li class="active">FAQ</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- help-page -->
	<div class="faq-w3agile">
		<div class="container">
			<h2 class="w3_agile_header">Frequently asked questions(FAQ)</h2>
			<ul class="faq">
				<li class="item1"><a href="#" title="click here"> 1. Why is a pharmacist important to my overall health?</a>
					<ul>
						<li class="subitem1"><p>Pharmacists are well-versed in pharmacology, which is the branch of medicine that focuses on the uses and effects of drugs. Pharmacists understand the therapeutic roles of drugs and drug side effects and interactions with other drugs. </p></li>
					</ul>
				</li>
				<li class="item2"><a href="#" title="click here">2. What if medications make me too sleepy?</a>
					<ul>
						<li class="subitem1"><p>  This is a particular problem with seniors because drowsiness can increase unstable walking and cause falls. Also, people need to be cautioned about driving while taking a medication that might make them drowsy. It is always best to check with your doctor or pharmacist before using any medication, especially if you are adding an OTC medication, which may not be part of your medical record.</p></li>
					</ul>
				</li>
				<li class="item3"><a href="#" title="click here">3. How does age increase the risk for medication side effects?</a>
					<ul>
						<li class="subitem1"><p>Some medications like certain sleep aids can leave people a little hazy, and they have a harder time waking up and standing up. If this happens, they may need talk to their doctor about reducing the medication’s dose.</p></li>
					</ul>
				</li>
				<li class="item4"><a href="#" title="click here">4. Why do some medications affect my bathroom habits?</a>
					<ul>
						<li class="subitem1"><p></p>You should try to take your medication at the same time every day for the most beneficial effect of that medication. And if the medication is discontinued by the doctor, that needs to be noted and followed.</li>
					</ul>
				</li>
				<li class="item5"><a href="#" title="click here">5. Does it really matter what time of day you take medications?</a>
					<ul>
						<li class="subitem1"><p>Yes, a dosing schedule is important, because every medication that you take has a specific dosing schedule — once a day, three times a day, etc. You should try to take your medication at the same time every day for the most beneficial effect of that medication.</p></li>
					</ul>
				</li>
				<li class="item6"><a href="#" title="click here">6. How can caregivers help manage medications?</a>
					<ul>
						<li class="subitem1"><p>When a person is living at home and needs help taking medications, it is important that there is a family member or friend who sets up the medications. A caregiver from a home care agency cannot legally open medication containers and put medications in cassette dispensers and pillboxes.</p></li>
					</ul>
				</li>
				<li class="item7"><a href="#" title="click here">7. How long can medicine be used after the expiration date?</a>
					<ul>
						<li class="subitem1"><p>There is some controversy when it comes to expiration dates, but I do think people need to be cognizant of expiration dates. Certain medications like insulin, nitroglycerin and liquid antibiotics are most sensitive to expiration dates. </p></li>
					</ul>
				</li>
				<li class="item8"><a href="#" title="click here">8. How should medicines be stored?</a>
					<ul>
						<li class="subitem1"><p> Keep medications in a safe place and out of the reach of children and pets. Some medications need to be refrigerated, but the majority do not, and you can keep them in a dry place that’s not exposed to temperature extremes</p></li>
					</ul>
				</li>
				<li class="item9"><a href="#" title="click here">9. I’ve heard some foods interact with medications. Which ones do this?</a>
					<ul>
						<li class="subitem1"><p>Eating grapefruit and foods with vitamin K, such as kale, spinach and other green leafy vegetables, cause the most common food-drug interactions. Grapefruit can slow the metabolism of some drugs, so it increases the drug levels in your body. Vitamin K helps the body with blood clotting but can interfere with blood-thinning medications.</p></li>
					</ul>
				</li>
				<li class="item10"><a href="#" title="click here">10. What vaccinations are important for seniors?</a>
					<ul>
						<li class="subitem1"><p>People over age 65 are at higher risk for flu and should check with their doctor about the right flu vaccination. There are some restrictions for people with certain medical issues, but overall it’s recommended that most elderly people receive the flu shot. </p></li>
					</ul>
				</li>
			</ul>
			<!-- script for tabs -->
			<script type="text/javascript">
				$(function() {

					var menu_ul = $('.faq > li > ul'),
						   menu_a  = $('.faq > li > a');

					menu_ul.hide();

					menu_a.click(function(e) {
						e.preventDefault();
						if(!$(this).hasClass('active')) {
							menu_a.removeClass('active');
							menu_ul.filter(':visible').slideUp('normal');
							$(this).addClass('active').next().stop(true,true).slideDown('normal');
						} else {
							$(this).removeClass('active');
							$(this).next().stop(true,true).slideUp('normal');
						}
					});

				});
			</script>
			<!-- script for tabs -->
		</div>
	</div>
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

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});

		});
</script>
<!-- //main slider-banner -->
</body>
</html>
