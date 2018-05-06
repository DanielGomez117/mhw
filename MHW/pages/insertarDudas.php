<?php
$conexion=mysqli_connect("sql201.phpzilla.net","phpz_22038491","1d2a3n4y","phpz_22038491") or die("Problemas con la conexión");

mysqli_query($conexion, "insert into dudas(nombre,email,fecha,mensaje) values ('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[fecha]','$_REQUEST[mensaje]')") or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "Nuestros monos están trabajando en registrar tu sugerencia.";
echo "Gracias por tu aportación.";
echo "<html><META HTTP-EQUIV='refresh' 
content='3;URL=Dudas.php'></html>";
?>