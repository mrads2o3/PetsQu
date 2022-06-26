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
                    <a class="nav-link <?= $home; ?>" href="#">Halaman Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $produk; ?>" href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $login; ?>" href="../../PetsQu/page/user/login.php">Masuk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>