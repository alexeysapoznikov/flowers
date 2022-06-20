<?php

require_once './connection.php';

$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];




    mysqli_query($connection, "INSERT INTO `users` (`id`, `nickname`, `password`, `email`, `primary`) VALUES (NULL, '$login', '$email', '$password', 0)");
    

?>