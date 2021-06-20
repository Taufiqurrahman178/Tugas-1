<?php
    include 'database.php';
    $user_id = $_GET['user_id'];
    $sql = "DELETE FROM tb_users WHERE user_id=" . $user_id;

    if ($mysqli->query($sql) === TRUE) {
        header('Location: admin-user.php');
    } else {
        header('Location: admin-user.php');
    }
?>