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
                <h3>Tabel Pesanan</h3>
            </div>
            <div class="card-body">
                <table id="table_id" class="display text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tgl</th>
                            <th>Pelanggan</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $query = "SELECT * from pembelian order by id_pembelian DESC";
                        $mysqli_query = mysqli_query($conn, $query);
                        while($var = mysqli_fetch_array($mysqli_query)){
                        ?>
                        <tr>
                            <td><?= $var['id_pembelian']; ?></td>
                            <td><?= $var['tanggal']; ?></td>
                            <td><?= $var['id_pelanggan']; ?></td>
                            <td><?= $var['status']; ?></td>
                            <td>
                                <a href="order_check.php?id=<?= $var['id_pembelian']; ?>">
                                    <button class="btn btn-primary">Cek</button>
                                </a>
                            </td>
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