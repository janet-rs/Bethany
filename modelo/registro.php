<?php
require 'conexion.php';
 $usuario=$_POST['usuario'];
 $correo=$_POST['correo'];
 $pwd=$_POST['pwd'];
 $rol=1;



 $sql= "INSERT INTO usuarios VALUES(null, '$correo', '$usuario', '$pwd', '$rol')";
 $resultado = mysqli_query($con,$sql) or die ('Error en el query database');
 mysqli_close($con);

 header('Refresh: 0; http://localhost/Bethany/inicioSesion.php');

 echo "<script>alert('Mensaje enviado exitosamente');</script>";


?>