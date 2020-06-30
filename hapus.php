<?php
include("koneksi.php");
    $id = $_GET['id'];

    $sql = "DELETE from add_barang where id = '$id'";

    $query = mysqli_query($db, $sql);
    if($query){
        header('LOCATION: cek.php');
    }else{
        die("Gagal hapus!");
    }
?>