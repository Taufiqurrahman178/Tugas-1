<?php
    include 'database.php';
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_users WHERE user_email='" . $email . "' AND user_password='" . $password . "' AND user_aktif=1";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $row['user_id'];
        $_SESSION["user_email"] = $email;
        $_SESSION["user_nama"] = $row['user_nama'];
        $_SESSION["user_role"] = $row['user_role'];
        header('Location: index.php');
    } else {
        header('Location: login.php?gagal=ya');
    }
?>