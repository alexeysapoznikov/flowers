<?php
session_start();
require_once './php/connection.php';

$userid = $_SESSION['user']['id'];
$id = $_GET['id'];
$type = $_GET['type'];
$name = $_GET['name'];
$photourl = $_GET['photourl'];
$price = $_GET['price'];
mysqli_query($connection, "INSERT INTO `cart` (`id`, `user-id`, `prod-id`, `type`, `name`, `photo-url`, `price`) VALUES (NULL, '$userid', '$id', '$type', '$name', '$photourl', '$price')");

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>