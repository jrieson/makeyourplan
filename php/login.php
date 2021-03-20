<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, mininum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make your Plan | Panel Usuario</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/jquery-ui.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:300,400,700,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/indice.css">
    <title>Make your plan | Login</title>
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

    <div class="container">
        <div class="col d-flex justify-content-center">
            <h3>Iniciar Sesión</h3>
        </div>

        <div class="row mt-3">
            <div class="col">
            <form action="conectLogin.php" method="POST">
                <?php
                
                    if(isset($errorLogin)){
                        echo $errorLogin;
                    }
                
                ?>
               
                <div class="form-group row">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="nombreUsuario">Nombre de usuario </label>
                        <input type="text" class="form-control" name="usuario" id="nombreUsuario">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="pass" id="password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12 text-center">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-9 col-md-4">
                                <button class="btn btn-primary btn-block mt-3" type="submit" name="login">Iniciar sesion</button>
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



