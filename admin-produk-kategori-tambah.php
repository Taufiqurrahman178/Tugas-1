<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori Produk</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="admin-produk-kategori-tambah-proses.php" method="post" style="display: flex; flex-direction: column; max-width: 700px; margin: 50px auto;">
        <h2 style="text-align: center; margin-bottom: 10px;">Tambah Kategori Produk</h2>
        <?php
            if(@$_GET['gagal'] == 'ya'){
                echo '<h4 style="text-align: center; color: red;">E-mail atau Kata Sandi salah</h4>';
            }
        ?>
        <input class="teks" type="text" name="kat_nama" placeholder="Nama Kategori" />
        <p style="margin-left: 5px;">Keterangan Kategori : </p>
        <textarea class="teks" name="kat_keterangan"></textarea>
        <input class="tombol" type="submit" value="Tambah Produk" />
    </form>
</body>
</html>