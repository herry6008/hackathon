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
                                if (empty($nama)) {
                                    echo "Nama Harus Di isi"." ";
                                }
                               
                                if (empty($password)) {
                                    echo "Password Harus Di isi"." ";
                                }
                                if (empty($email)) {
                                    echo "Email Harus Di isi"." ";
                                }
                                if (strlen($password) < 8) {
                                    echo "Password Minimal 8 Digit";
                                }
                                if ($confirm != $password) {
                                    echo "Re Password Not Valid"." ";
                                }
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    echo "Email Tidak Valid";
                                }
                                
                                if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
                                    echo "Nama tidak valid";
                                }
                                if (!empty($nama) and !empty($password) and !empty($email)
                                    and strlen($password) >= 8 and $confirm = $password and filter_var($email,FILTER_VALIDATE_EMAIL) and preg_match("/^[a-zA-Z ]*$/", $nama) and $cek->num_rows < 1 ) {
                                    include '../koneksi.php';
                                    $daftar = mysqli_query($koneksi, "INSERT INTO user VALUES (
                                                NULL,
                                                '".$nama."',
                                                '".$email."',
                                                '".md5($password)."',
                                                'user')");
                                    if ($daftar) {
                                        echo "berhasil";
                                    }else{
                                        echo "gagal";
                                    }
                                    
                                }





                            }
                             ?>