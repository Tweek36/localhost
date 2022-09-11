<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Добро пожаловать!</title>
    <link rel="stylesheet" href="css/style.css" media="all">
</head>

<body>
    <div class="container">
        <div class="message"></div>
        <form id="form" method="post">
            <label for="login">Логин</label>
            <input type="text" id="login" name="login" placeholder="Быдло">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" placeholder="qwerty">
            <label for="passwordchek">Пароль ещё раз</label>
            <input type="password" id="passwordchek" placeholder="qwerty">
            <label for="passwordchek">Мыло</label>
            <input type="email" id="email" name="email" placeholder="bidlo@bidlo.ork">
            <div class="phonechek">
                <input type="checkbox" id="phonechekbox">
                <span>Крутой?</p>
            </div>
            <div class="phoneinput">
                <label for="tel">Мобила</label>
                <input type="tel" id="tel" name="tel" placeholder="8 800 555 35 35">
            </div>
            <input type="submit" id="send" value="Не работает Enter?">
        </form>
    </div>
    <script src="js/jQuery.js"></script>
    <script src="js/main.js"></script>
</body>

</html>