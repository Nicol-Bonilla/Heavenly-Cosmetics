

<?php

$conectar=mysqli_connect('127.0.0.1', 'root', '', 'Datos');
if (!$conectar)
{
	echo '<br>NO se ha podido conectar con la Base<br>';
}
else
{
$Nombres=$_POST ['Nombres'];
$Apellidos=$_POST ['Apellidps'];
$Usuario=$_POST ['Usuario']; 
$Contraseña=$_POST ['contra'];

$sql="INSERT INTO datos VALUES ('$Nombres','$Apellidos','$Usuario','$Contraseña')";

if (mysqli_query($conectar, $sql))
	{
		echo "<script>
	        alert('Datos Almacenados correctamente');
			location.href='Catalogo.php';
			</script>";
	}
	else
	{
		echo "<script>
	        alert('Datos Almacenados correctamente');
			location.href='./Catalogo.php';
			</script>";
	}
	mysqli_close ($conectar);
}
?>
