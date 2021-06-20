<?php
    include 'database.php';
    session_start();
    if(!$_SESSION["user_id"]){
        header('Location: login.php');
    }
    $sql = "SELECT * FROM tb_kategori";
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
        <h1 style="margin-bottom: 10px;">Daftar Kategori Produk</h1>
        <p style="margin-bottom: 30px;">Login menggunakan e-mail : <strong><?php echo $_SESSION["user_email"] ?></strong></p>
        <hr/>
            <p style="text-align: center; font-weight: bold;">Menu Admin</p>
            <div style="display: flex; justify-content: center;">
                <a href="admin-index.php" class="tombol">Produk</a>
                <a href="admin-produk-kategori.php" class="tombol">Kategori Produk</a>
                <a href="admin-user.php" class="tombol">User</a>
                <a href="index.php" class="tombol_hijau">Menu Utama</a>
                <a href="logout.php" class="tombol" onclick="return confirm('Anda yakin ingin Logout?')">Logout</a>
            </div>
        <hr/>
        <div style="display: flex; justify-content: center;">
            <a href="admin-produk-kategori-tambah.php" class="tombol_hijau">Tambah Kategori Produk</a>
        </div>

        <?php 
            if ($result->num_rows > 0) {
                echo "<table border='1px'><thead><th>Nama Kategori</th><th>Keterangan</th><th>Aksi</th></thead>";
                    while($row = $result->fetch_assoc()) {?>
                        <tr>
                            <td><?php echo $row['kat_nama'] ?></td>
                            <td><?php echo $row['kat_keterangan'] ?></td>
                            <td><a href="admin-produk-kategori-hapus.php?kat_id=<?php echo $row['kat_id'] ?>" class="tombol" onclick="return confirm('Anda ingin menghapus Kategori ini?')">Hapus</a></td>
                        </tr>
                    <?php } 
                echo "</table>";
            } else {
                echo "<div style='margin-top: 40px;'>Tidak ada Kategori ditemukan</div>";
            }
        ?>
    </div>
</body>
</html>