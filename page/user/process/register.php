<?php 

include '../../../../PetsQu/config/config.php';
include '../../../../PetsQu/config/connection.php';
if($_POST){
    if($_POST['username'] && $_POST['password'] && $_POST['nama'] && $_POST['alamat'] && $_POST['nope']){
        // Check username
        $check_username = mysqli_query($conn, "SELECT * FROM akun WHERE username = '".$_POST['username']."'");
        if($check_username->num_rows != NULL){
            echo '<script>alert("Akun dengan username '.$_POST['username'].' sudah terdaftar!"); window.location.replace("'.$base_url.'page/user/login.php");</script>';
        }else{
            $sql = "INSERT into akun (username, password, nama, alamat, nope, status) values ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['nama']."', '".$_POST['alamat']."', '".$_POST['nope']."', 'user')";
            if(mysqli_query($conn, $sql)) {
                echo '<script>alert("Akun dengan username '.$_POST['username'].' berhasil didaftarkan, sekarang anda dapat login menggunakan akun tersebut!"); window.location.replace("'.$base_url.'page/user/login.php");</script>';
            }else{
                echo '<script>alert("Akun dengan username '.$_POST['username'].' gagal didaftarkan!"); window.location.replace("'.$base_url.'page/user/register.php");</script>';
            }
        }
    }
}else{
    echo '<script>alert("Nothing To Do Here!"); window.location.replace("'.$base_url.'");</script>';
}

?>