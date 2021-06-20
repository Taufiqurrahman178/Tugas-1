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
    <title>Daftar Belanja</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div style="text-align: center; padding: 20px 0px;">
        <h1 style="margin-bottom: 10px;">Daftar Belanja</h1>
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
        echo "<div style='margin-top: 40px; text-align: center;font-weight: 700; font-size: 1.2rem; line-height: 2rem;'>Tidak ada daftar Belanja <br/>Silahkan berbelanja terlebih dahulu</div>";
    ?>
</body>
</html>