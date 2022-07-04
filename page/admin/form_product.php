<?php 
include "../../../PetsQu/config/config.php";
include "../../../PetsQu/config/connection.php";
include "../../../PetsQu/template/datatables.php";

$variable = true;
include "../../page/admin/index.php";
if($_GET){
    $id = 'show';
    $file = 'hide';
    $query = mysqli_query($conn, "SELECT * from produk where id_produk = '".$_GET['id']."'");
    $var = mysqli_fetch_array($query);
}else{
    $id = 'hide';
    $file = 'required';
    $query = '';
    $var = '';
}
?>
<div class="container">
    <div class="col-lg-6 col-12 mx-auto my-4">
        <div class="card">
            <div class="card-header text-center">
                <h3>Data Produk</h3>
            </div>
            <div class="card-body">
                <form action="action_product.php" method="POST" enctype="multipart/form-data">

                    <?php if($id == 'show'){ ?>
                    <div class="form-floating mb-3">
                        <input name="id_produk" type="number" class="form-control" placeholder="ID"
                            value="<?= $var['id_produk']; ?>" required hidden>
                        <input type="number" class="form-control" id="floatingInput" placeholder="ID"
                            value="<?= $var['id_produk']; ?>" readonly>
                        <label for="floatingInput">ID Produk</label>
                    </div>
                    <?php } ?>

                    <div class="form-floating mb-3">
                        <input name="nama_produk" type="text" class="form-control" id="floatingInput" placeholder="name"
                            value="<?= ($id=='show')?$var['nama_produk']:''; ?>">
                        <label for="floatingInput">Nama Produk</label>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">File</label>
                        <input name="files" class="form-control" type="file" id="formFile" <?= $file; ?>>
                        <?php if($file == 'hide'){ ?>
                        <label for="formFile" class="form-label text-danger">*Jangan upload jika tidak ingin data
                            diubah</label>
                        <?php } ?>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea name="deskripsi_produk" class="form-control" placeholder="Deskripsi Produk"
                            id="floatingTextarea2" style="height: 200px"
                            required><?= ($id=='show')?$var['deskripsi_produk']:''; ?></textarea>
                        <label for="floatingTextarea2">Deskripsi Produk</label>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Harga : Rp.</span>
                        <input name="harga_produk" type="number" class="form-control" placeholder="9999999"
                            aria-label="Username" aria-describedby="basic-addon1"
                            value="<?= ($id=='show')?$var['harga_produk']:''; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>