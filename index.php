<body>
    <?php
        session_start();
        $title = "Halaman Utama - PetsQu Shop"; 
        $home = "active nav-active";
        include "template/navbar.php";
        include "../PetsQu/config/config.php";
        include "../PetsQu/config/connection.php";
        $query_product = mysqli_query($conn, "SELECT * from produk order by id_produk DESC");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-10 col-12 mx-auto d-block my-3">
                <!-- carousel -->
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="image/banner/banner-1053x396.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="image/banner/banner-1053x396.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/banner/banner-1053x396.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Sebelumnya</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Selanjutnya</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <p class="subtitle">Produk baru</p>
            </div>
        </div>
        <div class="row g-4 mb-4">
            <?php 
                while($var = mysqli_fetch_array($query_product)){
                ?>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card h-100">
                    <img src="<?= $base_url."image/product/".$var['gambar_produk']; ?>" class="card-img-top"
                        style="height:150px;" alt=" ...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $var['nama_produk']; ?></h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> <b>Rp. <?= $var['harga_produk']; ?> </b></small>
                        <a href="<?= $base_url.'page/user/process/keranjang.php?action=add&id='.$var['id_produk']; ?>"><button
                                type="button" class="btn btn-success w-100 mt-1">+ Keranjang</button></a>
                        <a href="<?= $base_url.'product/detail.php?id='.$var['id_produk']; ?>">
                            <button type="button" class="btn btn-primary w-100 mt-1">Detail Produk</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php 
                }
                ?>
        </div>
    </div>
</body>


<?php
include "template/footer.php"; 
include "template/resjs.php";
?>