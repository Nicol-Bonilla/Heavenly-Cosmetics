<?php include("template/encabezado.php");?>

<!DOCTYPE html>
<html>
<head>
  <title>formulario de registro</title>
</head>
<body background="img/fondo2.jpg"  >
<div class="form">
  <center>
    <h1>
<form action="Datos.php" method="post">
 <h2 class="display-8"><font face="Avenir Next LT Pro"> <label for="name"> Nombres</label> </h2> </font>
  <h2 class="display-8"><font face="Avenir Next LT Pro"><input type="text" name="Nombres" placeholder="Digita tu nombre completo" required> <br></h2> </font>
  <br>
  <h2 class="display-8"><font face="Avenir Next LT Pro"> <label for="name">Apellidos</label> </2> </font>
  <h2 class="display-8"><font face="Avenir Next LT Pro"><input type="text" name="Apellidps" placeholder="Digita tus apellidos" required> <br> </h2></font>
  <br>
  <h2 class="display-8"><font face="Avenir Next LT Pro"><label for="name">Usuario</label> </<h2> </font>
  <h2 class="display-8"><font face="Avenir Next LT Pro"><input type="text" name="Usuario" placeholder="Digita tu usuario" required> <br> </h2> </font>
  <br>
  <h2 class="display-8"><font face="Avenir Next LT Pro"><label for="name">Contraseña</label> </h2> </font>
  <h2 class="display-8"><font face="Avenir Next LT Pro"><input type="password" name="contra" placeholder="Digita tu contraseña" required> </h2> </font>
  <h2 class="display-6"><font face="Avenir Next LT Pro"><a class="navbar-dark bg-dark btn btn-primary"> <input type= "submit" value= "Iniciar"> <br> </h2> </font>
</center>
</h1>
</form>
</div>
</body>
</html>
