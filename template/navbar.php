<head>
    <?php include "rescss.php"; ?>
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
                <li class="nav-item">
                    <a class="nav-link <?= $produk; ?>" href="#">Produk</a>
                </li>
                <?php 
                if($_SESSION == NULL){
                ?>
                <li class="nav-item">
                    <a class="nav-link <?= $login; ?>" href="../../PetsQu/page/user/login.php">Masuk</a>
                </li>
                <?php 
                }else{
                    if($_SESSION['status'] == 'admin'){
                    ?>
                <li class="nav-item">
                    <a class="nav-link <?= $admin; ?>" href="#">Halaman admin</a>
                </li>
                <?php
                    }else{
                     ?>
                <li class="nav-item">
                    <a class="nav-link <?= $profile; ?>" href="../../PetsQu/page/user/profile.php">Profile</a>
                </li>
                <?php   
                    }
                    ?>
                <li class="nav-item">
                    <a class="nav-link <?= $logout; ?>" href="../../PetsQu/page/user/process/logout.php">Keluar
                        (<?= $_SESSION['nama']; ?>)</a>
                </li>
                <?php
                } 
                ?>
            </ul>
        </div>
    </div>
</nav>