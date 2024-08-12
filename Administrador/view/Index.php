
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../controller/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <div>
            <img src="..\imagens\Logo Preta.png" alt="" width="200" height="200">
        </div>
        <h2>LOGIN - Administrador</h2>
        <form class="login-form" method="POST" action="../controller/controllerUsuario.php">
            <div class="form-group">
                <img src="..\imagens\users.png" alt="" width="10" height="10">
                <input type="text" id="login" name="login" placeholder="Login" required>
            </div>
            <div class="form-group">
                <img src="..\imagens\cadeado.png" alt="" width="10" height="10">
                <input type="password" id="senha" name="senha" placeholder="Senha" required>
            </div>
            <input type="hidden" name="token" value="#bb412abc">

            <button class="login-button" type="submit" value="Entrar">Entrar</button>
        </form>
    </div>
</body>
</html>