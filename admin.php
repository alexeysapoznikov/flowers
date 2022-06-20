<?php
error_reporting(0);
session_start();
$cart = $_SESSION['cart'];
require_once './php/connection.php';
$total = 0;

if ($_SESSION['user']['primary'] < 1) {
    Header('Location: ./lk.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce403ea4cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="global.css">
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
            <h2>Админ панель</h2>
            <div class="admin-panel">
            <form action="./php/addPost.php" method="post" class="add-post">
                <h2>Добавить запись</h2>
                <input type="text" placeholder="Название" name="name">
                        <select name="type">
                            <option value="готовый букет">готовый букет</option>
                            <option value="роза">роза</option>
                            <option value="гипсофила">гипсофила</option>
                            <option value="тюльпан">тюльпан</option>
                            <option value="другие" selected>другие</option>
                        </select>
                        <input type="number" placeholder="Цена" name="price">
                        <input type="text" placeholder="Фотография (photo.jpg)" name="photo">
                        <button type="submit">Добавить</button>
                    </form>
                    <form action="./php/deletePost.php" method="post" class="add-post">
                        <h2>Удалить запись</h2>
                        <input type="text" placeholder="ID" name="id">
                        <button type="submit">Удалить</button>
                    </form>
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