<?php
    include "koneksi.php";

    //menerima data dari method POS
    $id = $_POST['Id_Pelanggan'];
    $nama = $_POST['Nama_Pelanggan'];
    $no = $_POST['No_Hp_Pelanggan'];
    $jk = $_POST['Jenis_Kelamin'];
    $al = $_POST['Alamat_Pelanggan'];

    //proses menambah dalam database
    $data = $koneksi->query("UPDATE Pelanggan SET Nama_Pelanggan='$nama', No_Hp_Pelanggan='$no', Jenis_Kelamin='$jk', Alamat_Pelanggan='$al' WHERE Id_Pelanggan=$id");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Pelanggan_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>