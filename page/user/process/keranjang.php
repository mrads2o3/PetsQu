<?php 
session_start();
include "../../../../PetsQu/config/config.php";
include "../../../../PetsQu/config/connection.php";
if(!empty($_SESSION) && $_SESSION['status'] == 'user'){
    if(isset($_GET) && $_GET['id'] != NULL && $_GET['action'] == 'add' && $_SESSION['status'] == 'user'){
        $query0 = "SELECT * from produk where id_produk = '".$_GET['id']."'";
        $mysqli_query0 = mysqli_query($conn, $query0);
        $var0 = mysqli_fetch_array($mysqli_query0);
        $query = "INSERT INTO `keranjang`(`k_id_pembeli`, `k_id_produk`, `k_gambar_produk`, `k_nama_produk`, `k_deskripsi_produk`, `k_harga_produk`) 
        VALUES ('".$_SESSION['id_akun']."', '".$_GET['id']."', '".$var0['gambar_produk']."', '".$var0['nama_produk']."', '".$var0['deskripsi_produk']."', '".$var0['harga_produk']."')";
        $mysqli_query = mysqli_query($conn, $query);
        if($mysqli_query){
            $message = 'Berhasil menambahkan '.$var0['nama_produk'].' kedalam keranjang';
        }else{
            $message = 'Gagal menambahkan '.$var0['nama_produk'].' kedalam keranjang';
        }
        echo '<script>alert("'.$message.'"); window.location.replace("'.$base_url.'");</script>';
    }
}else{
    header("Location:".$base_url."page/user/login.php");
}
?>