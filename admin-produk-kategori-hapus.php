<?php
    include 'database.php';
    $kat_id = $_GET['kat_id'];
    $sql = "DELETE FROM tb_kategori WHERE kat_id=" . $kat_id;

    if ($mysqli->query($sql) === TRUE) {
        header('Location: admin-produk-kategori.php');
    } else {
        header('Location: admin-produk-kategori.php');
    }
?>