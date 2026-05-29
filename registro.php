<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet"
    href="https://kit.fontawesome.com/84ce206fc3.js"></script>
    <link rel="stylesheet" href="inicio2.css">

<body>
    </form>
    <form method="POST" class="formulario">
  <section class="contenedor">
    <h4>Registro</h4>
    <div class="contenedor">
      <div> <input class="input-contnedor" type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre Completo"> </div>
    <div> <input class="input-contnedor" type="email" name="correo" id="correo" placeholder="Ingrese su Gmail"> </div>
    <div> <input class="input-contnedor" type="password" name="clave" id="clave" placeholder="Ingrese una Contraseña"> </div>
    <div> <input class="input-contnedor" type="submit" name="register"> </div>
    <p>Al hacer este registro, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
        <p>¿Ya tienes una cuenta? <a class="link" href="login.php">Iniciar Sesión</a></p>
  </section>
</form>
<?php
include("registrar.php");
 ?>
 <article> <img src="img1.PNG" alt=""></article>
</body>
</html>