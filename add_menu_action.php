<?php
    include "koneksi.php";

    //menerima data dari method POS
    $nama = $_POST['Nama_Menu'];
    $hrg = $_POST['Harga_Menu'];
    $desk = $_POST['Deskripsi'];

    //proses menambah dalam database
    $data = $koneksi->query("INSERT INTO menu(Nama_Menu, Harga_Menu, Deskripsi) VALUES(
        '$nama', '$hrg', '$desk')");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Menu_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>