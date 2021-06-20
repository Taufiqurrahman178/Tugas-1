<?php
    include 'database.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_nama = $_POST['user_nama'];
    $user_alamat = $_POST['user_alamat'];
    $user_hp = $_POST['user_hp'];
    $user_pos = $_POST['user_pos'];

    $sql = "SELECT * FROM tb_users WHERE user_email='" . $email . "'";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        header('Location: daftar.php?gagal=ya');
    } else {
        $sql = "INSERT INTO tb_users (user_email, user_password, user_nama, user_alamat, user_hp, user_pos,user_role,user_aktif)
        VALUES ('$email', '$password', '$user_nama', '$user_alamat', '$user_hp', '$user_pos', 2, 1)";

        if ($mysqli->query($sql) === TRUE) {
            header('Location: login.php?daftar=ya');
        } else {
            header('Location: daftar.php?gagal=ya');
        }
    }
?>