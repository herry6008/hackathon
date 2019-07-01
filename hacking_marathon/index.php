<?php session_start();
include '../config.php';
 ?>
<html lang="en">
<head>
<title>Hackathon V1.0</title>
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

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<?php if (isset($_SESSION['email'])) { ?>
								
							  
							<div class="top_bar_user">
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								<div>Hello <?php echo $_SESSION['email']; ?></div>
								<div><a href="logout.php">Log Out</a></div>
							</div>
							<?php }
							else{ ?>
							<div class="top_bar_user">
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								<div><a href="../form/form_register.php">Register</div></a>
								<div><a href="../form/form_login.php">Sign in</a></div>
							</div>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="../index.html">Hackathon</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
											
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span><?php if (isset($_SESSION['jumlah'])) {
											echo $_SESSION['jumlah'];
										} ?></span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="cart.php">Keranjang</a></div>
										<div class="cart_price"><?php ; 
										if (isset($_SESSION['barang'])) {
											echo "Rp"." ".$_SESSION['barang'].",--";
										}?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="../blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="cart.php">Keranjang<i class="fas fa-chevron-down"></i></a></li>
									<?php if (isset($_SESSION['email'])) {?>
										
									
									<li class="hassubs">
										<a href="#">Akun Saya<i class="fas fa-chevron-down"></i></a>
										<ul>
									<li><a href="pesanan.php">Pesanan Saya<i class="fas fa-chevron-down"></i></a></li>
											
										</ul>
									</li>
								<?php } ?>
									
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							
								<li class="page_menu_item">
									<a href="index.php">Home<i class="fa fa-angle-down"></i></a>
								</li>
								
								<li class="page_menu_item"><a href="../blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="cart.php">Keranjang<i class="fa fa-angle-down"></i></a></li>
							
								<?php if (isset($_SESSION['email'])) {?>
										<li class="page_menu_item">Hello <?php echo $_SESSION['email']; ?><i class="fa fa-angle-down"></i></li>
								
								<li class="page_menu_item"><a href="pesanan.php">Pesanan Saya<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="logout.php">Logout<i class="fa fa-angle-down"></i></a></li>
											
										</ul>
									</li>
								<?php } else  { ?>
									<li class="page_menu_item"><a href="../form/form_login.php">Login<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="../form/form_register.php">Register<i class="fa fa-angle-down"></i></a></li>
								<?php } ?>
								
								
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	
	<!-- Banner -->


	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="images/merge.jpg" alt=""></div><br>
				
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						
						<h1 class="banner_text">Rockwool Dan Nutrisi Hidroponik </h1>
						<div class="banner_price">Rp 120.000,-- dan Rp. 25.000,--</div>
						<div class="button banner_button"><a href="proses_cart.php?id=49">Beli Rockwool</a></div>
						<div class="button banner_button"><a href="proses_cart.php?id=50">Beli Nutrisi</a></div>
						<div class="button banner_button"><a href="proses_cart.php?id=51">Beli Paket</a></div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Banner -->




	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Hot New</div>
							<ul class="clearfix">
								<li class="active">RAK</li>
								<li>POT</li>
								<li>BIBIT</li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">

		<?php 
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
										</div>
									<?php } }?>
										
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

										
										<?php 
										for ($i=33; $i <= 48; $i++) { 
								$ambil = $koneksi->query("SELECT * FROM products WHERE id='$i'");
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
										</div>
									<?php } } ?>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

										<?php 
										for ($i=1; $i <= 16; $i++) { 
								$ambil = $koneksi->query("SELECT * FROM products WHERE id='$i'");
								while ($obj = $ambil->fetch_object()) { ?>	
									<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<?php	echo '<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/'.$obj->product_img.'" alt=""></div>'; ?>
												<div class="product_content">
													<div class="product_price"><?php echo $obj->price; ?></div>
													<div class="product_name"><div><a href="product.html"><?php echo $obj->product_name; ?></a></div></div>
													<div class="product_extras">
														
														<<?=	'<a href="proses_cart.php?id='.$obj->id.'"><button class="arrivals_single_button">Add to Cart</button></a>'; ?>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									<?php } } ?>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

							</div>

							<?php 
								$ambil = $koneksi->query("SELECT * FROM products WHERE id=19");
								$obj= $ambil->fetch_object(); ?>
							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="images/rak.jpg" alt=""></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#">RAK</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#"><?php echo $obj->product_name; ?></a></div>
												<div class="arrivals_single_price text-right"><?php echo $obj->price; ?></div>
											</div>
											
											<?php echo	'<a href="proses_cart.php?id='.$obj->id.'"><button class="arrivals_single_button">Add to Cart</button></a>'; ?>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="product_mark product_discount">-25%</li>
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>


</div>

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