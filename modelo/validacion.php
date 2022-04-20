<?php
    require 'conexion.php';

    session_start();

    if(isset($_GET['cerrarSesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_POST['usuariolg']) && isset($_POST['passwordlg'])){

        $sql = "SELECT * FROM usuarios WHERE usuario = '".$_POST['usuariolg']."' AND password = '".$_POST['passwordlg']."'";
        $resultado = mysqli_query($con,$sql) or die ('Error en el query database');

        $row = mysqli_fetch_array($resultado);
        if($row == true){
            //validar rol
            $rol = $row[4]; 
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case 1:
                    header("location:../admin.php");
                break;
    
                case 2:
                    header("location:../usuario.php");
                break;
                default:
            }
        }else{
            //no existe el usuario
            header('Refresh: 0; http://localhost/Bethany/inicioSesion.php');
            echo "<script>alert('El usuario o contraseña son incorrectos');</script>";
        }

    }


?>