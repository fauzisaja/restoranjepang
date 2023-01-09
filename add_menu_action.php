<?php
    include "koneksi.php";

    //menerima data dari method POS
    $nama = $_POST['Nama_Menu'];
    $hrg = $_POST['Harga_Menu'];
    $desk = $_POST['Deskripsi'];

    //Menambahkan foto by Mulya
    $foto = $_FILES['Foto_Menu']['name'];

    $dir = "img/";
    $tmpFile = $_FILES['Foto_Menu']['tmp_name'];

    move_uploaded_file($tmpFile, $dir.$foto);

    

    //proses menambah dalam database
    $data = $koneksi->query("INSERT INTO menu(Nama_Menu, Harga_Menu, Deskripsi, Foto_Menu) VALUES(
        '$nama', '$hrg', '$desk', '$foto')");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Menu_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>