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
    <title>Login - Tugas PBWL Taufiq</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="login-proses.php" method="post" style="display: flex; flex-direction: column; max-width: 700px; margin: 100px auto;">
        <h1 style="text-align: center; margin-bottom: 10px;">LOGIN</h1>
        <h2 style="text-align: center">Tugas PBWL Oleh : Taufiqurrahman Nasution</h2>
        <?php
            if(@$_GET['gagal'] == 'ya'){
                echo '<h4 style="text-align: center; color: red;">E-mail atau Kata Sandi salah</h4>';
            }
            if(@$_GET['daftar'] == 'ya'){
                echo '<h4 style="text-align: center; color: blue;">Berhasil mendaftar, silahkan login</h4>';
            }
        ?>
        <input class="teks" type="email" name="email" placeholder="E-mail" required/>
        <input class="teks" type="password" name="password" placeholder="Kata Sandi" required/>
        <input class="tombol" type="submit" value="Login" />
        <a class="tombol_hijau" href="daftar.php">Daftar</a>
        <div>
            <p>Untuk admin login :</p>
            <ul>
                <li>E-mail : taufiqnasution73@gmail.com</li>
                <li>Password : pbwl</li>
            </ul>

            <p>Untuk pengguna biasa :</p>
            <ul>
                <li>E-mail : user@gmail.com</li>
                <li>Password : user</li>
            </ul>
        </div>
    </form>
</body>
</html>