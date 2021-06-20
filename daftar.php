<?php
    session_start();
    if($_SESSION["user_id"]){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Tugas PBWL Taufiq</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="daftar-proses.php" method="post" style="display: flex; flex-direction: column; max-width: 700px; margin: 100px auto;">
        <h1 style="text-align: center; margin-bottom: 10px;">DAFTAR AKUN</h1>
        <?php
            if(@$_GET['gagal'] == 'ya'){
                echo '<h4 style="text-align: center; color: red;">E-mail telah digunakan, silahkan coba menggunakan email yang lain.</h4>';
            }
        ?>
        <input class="teks" type="email" name="email" placeholder="E-mail" required/>
        <input class="teks" type="password" name="password" placeholder="Kata Sandi" required/>
        <input class="teks" type="text" name="user_nama" placeholder="Nama Lengkap" required/>
        <input class="teks" type="text" name="user_alamat" placeholder="Alamat" required/>
        <input class="teks" type="text" name="user_hp" placeholder="No. HP" required/>
        <input class="teks" type="text" name="user_pos" placeholder="POS" required/>
        <input class="tombol" type="submit" value="Daftar" />
        <a class="tombol_hijau" href="login.php">Login</a>
    </form>
</body>
</html>