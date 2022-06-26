<body>
    <?php
        $title = "Halaman Utama - PetsQu Shop"; 
        $home = "active nav-active";
        include "template/navbar.php";
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
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
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
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card h-100">
                    <img src="..." class="card-img-top" style="height:150px;" alt=" ...">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> <b>Rp. 999.999.999 </b></small>
                        <button type="button" class="btn btn-success w-100 mt-1">+ Keranjang</button>
                        <button type="button" class="btn btn-primary w-100 mt-1">Detail Produk</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card h-100">
                    <img src="..." class="card-img-top" style="height:150px;" alt=" ...">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> <b>Rp. 999.999.999 </b></small>
                        <button type="button" class="btn btn-success w-100 mt-1">+ Keranjang</button>
                        <button type="button" class="btn btn-primary w-100 mt-1">Detail Produk</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card h-100">
                    <img src="..." class="card-img-top" style="height:150px;" alt=" ...">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> <b>Rp. 999.999.999 </b></small>
                        <button type="button" class="btn btn-success w-100 mt-1">+ Keranjang</button>
                        <button type="button" class="btn btn-primary w-100 mt-1">Detail Produk</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card h-100">
                    <img src="..." class="card-img-top" style="height:150px;" alt=" ...">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> <b>Rp. 999.999.999 </b></small>
                        <button type="button" class="btn btn-success w-100 mt-1">+ Keranjang</button>
                        <button type="button" class="btn btn-primary w-100 mt-1">Detail Produk</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<?php
include "template/footer.php"; 
include "template/resjs.php";
?>