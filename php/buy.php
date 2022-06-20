<?php
    session_start();
    require_once './connection.php';
    
    $userid = $_SESSION['user']['id'];


    $buy = mysqli_query($connection, "SELECT * FROM `cart` WHERE `user-id` = '$userid'");
    $buy = mysqli_fetch_all($buy);

//    for ($i=0; $i < count($buy); $i++) { 
//        $buyed[0+1];

//        mysqli_query($connection, "INSERT INTO `buyed` (`id`, `user-id`, `prod-id`, `type`, `name`, `photo-url`, `price`) VALUES (NULL, '$buy[1]', '$buy[2]', '$buy[3]', '$buy[4]', '$buy[5]', '$buy[6]');");
//    };

    foreach ($buy as $prod) {
        mysqli_query($connection, "INSERT INTO `buyed` (`id`, `user-id`, `prod-id`, `type`, `name`, `photo-url`, `price`) VALUES (NULL, '$prod[1]', '$prod[2]', '$prod[3]', '$prod[4]', '$prod[5]', '$prod[6]');");
    };

    $deleteFromCart = mysqli_query($connection, "DELETE FROM `cart` WHERE `user-id` = '$userid'");

    header('Location: ../lk.php');

?>