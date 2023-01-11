<?php if ($isAuth): ?>
    Добро пожаловать <?= $username ?> <a href="/auth/logout/">[Выход]</a>
<?php else: ?>
    <form action="/auth/login/" method="post">
        <input type="text" name="login" placeholder="Логин" value="admin">
        <input type="text" name="pass" placeholder="Пароль" value="123">
        <input type="submit" name="submit" value="Войти">
    </form>
<?php endif; ?><br>
<a href="/">Главная</a>
<a href="/product/catalog">Каталог</a>
<?php if ($isAdmin): ?>
    <a href="/orders">Заказы</a>
<?php endif; ?>
<a href="/basket">Корзина(<span id="count"><?=$count?></span>)</a><br>



<!--<a href="/">Главная</a>-->
<!--<a href="/?c=product&a=catalog">Каталог</a>-->
<!--<a href="/?c=basket&a=basket">Корзина</a><br>-->