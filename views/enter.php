<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Регистрация</title>
    </head>

    <body>
        <h2>Вход в стихбатл</h2>
        <div><a href="<?=BASE_URL?>">Вернуться</a></div>

        <form method="post" action="">
            Логин: <input id="login" type="text" name="login" /><br />
            Пароль: <input id="pass" type="password" name="password" /><br />
            <input type="submit" name="GO" value="Вход">
        </form>
        <div><?=$msg->popValue()?></div>
    </body>

</html>
