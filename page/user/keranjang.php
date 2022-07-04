<?php 
session_start();
$title = "Profile";
include "../../config/config.php";
include "../../config/connection.php";
if($_SESSION == NULL || $_SESSION['status'] == 'admin'){
    header('Location:'.$base_url.'page/user/login.php');
}else{
$keranjang = 'active nav-active';
include "../../template/navbar.php";
?>
<div class="container">
    <div class="col-lg-6 col-md-6 col mx-auto d-block">
        <div class="card my-5">
            <div class="card-header text-center">
                <h2>Keranjang</h2>
            </div>
            <div class="card-body">
                <form action="process/pesan.php" method="POST">
                    <?php 
                    $query = mysqli_query($conn, "SELECT * from keranjang where k_id_pembelian = 0 and k_id_pembeli = ".$_SESSION['id_akun']);
                    while($var = mysqli_fetch_array($query)){
                    ?>

                    <div class="card my-2">
                        <!-- <div class="card-header col-12">
                            <input class="form-check-input" type="checkbox" name="barang_<?= $var['id_keranjang']?>"
                                value="<?= $var['id_keranjang']; ?>" aria-label="Checkbox for following text input">
                            <b><?= $var['k_nama_produk']; ?></b>
                        </div> -->
                        <div class="card-body">
                            <img src="../../../PetsQu/image/product/<?= $var['k_gambar_produk']; ?>" style="width:30%"
                                alt="">
                            Jumlah :
                            <input type="number" name="jumlah_<?= $var['id_keranjang'].'_'.$var['k_harga_produk'];?>"
                                id="" value="1">
                            <a href="<?= $base_url.'page/user/process/pesan.php?del_id='.$var['id_keranjang']; ?>">
                                <button type="button" class="btn btn-danger">Hapus</button></a><br>
                            Harga per pcs : Rp. <?= $var['k_harga_produk']; ?>
                        </div>
                    </div>

                    <?php
                    }
                    ?>
                    <div class="form-floating">
                        <textarea class="form-control mb-2" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px" name="alamat"><?= $_SESSION['alamat']; ?></textarea>
                        <label for="floatingTextarea2">Alamat Pengiriman</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="nope" value="<?= $_SESSION['nope']; ?>"
                            id="floatingInput" placeholder="1234567">
                        <label for="floatingInput">NOPE</label>
                    </div>
                    <?php if($query->num_rows != 0){?>
                    <button type="submit" class="btn btn-primary w-100">Beli</button>
                    <?php 
                    } 
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>