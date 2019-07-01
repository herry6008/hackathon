
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                       
                    </div>

                    <div class="signin-form">
                        <h2 id="A1" class="form-title">Log in</h2>
                        <form method="POST" action="" class="register-form" id="login-form">

<?php  

if (isset($_POST['signin'])) { 
    include '../koneksi.php';
    $email = $_POST['email'];
    $password = md5($_POST['pass']);
    $ambil = "SELECT * FROM user WHERE email='$email' and password='$password'";
    $cek = $koneksi->query($ambil);
    if ($cek->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        header("location:../hacking_marathon/index.php");
    } 
     else { ?> 
        <script type="text/javascript">alert("Akun Belum Terdaftar")</script>
    <?php } ?>
<?php }

?>

                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <a href="form_register.php" class="signup-image-link">Belum Punya Akun? Daftar</a>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>