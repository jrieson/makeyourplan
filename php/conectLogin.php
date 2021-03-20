<?php

    require_once('includes/usuarios.php');
    require_once('includes/sesion_usuario.php');

    $nuevaSesion = new SesionUsuario();
    $usuario = new Usuario();

    if(isset($_SESSION['usuario'])){
       
        //Cuando se abre navegador y no se cierra sesión
        $usuario->establecerUsuario($nuevaSesion->getUsuarioActual());
        include_once 'bienvenida.php';
    }else if(isset($_POST['usuario']) && isset($_POST['pass'])){        

       $nombreUsuario = $_POST['usuario'];
       $passUsuario = $_POST['pass'];      
       $usuario = new Usuario();
       
       if($usuario->existeUsuario($nombreUsuario,$passUsuario)){         

           //Abrimos la sesion puesto que el usuario está en la bbdd
           $nuevaSesion->setUsuarioActual($nombreUsuario);
           $usuario->establecerUsuario($nombreUsuario);

           include_once 'bienvenida.php';

       }else{
           $errorLogin = "Nombre de usuario y/o pass incorrecto";
          include_once 'login.php';
       }
    }else{
        echo "Login";
        include_once 'login.php';
    }

?>