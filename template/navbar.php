<head>
    <?php 
    $base_url = 'http://localhost/PetsQu/';
    include "rescss.php"; 
    ?>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-01">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PetsQu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $home; ?>" href="<?= $base_url; ?>">Halaman Utama</a>
                </li>
                <?php 
                if($_SESSION == NULL){
                ?>
                <li class="nav-item">
                    <a class="nav-link <?= $login; ?>" href="<?= $base_url; ?>page/user/login.php">Masuk</a>
                </li>
                <?php 
                }else{
                    if($_SESSION['status'] == 'admin'){
                    ?>
                <li class="nav-item">
                    <a class="nav-link <?= $admin; ?>" href="<?= $base_url; ?>page/admin/index.php">Halaman admin</a>
                </li>
                <?php
                    }else{
                     ?>
                <li class="nav-item">
                    <a class="nav-link <?= $keranjang; ?>" href="<?= $base_url; ?>page/user/keranjang.php">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $pembelian; ?>" href="<?= $base_url; ?>page/user/pembelian.php">Pembelian</a>
                </li>
                <?php   
                    }
                    ?>
                <li class="nav-item">
                    <a class="nav-link <?= $logout; ?>" href="<?= $base_url; ?>page/user/process/logout.php">Keluar
                        (<?= $_SESSION['nama']; ?>)</a>
                </li>
                <?php
                } 
                ?>
            </ul>
        </div>
    </div>
</nav>