<?php
    include "koneksi.php";

    //menerima data dari method POS
    $nama = $_POST['Nama_Pelanggan'];
    $no = $_POST['No_Hp_Pelanggan'];
    $jk = $_POST['Jenis_Kelamin'];
    $al = $_POST['Alamat_Pelanggan'];

    //proses menambah dalam database
    $data = $koneksi->query("INSERT INTO pelanggan(Nama_Pelanggan, No_Hp_Pelanggan, Jenis_Kelamin, Alamat_Pelanggan) VALUES(
        '$nama', '$no', '$jk', '$al')");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Pelanggan_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>