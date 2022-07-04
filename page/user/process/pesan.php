<?php 
session_start();
include "../../../../PetsQu/config/config.php";
include "../../../../PetsQu/config/connection.php";
if(!empty($_SESSION) && $_SESSION['status']=='user'){
    if(isset($_GET['del_id'])){
        $query = "DELETE from keranjang where id_keranjang = '".$_GET['del_id']."' and k_id_pembeli = '".$_SESSION['id_akun']."'";
        $mysqli_query = mysqli_query($conn, $query);
        if($mysqli_query){
            $message = 'Berhasil dihapus dari keranjang';
        }else{
            $message = 'Gagal dihapus dari keranjang';
        }
    }else if($_POST){
        $items = '';
        $jumlah = '';
        $total_harga = 0;
        $alamat = $_POST['alamat'];
        $nope = $_POST['nope'];
        $status = 'diproses';
        
        foreach($_POST as $index=>$var){
            $arr_e = explode("_",$index);
            if($arr_e[0] != 'alamat'){
                $items = $items.$arr_e[1].',';
                $jumlah = $jumlah.$var.',';
                $total_harga = $total_harga + ($var * $arr_e[2]);
            }else{
                break;
            }
        }

        $query = "INSERT into pembelian (`id_pelanggan`, `alamat`, `nope`, `list_barang`, `total`, `status`) 
        VALUES ('".$_SESSION['id_akun']."', '".$alamat."', '".$nope."', '".$items."', '".$total_harga."', '".$status."')";
        $mysqli_query = mysqli_query($conn, $query);
        if($mysqli_query){
            
            $query = "SELECT * from pembelian order by id_pembelian DESC";
            $mysqli_query = mysqli_query($conn, $query);
            $var = mysqli_fetch_array($mysqli_query);
            
            $jumlah_exp = explode(",", $jumlah);
            $b = 0;
            foreach(explode(",",$items) as $a){
                if($a != ''){
                    $query = "UPDATE `keranjang` SET `k_id_pembelian` = '".$var['id_pembelian']."', `k_jumlah_beli` = '".$jumlah_exp[$b]."' where `id_keranjang` ='".$a."'";
                    $mysqli_query = mysqli_query($conn, $query);
                    $b++;
                }else{
                    break;
                }
            }

            $message = 'Pembelian berhasil disimpan';
            
        }else{
            $message = 'Pembelian gagal dilakukan';
        }
    }
}else{
    $message = 'Nothing todo';
}
echo '<script>confirm("'.$message.'"); window.location.replace("'.$base_url.'page/user/keranjang.php");</script>';
?>