<?php
    include "koneksi.php";

    //menerima data dari method GET
    $id = $_GET['Id_Pelanggan'];

    //proses menghapus dalam database
    $data = $koneksi->query("DELETE FROM pelanggan WHERE Id_Pelanggan=$id");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Pelanggan_list.php');
    } else {
        echo "Hapus data gagal";
    }
?>