<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce403ea4cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="auth.css">
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
            <h2 id="catalog">Авторизация</h2>
            <form action="./php/login.php" method="post" class="categories">
                <input type="text" placeholder="Логин" name="login">
                <input type="text" placeholder="Пароль" name="password">
                <button type="submit">Войти</button>
                <p>нет аккаунта? <a href="./reg.php">регистрация</a></p>
            </form>
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