<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="description" content="Login - Cineplanet">
        <meta name="author" content="Alvaro Fernandez">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/cineplanet/assets/css/main.css">
        <style>
            body {
                background-color: #003162;
            }
        </style>
    </head>
    <body>
        <div class="planeta">
            <img src="/cineplanet/assets/img/planeta.png" alt="planetas" class="planetita">
        </div>
        <div id="container-login" style="margin-top: 20px;">
            <div id="title">
                <i class="material-icons lock">lock</i> Acceso
            </div>
            <form action="utils/ingresar.php" method="post">
                <div class="input">
                    <div class="input-addon">
                        <i class="material-icons">face</i>
                    </div>
                    <input id="username" name="username" placeholder="Usuario" type="text" required class="validate" autocomplete="off">
                </div>
                <div class="input">
                    <div class="input-addon">
                        <i class="material-icons">vpn_key</i>
                    </div>
                    <input id="password" name="password" placeholder="Contraseña" type="password" required class="validate" autocomplete="off">
                </div>
                <input type="submit" style="margin-top: 30px;" value="Iniciar sesion" />
            </form>
        </div>
    </body>
</html>
