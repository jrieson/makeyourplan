<?php

require_once('usuarios.php');
require_once('sesion_usuario.php');

//$nuevaSesion = new SesionUsuario();
$usuario = new Usuario();

?>

<?php


function encabezadoHeader(){
    if(isset($_SESSION['usuario'])){
   
        //Cuando se abre navegador y no se cierra sesión
        $usuario->establecerUsuario($nuevaSesion->getUsuarioActual());
        ?>
        <header>
            <!--menú y contenido-->
            <div class="container-fluid">
                <div class="row nav rounded-top align-items-stretch justify-content-between ">
                    <!--Logo-->
                    <div
                        class="col-md-12 col-lg logotipo d-flex align-items-center justify-content-center justify-content-lg-start">                    
                        
                    </div>
    
                    <!--icono-->
                    <nav class="col-md-12 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap">
                        <a href="#" class="color-4 d-flex align-items-center">
                            <div class="d-flex flex-column text-center">
                                <span>Bienvenido <?php echo $usuario->getNombre(); ?></span>                            
                            </div>
                        </a>
                        <a href="bienvenida.php" class="color-2 d-flex align-items-center">
                            <div class="d-flex flex-column text-center">
                                <span>Mi Panel</span>
                                <i class="icono icon-briefcase"></i>
                            </div>
                        </a>
                        <a href="logout.php" class="color-3 d-flex align-items-center">
                            <div class="d-flex flex-column text-center">
                                <span>Cerrar Sesión</span>
                                <i class="icono icon-user"></i>
                            </div>
                        </a> 
                    </nav>
                </div>
            </div>
            </header>
    
        <?php
    
        }else{
            ?>
            <header>
            <!--menú y contenido-->
            <div class="container-fluid">
                <div class="row nav rounded-top align-items-stretch justify-content-between ">
                    <!--Logo-->
                    <div
                        class="col-md-12 col-lg logotipo d-flex align-items-center justify-content-center justify-content-lg-start">                    
                        
                    </div>
    
                    <!--icono-->
                    <nav class="col-md-12 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap">
                        <a href="index.php" class="color-1 d-flex align-items-center">
                                <div class="d-flex flex-column text-center">
                                    <span>Inicio</span>
                                    <i class="icono icon-briefcase"></i>
                                </div>
                        </a>
                        <a href="registro.php" class="color-2 d-flex align-items-center">
                            <div class="d-flex flex-column text-center">
                                <span>Registrate</span>
                                <i class="icono icon-briefcase"></i>
                            </div>
                        </a>
                        <a href="login.php" class="color-3 d-flex align-items-center">
                            <div class="d-flex flex-column text-center">
                                <span>Log in</span>
                                <i class="icono icon-user"></i>
                            </div>
                        </a>                    
                        <a href="#" class="color-4 d-flex align-items-center">
                            <div class="d-flex flex-column text-center">
                                <span>Contacto</span>
                                <i class="icono icon-mail"></i>
                            </div>
                        </a>
                    </nav>
                </div>
            </div>
    </header>
        <?php
        }    
        ?>
<?php
}
?>

