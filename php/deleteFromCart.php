<?php
session_start();
require_once './connection.php';


$userid = $_SESSION['user']['name'];
$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM `cart` WHERE `id` = '$id'");

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();

?>