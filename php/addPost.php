<?php

require_once './connection.php';

$type = $_POST['type'];
$name = $_POST['name'];
$price = $_POST['price'];
$photo = $_POST['photo'];

$addPost = mysqli_query($connection, "INSERT INTO `flowers` (`id`, `type`, `name`, `photo-url`, `price`) VALUES (NULL, '$type', '$name', '$photo', '$price')");

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();

?>