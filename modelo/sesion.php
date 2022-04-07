<?php
        require 'conexion.php';

        $sql = "SELECT nombre, usuario, tipoUsuario FROM usuarios WHERE usuario = '".$_POST['usuariolg']."' AND password = '".$_POST['passwordlg']."'";
        $usuarios = mysqli_query($con,$sql) or die ('Error en el query database');

        if($usuarios->num_rows == 1):
            $datos = $usuarios->fetch_assoc();
            $_SESSION['usuario'] = $_POST['usuariolg'];
            echo json_encode(array('error' => false, 'tipo' => $datos['tipoUsuario']));
            
        else:
            echo json_encode(array('error' => true));
        endif;

    ?>