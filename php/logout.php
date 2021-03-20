<?php
    include_once 'includes/sesion_usuario.php';

    $usuarioSesion = new SesionUsuario();
    $usuarioSesion->cerrarSesion();

    header('location: index.php');
?>