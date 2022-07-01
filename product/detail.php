<?php 
session_start();
include "../config/config.php";
include "../config/connection.php";
if($_GET['id'] == NULL){
    header("Location:".$base_url);
}
$query_product = mysqli_query($conn, "SELECT * from produk where id_produk = '".$_GET['id']."'");
$var = mysqli_fetch_array($query_product);
$title = "Detail Produk - ".$var['nama_produk'];
include "../template/navbar.php";
?>
<div class="container">
    <div class="row my-5">
        <div class="col-lg-5 col-sm-5 col-12 px-4">
            <img src="<?= $base_url."image/product/".$var['gambar_produk']; ?>" class="w-100" alt="">
        </div>
        <div class="col-lg-7 col-sm-7 col-12 px-4">
            <div class="card card-body">
                <h3 class="text-center"><?= $var['nama_produk']; ?></h3>
                <hr>
                <h5>Deskripsi :</h5>
                <p><?= $var['deskripsi_produk']; ?></p>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 text-center">
                        <h5>Harga : Rp. <?= $var['harga_produk']; ?></h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="col">
                            <button class="btn btn-success w-100">+ Keranjang</button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary w-100">Beli langsung</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>