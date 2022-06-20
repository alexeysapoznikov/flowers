<?php
session_start();
require_once './connection.php';

$userid = $_SESSION['user']['id'];
mysqli_query($connection, "DELETE FROM `cart` WHERE `user-id` = '$userid'");

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>