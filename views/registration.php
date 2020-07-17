<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Регистрация на стихбатл</title>
    </head>

    <body>
        <h2 align="center">Регистрация<br>на стихбатл</h2>
        <div align="center"><a href="<?=BASE_URL?>">Вернуться</a></div>
        <div align="center">
        <form method="post" action="">
            Логин:<br><input id="login" type="text" name="login"><br>
            Пароль:<br><input id="pass" type="password" name="password"><br>
            Подтверждение:<br><input id="re_pass" type="password" name="password2"><br>
            <label><input id="no_xyz" type="checkbox" name="lic" value="ok">Принимаю правила игры <br></label><br>
            <input type="submit" name="GO" value="Регистрация">
        </form>
        </div>
        <div><?=$msg->popValue()?></div>
    </body>

</html>




