<?php 
session_start();
$title = "Profile";
include "../../config/config.php";
include "../../config/connection.php";
include "../../../PetsQu/template/datatables.php";

if($_SESSION == NULL || $_SESSION['status'] == 'admin'){
    header('Location:'.$base_url.'page/user/login.php');
}else{
$pembelian = 'active nav-active';
include "../../template/navbar.php";
?>
<div class="container">
    <div class="col-lg-6 col-md-6 col mx-auto d-block">
        <div class="card my-5">
            <div class="card-header text-center">
                <h2>History Pembelian</h2>
            </div>
            <div class="card-body">
                <table id="table_id" class="display text-center">
                    <thead>
                        <tr>
                            <th>ID Pembelian</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        $query = "SELECT * from pembelian where id_pelanggan = '".$_SESSION['id_akun']."'";
                        $mysqli_query = mysqli_query($conn, $query);
                        while($var = mysqli_fetch_array($mysqli_query)){
                            if($var['status']=='diproses'){
                                $bg_color = 'primary';
                            }else{
                                $bg_color = 'success';
                            }
                        ?>

                        <tr>
                            <td><?= $var['id_pembelian']; ?></td>
                            <td>Rp. <?= $var['total']; ?></td>
                            <td><?= $var['status']; ?></td>
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