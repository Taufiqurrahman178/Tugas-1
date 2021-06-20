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
        <h1 style="margin-bottom: 10px;">Menu Utama</h1>
        <p style="margin-bottom: 30px;">Login menggunakan e-mail : <strong><?php echo $_SESSION["user_email"] ?></strong></p>
        <hr/>
            <?php if($_SESSION["user_role"] == '1' || $_SESSION["user_role"] == 1){
                echo "Anda Login sebagai <strong>Admin</strong>.";
            }else{
                echo "Anda Login sebagai <strong>Pengguna</strong>.";
            } ?>
        <hr/>
            <div style="display: flex; justify-content: center;">
                <a href="user-index.php" class="tombol">Menu Pengguna</a>
                <?php if($_SESSION["user_role"] == '1' || $_SESSION["user_role"] == 1){ ?>
                    <a href="admin-index.php" class="tombol_hijau">Menu Admin</a>
                <?php } ?>
                <a href="logout.php" class="tombol" onclick="return confirm('Anda yakin ingin Logout?')">Logout</a>
            </div>
        <hr/>
    </div>
</body>
</html>