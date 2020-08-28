<?php 

include "koneksi.php";
session_start();
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
   $query = mysqli_query($con, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
   if(mysqli_num_rows($query) !== 0){
    $get = mysqli_fetch_array($query);
    $level = $get['level'];
    $nama = $get['nm_admin'];
    $_SESSION['nama'] = $nama;
    $_SESSION['login_in'] = $username;
    if($level == "admin"){
           echo "<script type='text/javascript'>alert('Selamat datang $level'); location.href=\"admin/home.php\";
           </script>";
       }elseif($level == "user"){
        echo "<script type='text/javascript'>
             alert('Selamat datang $level'); location.href=\"user/home.php\";
           </script>";
       }
   }else{
    echo "<script type='text/javascript'>
    alert('Login gagal username atau password salah !!'); location.href=\"login.php\";
  </script>";
   }

}else{
    echo "<script type='text/javascript'>
             alert('Anda tidak ada akses pada Halaman ini.. !'); location.href=\"login.php\";
           </script>";

}




?>