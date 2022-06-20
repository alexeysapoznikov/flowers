<?php
session_start();
require_once('./php/connection.php');
$searchWord = $_POST['searchWord'];

// var_dump($searchProducts);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce403ea4cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="searchresult.css">
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
                <a href="#catalog">Каталог</a>
                <a href="#sales">Галерея</a>
            </div>
            <!-- <form action="./searchresult.php" method="post">
                <input type="text" placeholder="Поиск" name="searchWord">
                <button type="submit">Найти</button>
            </form> -->
            <div class="header-personal">
                <a href="./cart-page.php">Корзина</i></a>
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
            <h2>Поиск</h2>
            <div class="results">
                    <?php

                    $searchProducts = mysqli_query($connection, "SELECT * FROM `products` WHERE `type` LIKE '%$searchWord%' OR `name` LIKE '%$searchWord%';");
                    $searchProducts = mysqli_fetch_all($searchProducts);

                    if ($searchProducts == null) {
                         ?>
                            <h2 style="font-size: 27px; opacity: 0.9; font-weight: 400">Ничего не найдено</h2>
                         <?php
                    } else {
                        foreach ($searchProducts as $prod)
                        {
                        ?>
                            <div class="result-list list-item">
                            <div class="list-item-info">
                                <h2><?= $prod[2] ?></h2>
                                <p><?= $prod[5] ?></p>
                                <div class="price">
                                    <p><?= $prod[3] ?><span> руб</span></p>
                                    <a href="./cart.php?id=<?= $prod[0] ?>&name=<?= $prod[2] ?>">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="list-item-img">
                                <img src="./content/img/<?= $prod[4] ?>" alt="">
                            </div>
                            </div>

                        <?php
                    };
                    };
                    ?>
            </div>
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