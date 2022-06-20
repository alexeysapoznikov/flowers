<?php

require_once './connection.php';
session_start();
$login = $_POST['login'];
$password = $_POST['password'];

$check = mysqli_query($connection, "SELECT * FROM `users` WHERE `nickname` = '$login' AND `password` = '$password'");
$check_rows = mysqli_num_rows($check);

if ($check_rows == 1) {
    $user = mysqli_fetch_assoc($check);
    $_SESSION["user"]["id"] = $user['id'];
    $_SESSION["user"]["name"] = $user['nickname'];
    $_SESSION["user"]["password"] = $user['password'];
    $_SESSION["user"]["primary"] = $user['primary'];

    header('Location: ../lk.php');

} else if ($check_rows == 0) {
    print_r('Пользователь не найден <a href="../../">На главную</a>');
}

?>