<?php include "../../../PetsQu/config/config.php"; include "../../../PetsQu/config/connection.php";
session_start();
if($_POST && $_SESSION['status']=='admin'){

    // ============================================= Proses =============================================
    if(isset($_POST['id_produk'])){
        
        if(!$_FILES['files']['error']){

            if(isset($_FILES['files'])){
                function generateRandomString($length = 50) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    return $randomString;
                }
                $location = "../../image/product";
                $size = $_FILES['files']['size'];
                $img_name = generateRandomString();
                $img_filetype = strtolower(pathinfo(basename($_FILES["files"]["name"]),PATHINFO_EXTENSION));
                $img_finalname = $img_name.'.'.$img_filetype;
                $img_finallocation = $location.'/'.$img_finalname;
                $img_check = getimagesize($_FILES["files"]["tmp_name"]);
                $query = "UPDATE `produk` SET `gambar_produk` = '".$img_finalname."', `nama_produk`='".$_POST['nama_produk']."',`deskripsi_produk`='".$_POST['deskripsi_produk']."',`harga_produk`='".$_POST['harga_produk']."' WHERE id_produk = '".$_POST['id_produk']."'";

                if($img_check !== false) {
                    if($img_filetype == "jpg" || $img_filetype == "jpeg" || $img_filetype == "png"){
                        if($size < 5000000){ // Max file size 5MB
                            if(file_exists($img_finallocation)) {
                                $message = "Sorry, file already exists, pls reupload to get a new random name!";
                            }else{
                                if(move_uploaded_file($_FILES["files"]["tmp_name"], $img_finallocation)) {
    
                                    $queryi = mysqli_query($conn, $query);
                                    if($queryi){
                                        $message = "The file ". htmlspecialchars(basename($_FILES["files"]["name"])). " has been uploaded with a new name ". $img_finalname;
                                    }else{
                                        $message = "Failed!";
                                    }
                                    
                                }else{
                                    $message = "Sorry, there was an error uploading your file.";
                                }
                            }
                        }else{
                            $message = "File is an image but to large, Max file size 5MB!";
                        }
                    }else{
                        $message = "Format image not JPG/JPEG/PNG!";
                    }
    
                } else {
                    $message = "File is not an image.";
                }
    
            }else{
                $message = "File not uploaded, please refresh before ReUpload!";
            }

        }else{
            $query = "UPDATE `produk` SET `nama_produk`='".$_POST['nama_produk']."',`deskripsi_produk`='".$_POST['deskripsi_produk']."',`harga_produk`='".$_POST['harga_produk']."' WHERE id_produk = '".$_POST['id_produk']."'";
            $mysqli_query = mysqli_query($conn, $query);
            if($query){
                $message = "Data berhasil diubah!";
            }else{
                $message = "Data gagal diubah";
            }
        }

    }else{
        if(isset($_FILES['files'])){
            function generateRandomString($length = 50) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }
            $location = "../../image/product";
            $size = $_FILES['files']['size'];
            $img_name = generateRandomString();
            $img_filetype = strtolower(pathinfo(basename($_FILES["files"]["name"]),PATHINFO_EXTENSION));
            $img_finalname = $img_name.'.'.$img_filetype;
            $img_finallocation = $location.'/'.$img_finalname;
            $img_check = getimagesize($_FILES["files"]["tmp_name"]);
            $query = "INSERT INTO `produk`(`gambar_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`) VALUES ('".$img_finalname."', '".$_POST['nama_produk']."', '".$_POST['deskripsi_produk']."', '".$_POST['harga_produk']."');";

            if($img_check !== false) {
                if($img_filetype == "jpg" || $img_filetype == "jpeg" || $img_filetype == "png"){
                    if($size < 5000000){ // Max file size 5MB
                        if(file_exists($img_finallocation)) {
                            $message = "Sorry, file already exists, pls reupload to get a new random name!";
                        }else{
                            if(move_uploaded_file($_FILES["files"]["tmp_name"], $img_finallocation)) {

                                // $this->files->insert(['tipe_files'=>$type, 'nama_files'=>$img_finalname, 'catatan'=>$note]);
                                $queryi = mysqli_query($conn, $query);
                                if($queryi){
                                    $message = "The file ". htmlspecialchars(basename($_FILES["files"]["name"])). " has been uploaded with a new name ". $img_finalname;
                                }else{
                                    $message = "Failed!";
                                }
                                
                            }else{
                                $message = "Sorry, there was an error uploading your file.";
                            }
                        }
                    }else{
                        $message = "File is an image but to large, Max file size 5MB!";
                    }
                }else{
                    $message = "Format image not JPG/JPEG/PNG!";
                }

            } else {
                $message = "File is not an image.";
            }

        }else{
            $message = "File not uploaded, please refresh before ReUpload!";
        }
    }
    echo '<script>alert("'.$message.'");  window.location.replace("'.$base_url.'page/admin/product.php");</script>';
}else if(isset($_GET['del_id']) && $_SESSION['status']=='admin'){
    $query = "DELETE from produk where id_produk = '".$_GET['del_id']."'";
    $mysqli_query = mysqli_query($conn, $query);
    if($mysqli_query){
        $message = 'Data berhasil dihapus!';
    }else{
        $message = 'Data gagal dihapus';
    }
    echo '<script>alert("'.$message.'");  window.location.replace("'.$base_url.'page/admin/product.php");</script>';
}else{
    echo '<script>alert("Nothing To Do Here!"); window.location.replace("'.$base_url.'");</script>';
}
?>