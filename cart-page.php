<?php

session_start();
require_once './php/connection.php';    
$userid = $_SESSION['user']['id'];
$cartitem = mysqli_query($connection, "SELECT * FROM `cart` WHERE `user-id` = '$userid'");
$cartitem = mysqli_fetch_all($cartitem);


if (!isset($_SESSION['user'])) {
    header('Location: ./login.php');
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce403ea4cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="cart-page.css">
    <title>Магазин Бытовой техники</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="header-logo">
                <h1>Flowers 58</h1>
            </div>
            <div class="header-navigation">
                <a href="./index.php">Главная</a>
                <a href="./index.php#catalog">Жанры</a>
                <a href="./index.php#sales">Популярное</a>
                <a href="./index.php#help">Помощь</a>
            </div>
            <!-- <form action="./searchresult.php" method="post">
                <input type="text" placeholder="Поиск" name="searchWord">
                <button type="submit">Найти</button>
            </form> -->
            <div class="header-personal">
                <a href="./cart-page.php">Избранное</i></a>
                <?php
                    if (!isset($_SESSION['user'])) {
                        echo '<a href="./login.php">Вход</a>';
                    } else {
                        echo '<a href="./lk.php">Личный кабинет</a>';
                    }
                ?>
            </div>
        </div>
    </header>
    <main>
        <div class="main">
            <h2>Избранное</h2>
            <div class="results">
            <?php
                if (count($cartitem) <= 0) {
                    echo 'Вы ещё не добавили товар в корзину';
                } else {
                    foreach ($cartitem as $prod) {
                        ?>
                        <div class="list-item">
                            <div class="list-item-info">
                                <img src="./content/img/<?=$prod[5] ?>" alt="">
                                <h2><?=$prod[4] ?></h2>
                                <p><?= $prod[6]?> руб.</p>
                                <a href="./php/deleteFromCart.php?id=<?= $prod[0] ?>">Удалить</a>
                            </div>
                        </div>
                        <?php
                    };
                };
            ?>
            </div>
        </div>
        <div class="total">
            <?php
                if (!isset($_SESSION['user'])) {
                    echo '<a href="./login.php">Авторизация</a>';
                } else {
                    echo '<a href="./php/buy.php">Купить</a>';
                }
            ?>
            <a href="./php/clearCart.php">Очистить корзину</a>
            </div>
    </main>
    <footer>
        <div class="footer">
            <h2>Пенза</h2>
            <h2>г.2022</h2>
        </div>
    </footer>
</body>
</html>