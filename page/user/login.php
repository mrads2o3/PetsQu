<html lang="en">

<?php 
$title = "Login - PetsQu Shop";
include "../../template/rescss.php"; 
?>

<body>
    <section class="vh-100 my-0 bg-01">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body py-5 px-4 text-center">
                            <h1 class="mb-4">PetsQu Shop - Masuk</h1>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="typeEmailX-2">Username</label>
                                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="typePasswordX-2">Password</label>
                                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                            </div>

                            <button class="btn btn-primary w-100" type="submit">
                                <h5 class="mt-1">Masuk</h5>
                            </button>
                            <p>Belum punya akun ? silahkan daftar <a href="/petsqu/page/user/register.php">Disini</a>
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