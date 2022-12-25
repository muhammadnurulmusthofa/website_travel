<?php

session_start();

include 'koneksi.php';

//menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

//menyeleksi data admin dengan username dan password
$data = mysqli_query($koneksi, "select * from akun where email='$email' and password='$password'");

//menghitung data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("location:index.php");
}else{
    header("location:signin.php?pesan=anda gagal login");
}

?>
