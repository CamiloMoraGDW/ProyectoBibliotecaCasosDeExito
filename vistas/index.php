<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <img src="../img/LogoAzulSinFondo.png" alt="Logo Godoworks Azul">
                <h1>Registrarse</h1>
                <span>crea una cuenta para entrar en nuestro gestor</span>
                <input type="text" placeholder="Nomre">
                <input type="text" placeholder="Apellido">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Contraseña">
                <button>Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <img src="../img/LogoAzulSinFondo.png" alt="Logo Godoworks Azul">
                <h1>Iniciar Sesión</h1>
                <span>Ingresa tus datos para entrar</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Contraseña">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button>Ingresar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¿Ya tienes una cuenta?</h1>
                    <p>Utiliza tu mail para iniciar sesión.</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>¿No tienes una cuenta?</h1>
                    <p>Usa tus datos personal y crea una cuenta.</p>
                    <button class="hidden" id="register">Registrate</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/index.js"></script>
</body>

</html>