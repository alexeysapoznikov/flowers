<?php

require_once './connection.php';

$id = $_POST["id"];

$deletePost = mysqli_query($connection, "DELETE FROM `flowers` WHERE `id` = '$id'");

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();

?>