<?php  
session_start();
include "../../../PetsQu/template/resjs.php";

$admin = 'active nav-active';
$title = 'Admin - Dashboard';

include "../../template/navbar.php";
if(!isset($variable)){
?>

<div class="container">
    <div class="col-lg-8 col mx-auto my-5">
        <div class="card text-center">
            <div class="card-header">
                <h3>Pilih halaman yang ingin dikunjungi</h3>
            </div>
            <div class="card-body">
                <a href="product.php"><button class="btn btn-primary">Produk</button></a>
                <a href="account.php"><button class="btn btn-primary">Akun</button></a>
                <a href="order.php"><button class="btn btn-primary">Pesanan</button></a>
            </div>
        </div>
    </div>
</div>
<?php } ?>