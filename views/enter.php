<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Авторизация на стихбатл</title>
    </head>

    <body>
        <h2 align="center">Авторизация<br>на стихбатл</h2>
        <div align="center"><a href="<?=BASE_URL?>">Вернуться</a></div>
        <div align="center">
        <form method="post" action="">
            Логин:<br><input id="login" type="text" name="login" /><br />
            Пароль:<br><input id="pass" type="password" name="password" /><br />
            <input type="submit" name="GO" value="Вход">
        </form>
        </div>
<!--        <div><?=$msg->popValue()?></div> -->
    </body>

</html>
