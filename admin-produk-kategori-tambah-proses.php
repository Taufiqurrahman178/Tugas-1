<?php
    include 'database.php';
    $kat_nama = $_POST['kat_nama'];
    $kat_keterangan = $_POST['kat_keterangan'];

    $sql = "INSERT INTO tb_kategori (kat_nama, kat_keterangan)
    VALUES ('$kat_nama', '$kat_keterangan')";

    if ($mysqli->query($sql) === TRUE) {
        header('Location: admin-produk-kategori.php');
    } else {
        header('Location: admin-produk-kategori.php');
    }
?>