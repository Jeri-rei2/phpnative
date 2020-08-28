<?php
include "../koneksi.php";
if (isset($_GET['id'])){
    $deleteSql = mysqli_query($con, "DELETE FROM MHS WHERE id_mhs='$_GET[id]'");
    if($deleteSql){
        echo "<script type='text/javascript'>
        alert('data berhasil dihapus..!'); location.href=\"home.php\";
      </script>";
    }
}



?>