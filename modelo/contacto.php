<?php
    
    require 'conexion.php';

    $sql= "INSERT INTO mensajes VALUES(null, '".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["subject"]."', '".$_POST["message"]."')";
    $resultado = mysqli_query($con,$sql) or die ('Error en el query database');
    mysqli_close($con);

    header('Refresh: 0; http://localhost/Bethany/contacto.html');

    echo "<script>alert('Mensaje enviado exitosamente');</script>";
?>

