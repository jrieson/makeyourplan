<?php
require_once('includes/basedatos.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, mininum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make your Plan | Registro</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/jquery-ui.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:300,400,700,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/indice.css">
</head>
<body>

<header>
        <!--menú y contenido-->
        <div class="container-fluid">
            <div class="row nav rounded-top align-items-stretch justify-content-between ">
                <!--Logo-->
                <div
                    class="col-md-12 col-lg logotipo d-flex align-items-center justify-content-center justify-content-lg-start">                    
                    <img src="../imagenes/logoEmpresa.jpg" height="100" width="400"> 
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

<main>

<!-- Slider-->
<div class="container-fluid">
<div class="row slider">
                <!--Para slider-->
                <div class="col">

                    <div class="carousel slide" id="carrusel" data-ride="carousel">

                    <section class="section">
                <div class="section-info d-flex justify-content-center flex-column">
                    <div class="flex-item d-flex justify-content-center">
                        
                    </div>
                    <div class="flex-item d-flex justify-content-center">
                       
                    </div>
                    <div class="flex-item d-flex justify-content-center">
                       
                    </div>
                </div>
            </section>    
                        <ol class="carousel-indicators">
                            <li data-target="#carrusel" data-slid-to="0" class="active"></li>
                            <li data-target="#carrusel" data-slid-to="1"></li>
                            <li data-target="#carrusel" data-slid-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-caption d-block">
                                    <h1>Haz planes y conoce gente</h1>
                                    <h2>Únete a personas como tu, crea tus planes y diviértete</h2>
                                    <a href="registro.php" class="btn btn-danger">Únete a Make Your Plan</a>
                                </div>
                                <img src="../imagenes/guitarra_detalle.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-caption d-block">
                                <h1>Haz planes y conoce gente</h1>
                                    <h2>Únete a personas como tu, crea tus planes y diviértete</h2>
                                    <a href="registro.php" class="btn btn-danger">Únete a Make Your Plan</a>
                                </div>

                                <img src="../imagenes/wanderer_detalle.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-caption d-block">
                                <h1>Haz planes y conoce gente</h1>
                                    <h2>Únete a personas como tu, crea tus planes y diviértete</h2>
                                    <a href="registro.php" class="btn btn-danger">Únete a Make Your Plan</a>
                                </div>
                                <img src="../imagenes/fotografia_detalle.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <a href="#carrusel" class="carousel-control-prev" data-slide="prev"><span
                            class="carousel-control-prev-icon" aria-hidden="true"></span><span
                            class="sr-only">Anterior</span></a>
                    <a href="#carrusel" class="carousel-control-next" data-slide="next"><span
                            class="carousel-control-next-icon" aria-hidden="true"></span><span
                            class="sr-only">Siguiente</span></a>
                </div>
            </div>

</div>

<div>

       <?php 

        $bd = new BD();        
    
        if(isset($_POST['registro'])){           

            $nombre = htmlentities($_POST['nombre']);
            $apellidos = htmlentities($_POST['apellidos']);
            $email = htmlentities($_POST['email']);
            $nombreUsuario = htmlentities($_POST['usuario']);
            $contraseña = htmlentities($_POST['pass']);

            $sql ="insert into `usuarios`(`nombre`, `apellidos`, `email` ,`usuario`,`password`) VALUES (?,?,?,?,?)";

            $sentencia = $bd->conectarBD()->prepare($sql);
            $resultado = $sentencia->execute([$nombre, $apellidos, $email, $nombreUsuario, md5($contraseña)]);

            if($resultado){
                echo "Usuario registrado correctamente";
            }else{
                echo "Hubo un error en el registro";
            }

        }
    
    ?>
</div>
    
<div class="container">
        
<div class="row mt-3 ">
    <div class="col d-flex justify-content-center">
        <h3>Formulario de registro</h3>
    </div>
</div>
        <div class="row mt-3">
            <div class="col">
                <form action="registro.php" method="post">
                    <!--crear div de clase form-group antes de insertar los inputs-->
                    <div class="form-group row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos"
                                placeholder="Apellidos" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-md-6 mb-3 ">
                            <label for="email">Correo Electrónico</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Correo electrónico" required>
                            </div>
                        </div> 
                        
                        <div class="col-12 col-md-6 mb-3 ">
                            <label for="pass">Password</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></span>
                            </div>
                            <input type="password" class="form-control" name="pass" id="pass"
                                placeholder="Contraseña" required>
                            </div>
                            
                        </div> 
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-6 mb-3 ">
                            <label for="username">Nombre Usuario</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" class="form-control" name="usuario" id="username"
                                placeholder="Nombre usuario" required>
                            </div>
                        </div>  
                    </div>
                   
                    <div class="form-group row">
                        <div class="col-12 text-center">
                        <!--<label for="" class="form-check-label">
                                <input type="checkbox" name="terminos" id="hombre" class="form-check-input" required>Acepto los
                                términos
                                y condiciones.
                            </label>-->    
                        
                            <div class="row justify-content-center"> 
                                <div class="col-12 col-sm-9 col-md-4">
                                    <button class="btn btn-primary btn-block mt-3" type="submit" value="Registro" name="registro">Registro</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>



    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>