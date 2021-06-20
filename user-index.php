<?php
    include 'database.php';
    session_start();
    if(!$_SESSION["user_id"]){
        header('Location: login.php');
    }
    $sql = "SELECT * FROM tb_produk";
    $result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div style="text-align: center; padding: 20px 0px;">
        <h1 style="margin-bottom: 10px;">Daftar Produk</h1>
        <p style="margin-bottom: 30px;">Login menggunakan e-mail : <strong><?php echo $_SESSION["user_email"] ?></strong></p>
        <hr/>
            <p style="text-align: center; font-weight: bold;">Menu Pengguna</p>
            <div style="display: flex; justify-content: center;">
                <a href="user-index.php" class="tombol">Belanja</a>
                <a href="user-belanja.php" class="tombol">Daftar Belanja</a>
                <a href="user-keranjang.php" class="tombol">Keranjang</a>
                <a href="index.php" class="tombol_hijau">Menu Utama</a>
                <a href="logout.php" class="tombol" onclick="return confirm('Anda yakin ingin Logout?')">Logout</a>
            </div>
        <hr/>
    </div>

    <?php 
        if ($result->num_rows > 0) {
            echo "<table border='1px'><thead><th>Kategori</th><th>Kode</th><th>Nama</th><th>Harga</th><th>Keterangan</th><th>Stock</th><th>Photo</th><th>Aksi</th></thead>";
                while($row = $result->fetch_assoc()) {?>
                    <tr>
                        <td><?php echo $row['produk_id_kat'] ?></td>
                        <td><?php echo $row['produk_kode'] ?></td>
                        <td><?php echo $row['produk_nama'] ?></td>
                        <td>Rp. <?php echo $row['produk_hg'] ?></td>
                        <td><?php echo $row['produk_keterangan'] ?></td>
                        <td><?php echo $row['produk_stock'] ?></td>
                        <td><img src="<?php echo $row['produk_photo'] ?>" style="height: 120px;"/></td>
                        <td><a href="admin-produk-hapus.php?produk_id=<?php echo $row['produk_id'] ?>" class="tombol" onclick="return confirm('Anda ingin menghapus Produk ini?')">Masukkan ke Keranjang</a></td>
                    </tr>
                <?php } 
        } else {
            echo "<div style='margin-top: 40px;'>Tidak ada Produk ditemukan</div>";
        }
    ?>
</body>
</html>