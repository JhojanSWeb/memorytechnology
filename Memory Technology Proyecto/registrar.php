<?php
include("conexion.php");

if ($conexion) {
echo "Conexion establecida";
}
else {
echo "Error: No se pudo conectar";
}

  if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['clave']) ) {
		$nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $clave = trim($_POST['clave']);
		$consulta="INSERT INTO datos(nombre, correo, clave ) VALUES ('$nombre','$correo', '$clave')";
		$resultado=mysqli_query($conexion,$consulta);
   
   if($resultado){
    ?>
    <h3 class="ok">Muy bien, empresa registra</h3>
    <?PHP

    }else {
      ?>
      <h3 class="mal">Ha ocurrido un error</h3>
      <?PHP

      }
    }else{

        ?>
        <h3 class="mal">Por favor complete los campos</h3>
        <?PHP
    }
    
    }
  ?>
