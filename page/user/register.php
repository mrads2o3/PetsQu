<!doctype html>
<html lang="en">
<?php $title="Daftar - PetsQu Shop"; include "../../template/rescss.php"; ?>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body py-5 px-4">

                            <h3 class="mb-5 text-center">PetsQu Shop - Daftar</h3>

                            <div class="row my-1">
                                <div class="col-lg-3 col-sm-3 col-4">
                                    Username
                                </div>
                                <div class="col-lg-9 col-sm-9 col-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-lg-3 col-sm-3 col-4">
                                    Password
                                </div>
                                <div class="col-lg-9 col-sm-9 col-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-lg-3 col-sm-3 col-4">
                                    Nama
                                </div>
                                <div class="col-lg-9 col-sm-9 col-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-lg-3 col-sm-3 col-4">
                                    Alamat
                                </div>
                                <div class="col-lg-9 col-sm-9 col-8">
                                    <textarea class="form-control" placeholder="Alamat lengkap" id="floatingTextarea2"
                                        style="height: 100px"></textarea>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-lg btn-block w-100 mt-3" type="submit">Daftar</button>
                            <p class="text-center">Sudah punya akun? Silahkan masuk <a
                                    href="../../../PetsQu/page/user/login.php">Disini</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include "../../template/resjs.php"; ?>

</html>