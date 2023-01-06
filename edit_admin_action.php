<?php
    include "koneksi.php";

    //menerima data dari method POS
    $id = $_POST['Id_Admin'];
    $nama = $_POST['Nama_Admin'];
    $psw = $_POST['Password'];

    //proses menambah dalam database
    $data = $koneksi->query("UPDATE admin SET Nama_Admin='$nama', Password='$psw' WHERE Id_Admin=$id");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Admin_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>