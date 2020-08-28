<?php
include "../koneksi.php";
if(isset($_POST['tambah'])){
    $insertSql = mysqli_query($con, "INSERT Into mhs (nm_mhs,nim,jk,id_kelas,email) VALUES ('$_POST[nm_mhs]'
    ,'$_POST[nim]','$_POST[jk]','$_POST[id_kelas]','$_POST[email]')");
    if ($insertSql){
        echo "<script type='text/javascript'>
        alert('data berhasil disimpan..!'); location.href=\"home.php\";
      </script>";
    }

}



?>