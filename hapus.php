<?php 
include "koneksi.php";

$id = $_GET["id"];

mysqli_query($conn,"DELETE FROM kartukeluarga WHERE id = $id");

if(mysqli_affected_rows($conn) > 0){
    echo "<script>
    alert('Penghapusan Data Berhasil');
    document.location.href = 'index.php'
    </script>";
}else{
    echo "<script>
    alert('penghapus Data Gagal');
    document.location.href = 'index.php'
    </script>";
}
