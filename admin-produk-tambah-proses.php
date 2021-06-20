<?php
    include 'database.php';
    $produk_id_kat = $_POST['produk_id_kat'];
    $produk_id_user = $_POST['produk_id_user'];
    $produk_kode = $_POST['produk_kode'];
    $produk_nama = $_POST['produk_nama'];
    $produk_hg = $_POST['produk_hg'];
    $produk_keterangan = $_POST['produk_keterangan'];
    $produk_stock = $_POST['produk_stock'];
    $produk_photo = "uploads/" . $_POST['produk_id_kat'] . "-" . $_POST['produk_kode'] . $_POST['produk_nama'] . basename($_FILES["produk_photo"]["name"]);

    if (!(move_uploaded_file($_FILES["produk_photo"]["tmp_name"], $produk_photo))) {
        var_dump($_FILES);
        echo $produk_foto;
        echo "eror upload file"; die();
        header('Location: admin-produk-tambah.php?gagal=ya');
    }

    $sql = "INSERT INTO tb_produk (produk_id_kat, produk_id_user, produk_kode, produk_nama, produk_hg, produk_keterangan, produk_stock, produk_photo)
    VALUES ('$produk_id_kat', '$produk_id_user', '$produk_kode', '$produk_nama', '$produk_hg', '$produk_keterangan', '$produk_stock', '$produk_photo')";

    if ($mysqli->query($sql) === TRUE) {
        header('Location: admin-index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; die();
        header('Location: admin-produk-tambah.php?gagal=ya');
    }

?>