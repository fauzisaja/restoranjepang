<?php
    include "koneksi.php";

    //menerima data dari method GET
    $id = $_GET['Id_Menu'];

    //proses menghapus dalam database
    $data = $koneksi->query("DELETE FROM Menu WHERE Id_Menu=$id");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Menu_list.php');
    } else {
        echo "Hapus data gagal";
    }
?>