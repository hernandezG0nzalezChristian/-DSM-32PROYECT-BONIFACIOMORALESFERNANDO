<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="estilo.css" />
    <title>Sign in & Sign up Form</title>

  </head>
  <body>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="#" class="sign-in-form">
            <h2 class="title">Iniciar Sesion</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="email" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="clave" />
            </div>
            <input type="button" value="Iniciar Sesion" class="btn solid" onclick="buttonss()" name="register"/>
            <p class="social-text">Siguenos en nuestras redes sociales</p>

            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
            </div>

          </form>

          <form action="#" class="sign-up-form" method="post">
            <h2 class="title">Registro</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre" name="nombre" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="clave" />
            </div>
            <input type="submit" class="btn" value="Registrarse" name="register" />
            <p class="social-text">Siguenos en nuestrar redes sociales</p>

            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
            </div>

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Aun no tienes cuenta ?</h3>
            <p>
              " Nuestro destino de viaje nunca es un lugar, sino una nueva forma de ver las cosas "
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrarse
            </button>
          </div>
          <img src="../img/maps.png" class="image" alt="" />
        </div>

        <div class="panel right-panel">
          <div class="content">
            <h3>Ya tienes cuenta ?</h3>
            <p>
              Elije una ruta no una rutina. Mobi es mas que una empresa es tu compañero de viaje 
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Iniciar Sesion
            </button>
          </div>
          <img src="../img/persona 2.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>

    <?php
        include("../login.php")
    ?>

  </body>
</html>