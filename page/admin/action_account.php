<?php include "../../../PetsQu/config/config.php"; include "../../../PetsQu/config/connection.php";
session_start();
if($_GET['del_id'] && $_SESSION['status'] == 'admin'){
    $query = "DELETE from akun where id_akun = '".$_GET['del_id']."'";
    $mysqli_query = mysqli_query($conn, $query);
    if($mysqli_query){
        $message = 'Data berhasil dihapus';
    }else{
        $message = 'Data gagal dihapus';
    }   
    echo '<script>alert("'.$message.'");  window.location.replace("'.$base_url.'page/admin/account.php");</script>';
}