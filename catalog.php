<?php
session_start();
require_once('./php/connection.php');
$searchWord = $_GET['searchWord'];

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
            <h2>Каталог</h2>
            <div class="results">
                    <?php

                    $searchProducts = mysqli_query($connection, "SELECT * FROM `flowers` WHERE `type` LIKE '%$searchWord%' OR `name` LIKE '%$searchWord%';");
                    $searchProducts = mysqli_fetch_all($searchProducts);

                    if ($searchProducts == null) {
                         
                    } else {
                        foreach ($searchProducts as $prod)
                        {
                        ?>
                            <div class="result-list list-item">
                                <h3 class="result-list-h2"><?= $prod[2]?></h3>
                                <div class="img" style="background-image: url(./content/img/<?= $prod[3]?>)">

                                </div>
                                <p><span><?= $prod[4]?></span> руб\шт</p>
                                
                                <?php
                                    if (!isset($_SESSION['user'])) {
                                        ?>
                                                <a href="./login.php">добавить в корзину</a>
                                        <?php
                                    } else {
                                        ?>
                                            <a href="./cart.php?id=<?= $prod[0]?>&type=<?= $prod[1]?>&name=<?= $prod[2]?>&photourl=<?= $prod[3]?>&price=<?= $prod[4]?>">добавить в корзину</a>
                                        <?php
                                    }

                                ?>
                                

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