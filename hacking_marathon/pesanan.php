
<?php 
session_start();

if (!isset($_SESSION['email'])) { ?>
  <script type="text/javascript">alert("Login Terlebih Dahulu")</script>
  <script type="text/javascript">location="../form/form_login.php"</script>
<?php }

include '../config.php';;
//echo "<pre>";
//print_r($_SESSION['keranjang']);
//echo "</pre>";
$total=0;
$jumlah=0;
 ?>


<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">

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

    

  </header>

  <!-- Cart -->
  <div class="cart_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cart_container">
            <div class="cart_title">Pesanan Anda</div>
 <?php 

              
            $email = $_SESSION['email'];

          
              
              $ambil = $koneksi->query("SELECT * FROM orders WHERE nama_email='$email'");
              while ($obj = $ambil->fetch_object()) {
            ?>
            
            
            <div class="cart_items">
              <ul class="cart_list">
                <li class="cart_item clearfix">
              <?php   echo '<div class="cart_item_image"><img src="images/'.$obj->product_img.'" alt=""></div>'; ?>
                  <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                    <div class="cart_item_name cart_info_col">
                      <div class="cart_item_title">Nama</div>
                      <div class="cart_item_text"><?php echo $obj->product_name; ?></div>
                    </div>
                    
                    <div class="cart_item_quantity cart_info_col">
                      <div class="cart_item_title">Jumlah-Produk</div>
                      <div class="cart_item_text"><?php echo $obj->product_jml; ?></div>
                    </div>
                    <div class="cart_item_price cart_info_col">
                      <div class="cart_item_title">Price</div>
                      <div class="cart_item_text"><?php echo $obj->product_price; ?></div>
                    </div>
                    <div class="cart_item_total cart_info_col">
                      <div class="cart_item_title">Total</div>
                      <div class="cart_item_text"><?php echo $obj->product_total; ?></div>
                    </div>
                    
                  </div>
                </li>
              </ul>
            </div>
            <?php } ?>
            
           
            

            <div class="cart_buttons">
              <a href="index.php"><button type="button" class="button cart_button_clear">BACK</button></a>
              
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
<script src="plugins/easing/easing.js"></script>
<script src="js/cart_custom.js"></script>
</body>

</html>