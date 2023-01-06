<?php
    include "koneksi.php";

    //menerima data dari method POS
    $id = $_POST['Id_Menu'];
    $nama = $_POST['Nama_Menu'];
    $desk = $_POST['Deskripsi'];
    $hrg = $_POST['Harga_Menu'];

    //proses menambah dalam database
    $data = $koneksi->query("UPDATE Menu SET Nama_Menu='$nama', Deskripsi='$desk', Harga_Menu='$hrg' WHERE Id_Menu=$id");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Menu_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>