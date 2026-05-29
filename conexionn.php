<?php
function Conexion(){
$conexion = mysqli_connect ("localhost","root","","base");
if (!$conexion)
echo "no se pudo conectar";
$NombreCompleto = $_POST('Nomb_Compl');
$CorreoElectronico=$_POST('Correo');
$Contraseña=$_POST('Contraseña');
$consulta = "INSERT into base (Nomb_Compl,Correo,Contraseña)
VALUES ($NombreCompleto,$CorreoElectronico,$Contraseña)";
mysql_query($conexion,$consulta);
mysql_close ($conexion);
}
echo "Se ha registrado"
?>
