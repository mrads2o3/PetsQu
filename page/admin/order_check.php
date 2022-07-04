<?php 
include "../../../PetsQu/config/config.php";
include "../../../PetsQu/config/connection.php";
include "../../../PetsQu/template/datatables.php";

$variable = true;
include "../../page/admin/index.php";
$query = "SELECT * from pembelian where id_pembelian = ".$_GET['id'];
$mysqli_query = mysqli_query($conn, $query);
$var = mysqli_fetch_array($mysqli_query);

if(isset($_GET['id']) && $_GET['id'] != NULL && $_SESSION['status'] == 'admin'){
?>
<div class="container">
    <div class="col-lg-9 col mx-auto my-5">
        <div class="card">
            <div class="card-header text-center">
                <h3>ID Pesanan : <?= $var['id_pembelian']; ?></h3>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>Tanggal Pesan </td>
                        <td>: <?= $var['tanggal']; ?></td>
                    </tr>
                    <tr>
                        <td>ID Pelanggan </td>
                        <td>: <?= $var['id_pelanggan']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat </td>
                        <td>: <?= $var['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Handphone </td>
                        <td>: <?= $var['nope']; ?></td>
                    </tr>
                </table>
                <p>List barang :</p>
                <table id="table_id" class="display text-center">
                    <thead>
                        <tr>
                            <th>ID Keranjang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $querty = "SELECT * From keranjang where k_id_pembelian = '".$var['id_pembelian']."'";
                        $mysqli_querty = mysqli_query($conn, $querty);
                        while($varie = mysqli_fetch_array($mysqli_querty)){
                        ?>
                        <tr>
                            <td><?= $varie['id_keranjang']; ?></td>
                            <td><?= $varie['k_nama_produk']; ?></td>
                            <td><?= $varie['k_jumlah_beli']; ?></td>
                            <td><?= $varie['k_harga_produk']; ?></td>

                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#table_id').DataTable();
});
</script>
<?php } ?>