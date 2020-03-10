<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Регистрация</title>
    </head>

    <body>
        <h2>Регистрация</h2>
        <div><a href="<?=BASE_URL?>">Вернуться</a></div>

        <form method="post" action="">
            Логин: <input id="login" type="text" name="login" /><br />
            Пароль: <input id="pass" type="password" name="password" /><br />
            Подтверждение: <input id="re_pass" type="password" name="password2" /><br />
            <label><input id="no_xyz" type="checkbox" name="lic" value="ok" />Принимаю правила игры <br /></label><br />
            <input type="submit" name="GO" value="Регистрация">
        </form>
        <div><?=$msg->popValue()?></div>
    </body>

</html>




