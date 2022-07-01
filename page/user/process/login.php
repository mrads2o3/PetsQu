<?php 

include '../../../../PetsQu/config/config.php';
include '../../../../PetsQu/config/connection.php';
if($_POST){
    if($_POST['username'] && $_POST['password']){
        // cek kombinasi username dan password
        $check_login = mysqli_query($conn, "SELECT * FROM akun WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'");
        $var = mysqli_fetch_array($check_login);
        if($check_login->num_rows == 1){
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['id_akun'] = $var['id_akun'];
            $_SESSION['status'] = $var['status'];
            $_SESSION['nama'] = $var['nama'];
            $_SESSION['alamat'] = $var['alamat'];
            $_SESSION['nope'] = $var['nope'];
            echo '<script>alert("Login berhasil!"); window.location.replace("'.$base_url.'");</script>';
        }else{
            echo '<script>alert("Username atau password salah!"); window.location.replace("'.$base_url.'page/user/login.php");</script>';
        }
    }else{
        echo '<script>alert("Nothing To Do Here!"); window.location.replace("'.$base_url.'");</script>';
    }
}else{
    echo '<script>alert("Nothing To Do Here!"); window.location.replace("'.$base_url.'");</script>';
}

?>