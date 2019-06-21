<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];

$conexion=mysqli_connect("localhost","root","","consultorio");
$consulta="SELECT * FROM registro WHERE registro = '$nombre' and correo='$correo'";
$resultado=mysqli_query($conexion,$consulta);

	header("location:index.html");

	echo "Error en la autentificacion";

?>