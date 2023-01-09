<?php
    include "koneksi.php";

    //menerima data dari method POS
    $id = $_POST['Id_Menu'];
    $nama = $_POST['Nama_Menu'];
    $desk = $_POST['Deskripsi'];
    $hrg = $_POST['Harga_Menu'];

    //Menambahkan foto by Mulya
    $foto = $_FILES['Foto_Menu']['name'];

    $dir = "img/";
    $tmpFile = $_FILES['Foto_Menu']['tmp_name'];

    move_uploaded_file($tmpFile, $dir.$foto);

    //proses menambah dalam database
    $data = $koneksi->query("UPDATE Menu SET Nama_Menu='$nama', Deskripsi='$desk', Harga_Menu='$hrg', Foto_Menu='$foto' WHERE Id_Menu=$id");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:Menu_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>