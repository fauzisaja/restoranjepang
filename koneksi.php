<?php

    $koneksi = mysqli_connect('localhost','root','','restoran_jepang');

    // pengecekan koneksi database
    if(mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>