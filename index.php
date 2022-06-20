<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce403ea4cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="global.css">
    <title>Магазин Бытовой техники</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="header-logo">
                <h1>СоветКино</h1>
            </div>
            <div class="header-navigation">
                <a href="./index.php">Главная</a>
                <a href="#catalog">Жанры</a>
                <a href="#sales">Популярное</a>
                <a href="#help">Помощь</a>
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
        <div class="main" id="catalog">
            <h2>Жанры</h2>
            <div class="categories">
                <a class="category" href="./catalog.php?searchWord=исторический">
                    <div class="category-image" style="background-image: url(./content/img/flower1.jpg);">

                    </div>
                    <h2>Исторические</h2>
                </a>
                <a class="category" href="./catalog.php?searchWord=драма">
                    <div class="category-image" style="background-image: url(./content/img/flower2.png);">

                    </div>
                    <h2>Драмы</h2>
                </a>
                <a class="category" href="./catalog.php?searchWord=комедия">
                    <div class="category-image" style="background-image: url(./content/img/flower3.png);">

                    </div>
                    <h2>Комедии</h2>
                </a>
                <a class="category" href="./catalog.php?searchWord=мульфильм">
                    <div class="category-image" style="background-image: url(./content/img/flower4.png);">

                </div>
                    <h2>Мультфильмы</h2>
                </a>
                <a class="category" href="./catalog.php?searchWord=другие">
                    <div class="category-image" style="background-image: url(./content/img/flower6.png);">

                    </div>
                    <h2>Другие</h2>
                </a>
            </div>
            <div class="flowers" id="sales">
                <h2>Популярное</h2>
                <div class="flowers-list">
                <div class="flowers-list-item">
                    <img src="./content/img/photo1.jpg" alt="">
                </div>
                <div class="flowers-list-item">
                    <img src="./content/img/photo2.jpg" alt="">
                </div>
                <div class="flowers-list-item">
                    <img src="./content/img/photo3.jpg" alt="">
                </div>
                <div class="flowers-list-item">
                    <img src="./content/img/photo4.jpg" alt="">
                </div>
                <div class="flowers-list-item">
                    <img src="./content/img/photo5.jpg" alt="">
                </div>
                <div class="flowers-list-item">
                    <img src="./content/img/photo6.jpg" alt="">
                </div>
                </div>
            </div>
            <div class="help" id="help">
                    <h2>Возникли вопросы?</h2>
                    <form action="" method="post" class="help-form">
                        <input type="text" name="name" placeholder="Ваше имя">
                        <input type="text" name="phone" placeholder="Номер телефона">
                        <textarea name="question" id="" cols="30" rows="10" placeholder="Ваш вопрос"></textarea>
                        <button type="submit">Отправить</button>
                    </form>
        </div>
        </div>
    </main>
    <footer>
        <div class="footer">
            <h2>СССР</h2>
            <h2>г.1991</h2>
        </div>
    </footer>
</body>
</html>