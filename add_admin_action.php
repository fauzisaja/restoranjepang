<?php
    include "koneksi.php";

    //menerima data dari method POS
    $nama = $_POST['Nama_Admin'];
    $psw = $_POST['Password'];

    //proses menambah dalam database
    $data = $koneksi->query("INSERT INTO admin(Nama_Admin, Password) VALUES(
        '$nama', '$psw')");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Admin_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>