<?php
    include "koneksi.php";

    //menerima data dari method GET
    $id = $_GET['Id_Admin'];

    //proses menghapus dalam database
    $data = $koneksi->query("DELETE FROM Admin WHERE Id_Admin=$id");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Admin_list.php');
    } else {
        echo "Hapus data gagal";
    }
?>