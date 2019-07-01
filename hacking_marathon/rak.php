<?php session_start(); ?>
<html lang="en">
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>
		<div class="col-md-3">
		
		<?php $koneksi = new mysqli("localhost","root","","hackathon");
		for ($i=17; $i <= 32; $i++) { 
			
		
								$ambil = $koneksi->query("SELECT * FROM products WHERE id='$i'");
								$rak="rak";
								while ($obj = $ambil->fetch_object()) { ?>	
									<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<?php	echo '<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/'.$obj->product_img.'" alt=""></div>'; ?>
												<div class="product_content">
													<div class="product_price"><?php echo $obj->price; ?></div>
													<div class="product_name"><div><a href="product.html"><?php echo $obj->product_name; ?></a></div></div>
													<div class="product_extras">
														<?=	'<a href="proses_cart.php?id='.$obj->id.'"><button class="arrivals_single_button">Add to Cart</button></a>'; ?>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div></div>
		<div class="col-md-3">.col-md-3</div>
		<div class="col-md-3">.col-md-3</div>
		<div class="col-md-3">.col-md-3</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>