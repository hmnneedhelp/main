<!DOCTYPE html>
<html lang="en">

<head>
        <script src="../modal.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="/src/style/output.css">
        <link rel="stylesheet" href="/src/style/style.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Регистрация</title>
        <style>
                body {
                        background-image: url(./../src/img/pattern.png);
                        font-family: "Montserrat", sans-serif;
                        font-optical-sizing: auto;
                        font-style: normal;
                }

                #scroll::-webkit-scrollbar {
                        display: none;
                }

                #scroll {
                        scrollbar-width: none;
                }
        </style>
</head>

<body>
        <div class="popup">
                <div class="form" >
                        <form action="../../auth/reg.php" method="post" class="flex flex-col" >
                                <p>Зарегистрироваться</p>
                        <label for="email">Логин</label>
                                <input type="text" id="login" name="login" placeholder="Введите логин">
                                <label for="email">Email</label>
                                <input type="text" id="Email" name="email" placeholder="Введите эл. почту">

                                <label for="password">Пароль</label>
                                <input type="password" id="password" name="pass" placeholder="Введите пароль">
                        <div class="form-element mt-5 border">
                                <button>Зарегистрироваться</button>
                        </div>
        </form>
                <form method="post" action="../../auth/auth.php" class="flex flex-col mt-5">
                        <p>Или войти</p>
                <label for="email">Логин</label>
                                <input type="text" id="login" name="login" placeholder="Введите логин">

                                <label for="password">Пароль</label>
                                <input type="password" id="password" name="pass" placeholder="Введите пароль">
                        <div class="form-element mt-5 border">
                                <button>Войти</button>
                        </div>
        </form>
                </div>
        </div>
</body>

</html>