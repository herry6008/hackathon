<?php  if (isset($_POST['signin'])) {
    include '../koneksi.php';
    $email = $_POST['email'];
    $password = md5($_POST['pass']);
    $ambil = "SELECT * FROM user WHERE email='$email' and password='$password'";
    $cek = $koneksi->query($ambil);
    if ($cek->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        header("location:../hacking_marathon/cart.php");
    }else{
        echo "gagal";
    }
}

?>