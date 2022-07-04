<?php 
include "../../../PetsQu/config/config.php";
include "../../../PetsQu/config/connection.php";
include "../../../PetsQu/template/datatables.php";

$variable = true;
include "../../page/admin/index.php";
?>
<div class="container">
    <div class="col-lg-9 col mx-auto my-5">
        <div class="card">
            <div class="card-header text-center">
                <h3>Tabel Produk</h3>
            </div>
            <div class="card-body">
                <a href="form_product.php"><button class="btn btn-success mb-3">Tambah data</button></a>
                <table id="table_id" class="display text-center">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Nama Produk</th>
                            <th class="text-center">Harga/pcs</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query = 'SELECT * from produk order by id_produk ASC';
                        $mysql_query = mysqli_query($conn, $query);
                        while($var = mysqli_fetch_array($mysql_query)){
                        ?>
                        <tr>
                            <td><?= $var['id_produk']; ?></td>
                            <td><img src="<?= $base_url.'image/product/'.$var['gambar_produk']; ?>"
                                    style="width:100px;height:auto;"></td>
                            <td><?= $var['nama_produk']; ?></td>
                            <td><?= 'Rp. '.$var['harga_produk']; ?></td>
                            <td>
                                <a href="form_product.php?id=<?= $var['id_produk']; ?>">
                                    <button class="btn btn-success">Ubah</button></a>
                                <button class="btn btn-danger"
                                    onclick="if(confirm('Apakah anda yakin?')){window.location.replace('<?= $base_url.'page/admin/action_product.php?del_id='.$var['id_produk']; ?>')}">
                                    Hapus</button>
                            </td>
                        </tr>
                        <?php } ?>
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