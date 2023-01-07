<?php
    include "koneksi.php";

    // mererima data dari method GET
    $id_transaksi = $_GET['id_transaksi'];
    $id_menu = $_GET['id_menu'];

    // proses menghapus dalam database
    $data = $koneksi->query("DELETE FROM detail_transaksi
    WHERE id_transaksi=$id_transaksi AND id_menu=$id_menu");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:detail_transaksi_form.php?id_transaksi='.$id_transaksi);
    } else {
        header('location:transaksi_list.php');
    }
?>