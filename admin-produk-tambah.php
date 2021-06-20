<?php
    session_start();
    include 'database.php';
    $sql = "SELECT * FROM tb_kategori";
    $result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="admin-produk-tambah-proses.php" enctype="multipart/form-data" method="post" style="display: flex; flex-direction: column; max-width: 700px; margin: 50px auto;">
        <h2 style="text-align: center; margin-bottom: 10px;">Tambah Produk</h2>
        <?php
            if(@$_GET['gagal'] == 'ya'){
                echo '<h4 style="text-align: center; color: red;">Gagal menambah Produk</h4>';
            }
        ?>
        <p style="margin-left: 5px;">Kategori Produk : </p> 
        <select class="teks" name="produk_id_kat">
            <?php 
                    while($row = $result->fetch_assoc()) {?>
                        <option value="<?php echo $row['kat_id'] ?>"><?php echo $row['kat_nama'] ?></option>
                    <?php } ?>
        </select>
        <input class="teks" type="hidden" name="produk_id_user" value="<?php echo $_SESSION["user_id"] ?>" required/>
        <input class="teks" type="text" name="produk_kode" placeholder="Kode Produk" required/>
        <input class="teks" type="text" name="produk_nama" placeholder="Nama Produk" required/>
        <input class="teks" type="text" name="produk_hg" placeholder="Harga Produk" required/>
        <p style="margin-left: 5px;">Deskripsi Produk : </p>
        <textarea class="teks" name="produk_keterangan"required></textarea>
        <input class="teks" type="number" name="produk_stock" placeholder="Stock Produk" required/>
        <p style="margin-left: 5px;">Foto Produk : </p>
        <input class="teks" type="file" name="produk_photo" placeholder="Foto Produk" required/>
        <input class="tombol" type="submit" value="Tambah Produk" />
    </form>
</body>
</html>