<!DOCTYPE html>
<html>
<head>

    <title>Авторизация на сайте</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="<?=BASE_URL?>css/main.css" rel="stylesheet" type="text/css">

<style>

    .container {
      display: flex;
    }
    .item {
        width: 49%;
        padding: 1rem;
    }

    @media screen and (max-width: 500px) {
        .container {
            display: flex;
            flex-wrap: wrap;
        }
        .item {
            width: 99%;
        }
    }    

</style>    


</head>
<body>

<div align="center"><h2>Авторизация</h2>

    <div class="container">
        <div class="item" style="border: 0px solid black">
            <div align="center"><a href="<?=BASE_URL?>registration"><b>Регистрация</b></a></div>
        </div>

        <div class="item" style="border: 0px solid black">
                <div align="center"><a href="<?=BASE_URL?>enter"><b>Вход</b></a></div>
        </div>
    </div>

</div>

</body>
</html>