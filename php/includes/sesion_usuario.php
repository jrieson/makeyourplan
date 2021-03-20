<?php

class SesionUsuario{

    public function __construct(){
        session_start();
    }


    /*Funcion para dar valor a la sesion actual*/

    public function setUsuarioActual($usuario){
        $_SESSION['usuario'] = $usuario;
    }

    public function getUsuarioActual(){
        return $_SESSION['usuario'];
    }


    public function cerrarSesion(){

        /*Borramos los valores de las sesiones*/ 
        session_unset();

        /*Destruye la sesión*/ 
        session_destroy();
    }


}


?>