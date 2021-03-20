<?php

require_once('includes/usuarios.php');
require_once('includes/sesion_usuario.php');

$nuevaSesion = new SesionUsuario();
$usuario = new Usuario();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make Your Plan</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/indice.css">
</head>
<body>
<?php

/*Codigo para propagar las sesiones por el resto de páginas -- si que funcionaba*/
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
                    <img src="../imagenes/logoEmpresa.jpg" height="100" width="400"> 
                </div>

                <!--icono-->
                <nav class="col-md-12 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap">
                    <a href="#" class="color-4 d-flex align-items-center">
                        <div class="d-flex flex-column text-center">
                            <span>Bienvenido <?php echo $usuario->getNombre(); ?></span>                            
                        </div>
                    </a>
                    <a href="conectLogin.php" class="color-2 d-flex align-items-center">
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
                <div class="col-md-12 col-lg logotipo d-flex align-items-center justify-content-center justify-content-lg-start">                    
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
    <?php
    }
    ?>

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

        <div class="row mt-5">
            <div class="col">
                <section class="categorias">
                    <h2>Categorías</h2>
                    <div>
                        <span>Visita nuestras principales categorías</span>
                    </div>                    
                </section>
            </div>
        </div>

        <!--Lista de categorias-->

        <div class="row mt-3">

            <!--Categoria Idiomas-->
            <div class="col-4">
                <div class="card text-center">
                    <img class="card-img-top img-fluid imagen-tarjeta" src="../imagenes/caratulaidiomas.jpg">
                    <div class="card-body">
                        <h3 class="card-title">
                            Idiomas
                        </h3>
                        
                        <p class="card-text">Hi! Wie geht's? El sitio ideal para aprender un nuevo idioma.

                        </p>
                        <form action="idiomas.php" method="post">
                                    <input type="hidden" name="idiomas" value='<?php echo 'idiomas' ?>'>                                
                                    <button class="btn btn-primary btn-block" type="submit" name="actv_idiomas">Idiomas</button>                                
                        </form> 
                    </div>
                </div>

            </div>

            <!--Categoria Cocina-->
            <div class="col-4">
                <div class="card text-center">
                    <img class="card-img-top img-fluid" src="../imagenes/chef-1209161_1920.jpg">
                    <div class="card-body">
                        <h3 class="card-title">
                            Cocina
                        </h3>
                        
                        <p class="card-text">¿Te encanta cocinar? Esta es tu comunidad!
                        </p>
                        <form action="cocina.php" method="post">
                                    <input type="hidden" name="cocina" value='<?php echo 'cocina' ?>'>                                
                                    <button class="btn btn-primary btn-block" type="submit" name="actv_cocina">Cocina</button>                                
                        </form> 
                    </div>
                </div>
            </div>

            <!--Categoria Deportes-->

            <div class="col-4">
                <div class="card text-center">
                    <img class="card-img-top img-fluid" src="../imagenes/dumbbells-2465478.jpg">
                    <div class="card-body">
                        <h3 class="card-title">
                            Deportes
                        </h3>
                        
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, vitae.
                        </p>
                        <form action="deportes.php" method="post">
                                    <input type="hidden" name="deportes" value='<?php echo 'deportes' ?>'>                                
                                    <button class="btn btn-primary btn-block" type="submit" name="actv_deportes">Deportes</button>                                
                        </form> 
                    </div>
                </div>
            </div>          
        </div>

        <!--Categoria Animales-->

        <div class="row mt-3">
            <div class="col-4 text-center">
                <div class="card">
                    <img class="card-img-top img-fluid" src="../imagenes/friends-3042751.jpg">
                    <div class="card-body">
                        <h3 class="card-title">
                            Animales
                        </h3>
                        
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, vitae.
                        </p>
                        <form action="animales.php" method="post">
                                    <input type="hidden" name="animales" value='<?php echo 'animales' ?>'>                                
                                    <button class="btn btn-primary btn-block" type="submit" name="actv_animales">Animales</button>                                
                        </form> 
                    </div>
                </div>

            </div>

            <!--Categoria LGTB-->
            
            <div class="col-4">
                <div class="card text-center">
                    <img class="card-img-top img-fluid" src="../imagenes/heartlgtb.jpg">
                    <div class="card-body">
                        <h3 class="card-title">
                            LGTBI
                        </h3>
                        
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, vitae.
                        </p>
                        <form action="lgtbi.php" method="post">
                                    <input type="hidden" name="lgtbi" value='<?php echo 'lgtbi' ?>'>                                
                                    <button class="btn btn-primary btn-block" type="submit" name="actv_lgtbi">LGTBI</button>                                
                        </form> 
                    </div>
                </div>
            </div>

            <!--Categoria Viajes-->

            <div class="col-4">
                <div class="card text-center">
                    <img class="card-img-top img-fluid" src="../imagenes/viajes.jpg">
                    <div class="card-body">
                        <h3 class="card-title">
                            Viajes
                        </h3>
                        
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, vitae.
                        </p>
                        <form action="viajes.php" method="post">
                                    <input type="hidden" name="viajes" value='<?php echo 'viajes' ?>'>                                
                                    <button class="btn btn-primary btn-block" class="btn btn-primary btn-block" type="submit" name="actv_viajes">Viajes</button>                                
                        </form> 
                    </div>
                </div>
            </div> 
        </div>

        <!--Categoria Fotografía-->

        <div class="row mt-3">
            <div class="col-4">
                <div class="card text-center">
                    <img class="card-img-top img-fluid" src="../imagenes/photographer-67127.jpg">
                    <div class="card-body">
                        <h3 class="card-title">
                            Fotografía
                        </h3>
                        
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, vitae.
                        </p>
                        <form action="fotografia.php" method="post">
                                    <input type="hidden" name="fotografia" value='<?php echo 'fotografia' ?>'>                                
                                    <button class="btn btn-primary btn-block"  type="submit" name="actv_fotografia">Fotografía</button>                                
                        </form> 
                    </div>
                </div>

            </div>

            <!--Categoria Música-->
            
            <div class="col-4">
                <div class="card text-center">
                    <img class="card-img-top img-fluid" src="../imagenes/piano-3505109.jpg">
                    <div class="card-body">
                        <h3 class="card-title">
                            Música
                        </h3>
                        
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, vitae.
                        </p>
                        <form action="musica.php" method="post">
                                    <input type="hidden" name="musica" value='<?php echo 'musica' ?>'>                                
                                    <button class="btn btn-primary btn-block" type="submit" name="actv_musica">Música</button>                                
                        </form> 
                    </div>
                </div>
            </div>

            <!--Categoria Cine-->

            <div class="col-4">
                <div class="card text-center">
                    <img class="card-img-top img-fluid" src="../imagenes/cineypalomitas.jpg">
                    <div class="card-body">
                        <h3 class="card-title">
                            Cine
                        </h3>
                        
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, vitae.
                        </p>
                        <form action="cine.php" method="post">
                                    <input type="hidden" name="cine" value='<?php echo 'cine' ?>'>                                
                                    <button class="btn btn-primary btn-block" type="submit" name="actv_cine">Cine</button>                                
                        </form> 
                    </div>
                </div>
            </div>
        </div>

</main>


<footer>
<div class="row">
   
   <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
       <ul class="adress">
            <span>Adress</span>    
            <li>
               <p>Lorem ipsum dolor sit amet, vero omnis vocibus</p>
             </li>
                  
             <li>
               <p>+90 1234 56789</p>
             </li>
                  
             <li>
               <p>info@gmail.com</p>
             </li>
        </ul>
   </div>
   
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
       <ul class="contact">
            <span>Contact</span>    
            <li>
               <a href="#">Home</a>
             </li>
                  
             <li>
                <a href="#">About</a>
             </li>
                  
             <li>
               <a href="#">Blog</a>
             </li>
                  
             <li>
                <a href="#">Gallery </a>
             </li>
                  
             <li>
               <a href="#">Contact</a>
            </li>
       </ul>
   </div>

   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
      <ul class="social">
                 <span>Social</span>    
                  <li>
                       <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                  </li>
                 
                  <li>
                       <a href="#"><i class="fa fa-github fa-2x"></i></a>
                  </li>
                   
                  <li>
                       <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                  </li>
                  
                  <li>
                       <a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
                  </li>
                   
                  <li>
                       <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                 </li>
                 
        </ul>
   </div>


</div> 
</div>
</footer>

    
<script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>