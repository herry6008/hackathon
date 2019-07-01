
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 id="A2" class="form-title">Sign up</h2>
                        <form method="POST" action="" class="register-form" id="register-form">

<?php 
                            
                            if (isset($_POST['tombol'])) {
                                include '../koneksi.php';

                                $nama = $_POST['name'];
                                
                                $email = $_POST['email'];
                                $password= $_POST['pass'];
                                $confirm = $_POST['re_pass'];
                                $ambil = "SELECT * FROM user WHERE email='$email'";
                                $cek = $koneksi->query($ambil);
                                if ($cek->num_rows >= 1 ) {?>
                                
                               <script type="text/javascript">alert('Email Sudah Terdaftar')</script>
                               <script type="text/javascript">location="index.php"</script> <?php } ?>
                                <?php
                                if (empty($nama)) { ?>
                                <script type="text/javascript">alert('Nama Harus Di isi')</script>
                               <script type="text/javascript">location="index.php"</script>
                                <?php } ?>

                               <?php
                                if (empty($password)) { ?>
                                    <script type="text/javascript">alert('Password Harus Di isi')</script>
                               <script type="text/javascript">location="index.php"</script>
                                <?php } ?>

                                <?php
                                if (empty($email)) { ?>
                                   <script type="text/javascript">alert('Email Harus Di isi')</script>
                               <script type="text/javascript">location="index.php"</script>
                                <?php } ?>

                                <?php 
                                if (strlen($password) < 8) { ?>
                                    <script type="text/javascript">alert('Password Minimal 8 Digit')</script>
                               <script type="text/javascript">location="index.php"</script>
                                <?php } ?>

                                <?php
                                if ($confirm != $password) { ?>
                                    <script type="text/javascript">alert('Re-password Harus Sama Dengan Password')</script>
                               <script type="text/javascript">location="index.php"</script>
                                <?php } ?>

                                <?php
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { ?>
                                    <script type="text/javascript">alert('Email Tidak Valid')</script>
                               <script type="text/javascript">location="index.php"</script>
                                <?php } ?>
                                
                                <?php
                                if (!preg_match("/^[a-zA-Z ]*$/", $nama)) { ?>
                                    echo "Nama tidak valid";
                                <?php } ?>

                                <?php 

                                if (!empty($nama) and !empty($password) and !empty($email)
                                    and strlen($password) >= 8 and $confirm = $password and filter_var($email,FILTER_VALIDATE_EMAIL) and preg_match("/^[a-zA-Z ]*$/", $nama) and $cek->num_rows < 1 ) {
                                    include '../koneksi.php';
                                    $daftar = mysqli_query($koneksi, "INSERT INTO user VALUES (
                                                NULL,
                                                '".$nama."',
                                                '".$email."',
                                                '".md5($password)."',
                                                'user')");
                                    if ($daftar) { ?>
                                       <script type="text/javascript">alert('Berhasil Daftar')</script>
                               <script type="text/javascript">location="../hacking_marathon/index.php"</script>
                                    <?php }
                                    
                                    else{ ?>
                                        <script type="text/javascript">alert('Gagal Daftar')</script>
                               <script type="text/javascript">location="form_login.php"</script>
                                    <?php } 
                                    
                                }





                            }
                             ?>

                            <div  class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <a href="form_login.php" class="signup-image-link">Sudah Punya Akun? Silahkan Login</a>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="tombol" id="signup" class="form-submit" value="Register"/>
                            </div>
                            <a href="../index.html" class="signup-image-link">BACK</a>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        
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