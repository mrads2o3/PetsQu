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
                <h3>Tabel akun</h3>
            </div>
            <div class="card-body">
                <table id="table_id" class="display text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $query = "SELECT * from akun where status != 'admin' order by id_akun ASC";
                        $mysqli_query = mysqli_query($conn, $query);
                        while($var = mysqli_fetch_array($mysqli_query)){
                        ?>
                        <tr>
                            <td><?= $var['id_akun']; ?></td>
                            <td><?= $var['username']; ?></td>
                            <td><?= $var['nama']; ?></td>
                            <td><?= $var['status']; ?></td>
                            <td>
                                <button class="btn btn-danger"
                                    onclick="if(confirm('Apakah anda yakin ingin menghapus akun <?= $var['username']; ?>?')){window.location.replace('<?= $base_url.'page/admin/action_account.php?del_id='.$var['id_akun']; ?>')}">
                                    Hapus</button>
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