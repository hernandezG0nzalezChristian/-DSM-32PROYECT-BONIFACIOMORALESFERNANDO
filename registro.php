<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="registro.css"/>
</head>
<body>

    <div class="container-form sing-up">
        <div class="welcom-back">
            <div class="message">
                <h2>Bienvenido a Mobi</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sing-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form method="post" class="formulario" action="login.php">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <img src="img/Facebook-icono.ico" width="40px" alt=""/>
                </div>
                <div class="border-icon">
                    <img src="img/Instagram-icono.ico" width="30px" alt=""/>
                </div>
                <div class="border-icon">
                    <img src="img/Twiter-icono.ico" width="28px" alt=""/>
                </div>
            </div>
            <p class="cuenta gratis">Crear una cuenta gratis</p>
            <input type="text" placeholder="Nombre" name="nombre" required/>
            <input type="email" placeholder="Email" name="email" required/>
            <input type="password" placeholder="Contraseña" name="clave" required />
            <input type="submit" value="Registrarse" name="register"/>
        </form>
    </div>
    <div class="container-form sing-in">
        <form method="post" class="formulario" action="db.php">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
                    <img src="img/Facebook-icono.ico" width="40px" alt=""/>
                </div>
                <div class="border-icon">
                    <img src="img/Instagram-icono.ico" width="30px" alt=""/>
                </div>
                <div class="border-icon">
                    <img src="img/Twiter-icono.ico" width="20px" alt=""/>
                </div>
            </div>
            <p class="cuenta gratis">¿Aun no tienes cuenta?</p>
            <input type="email" placeholder="Email" name="email" required/>
            <input type="password" placeholder="Contraseña" name="clave" required/>
            <input type="submit" value="Iniciar Sesion" name="register"/>
        </form>
        <div class="welcom-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrate aqui</p>
                <button class="sing-in-btn">Registrarse</button>
            </div>
        </div>
       
    </div>
    <script src="script.js"></script>
    

</body>
</html>