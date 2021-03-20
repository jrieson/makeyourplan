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
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, mininum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make your Plan | Panel Usuario</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/jquery-ui.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:300,400,700,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilosPlanes.css">
    <link rel="stylesheet" href="../css/indice.css">
    <link rel="stylesheet" href="../css/mapa.css">
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
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
                    <a href="index.php"><img src="../imagenes/logoEmpresa.jpg" height="100" width="400"></a>
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
                <div
                    class="col-md-12 col-lg logotipo d-flex align-items-center justify-content-center justify-content-lg-start">                    
                    <a href="index.php"><img src="../imagenes/logoEmpresa.jpg" height="100" width="400"></a>
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
    

    <main class="col"> 

    <div class="container-fluid">
        <!-- Slider-->
        <div class="row slider">
                    <!--Para slider-->
                    <div class="col banner">

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
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption d-block">
                                        <h2>Hi! Wie geht's? El sitio ideal para aprender un nuevo idioma.</h2>
                                        <h2>Únete a personas como tu, crea tus planes y diviértete</h2>
                                        <a href="registro.php" class="btn btn-danger">Únete a Make Your Plan</a>
                                    </div>
                                    <img src="../imagenes/banner_idiomas.jpg">
                                </div>                            
                            </div>
                        </div>                    
                    </div>
                </div>

        </div>
    </div>



    <div class="container">
        <div class="col d-flex justify-content-center pt-4">
            <h3>Estás buscando alguien para practicar inglés?¿Te apetece aprender un nuevo idioma?</h3>
            
        </div>
        <div class="col d-flex justify-content-center pt-4">
            
            <h3>Estos son los planes que han publicado algunos de nuestros makers</h3>
        </div>

        <div class="form-group row mt-4 mb-4 d-flex justify-content-center">                   
            <form action="cine.php" method="post">
                    
                        <select  class="form-control" id="provincia" name="provincia">
                            <option value="">Selecciona una provincia</option>
                            <option value='Alava'>Álava</option>
                            <option value='Albacete'>Albacete</option>
                            <option value='Alicante'>Alicante/Alacant</option>
                            <option value='Almeria'>Almería</option>
                            <option value='Asturias'>Asturias</option>
                            <option value='Avila'>Ávila</option>
                            <option value='Badajoz'>Badajoz</option>
                            <option value='Barcelona'>Barcelona</option>
                            <option value='Burgos'>Burgos</option>
                            <option value='Caceres'>Cáceres</option>
                            <option value='Cadiz'>Cádiz</option>
                            <option value='Cantabria'>Cantabria</option>
                            <option value='Castellon'>Castellón/Castelló</option>
                            <option value='Ceuta'>Ceuta</option>
                            <option value='Ciudadreal'>Ciudad Real</option>
                            <option value='Cordoba'>Córdoba</option>
                            <option value='Cuenca'>Cuenca</option>
                            <option value='Girona'>Girona</option>
                            <option value='Las palmas'>Las Palmas</option>
                            <option value='Granada'>Granada</option>
                            <option value='Guadalajara'>Guadalajara</option>
                            <option value='Guipuzcoa'>Guipúzcoa</option>
                            <option value='Huelva'>Huelva</option>
                            <option value='Huesca'>Huesca</option>
                            <option value='Islas Baleares'>Illes Balears</option>
                            <option value='Jaen'>Jaén</option>
                            <option value='La Coruña'>A Coruña</option>
                            <option value='La Rioja'>La Rioja</option>
                            <option value='Leon'>León</option>
                            <option value='Lleida'>Lleida</option>
                            <option value='Lugo'>Lugo</option>
                            <option value='Madrid'>Madrid</option>
                            <option value='Malaga'>Málaga</option>
                            <option value='Melilla'>Melilla</option>
                            <option value='Murcia'>Murcia</option>
                            <option value='Navarra'>Navarra</option>
                            <option value='Ourense'>Ourense</option>
                            <option value='Palencia'>Palencia</option>
                            <option value='Pontevedra'>Pontevedra</option>
                            <option value='Salamanca'>Salamanca</option>
                            <option value='Segovia'>Segovia</option>
                            <option value='Sevilla'>Sevilla</option>
                            <option value='Soria'>Soria</option>
                            <option value='Tarragona'>Tarragona</option>
                            <option value='Tenerife'>Santa Cruz de Tenerife</option>
                            <option value='Teruel'>Teruel</option>
                            <option value='Toledo'>Toledo</option>
                            <option value='Valencia'>Valencia/Valéncia</option>
                            <option value='Valladolid'>Valladolid</option>
                            <option value='Vizcaya'>Vizcaya</option>
                            <option value='Zamora'>Zamora</option>
                            <option value='Zaragoza'>Zaragoza</option>
                        </select>   
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-info btn-block mt-3" name="busquedaProvincia">Buscar</button>
                        </div>             
            </form>                  
        </div>
        <div class="row mb-4" id="mapa">
        
        </div>
        <script src="../js/mapa.js"></script>
    

    <?php 
    
    
    require_once('includes/basedatos.php');     
   
    
    $bd = new BD();    
    
    /* Código correspondiente al listado de general de actividades según su tipo de actividad */
    
    if(isset($_POST['actv_cine'])){   
        
        $tipoActividad = $_POST['cine'];

               
        /*Extraemos de la tabla actividades los planes creados por otros Makers*/
        $sql = 'select * from actividades where tipo_actividad = "'.$tipoActividad.'"';
        
        $sentencia = $bd->conectarBD()->prepare($sql);
        $sentencia -> execute();
        
        /*Devuelve los datos obtenidos como un objeto con fetch_obj*/
        $resultados = $sentencia -> fetchAll(PDO::FETCH_OBJ);               

        if($sentencia -> rowCount() > 0){   
            
            ?>

            <table class="table">
                <thead>
                <tr>
                    <th>Título del plan</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Ciudad</th>
                    <th>¡Únete!</th>
                    <th>Makers apuntados a este plan</th>
                </tr>                
                <thead>
                <tbody>
            <?php

            foreach ($resultados as $resultado) {

                ?>
                
                    <tr>
                        <td><?php echo $resultado -> titulo ?></td>
                        <td><?php echo $resultado -> descripcion ?></td>
                        
                        <td><?php 

                            $fecha_original = $resultado -> fecha;
                                
                            // Convertimos a timestamp la fecha
                            $timestamp = strtotime($fecha_original);

                            // Formateamos a dd-mm-yyyy y la mostramos en la tabla
                            $fecha_formateada = date("d-m-Y", $timestamp);
                        
                            echo $fecha_formateada  ?></td> 
                        <td><?php echo $resultado -> ciudad ?></td>
                        <form action="idiomas.php" method="post">

                            <input type="hidden" name="idUsuario" value='<?php echo $usuario->getIdusuario(); ?>'>
                            <input type="hidden" name="nombreUsuario" value='<?php echo $usuario->getNombre(); ?>'>
                            <input type="hidden" name="idActividad" value='<?php echo $resultado -> id_actividad ?>'>    
                            <td>
                            <?php
                                if (!empty($_SESSION['usuario'])){
                                    ?>
                                        <button name="usuarioApuntado" class="btn btn-primary">¡Me apunto!</button>
                                    <?php
                                }else{
                                    echo 'No estás registrado. No te puedes apuntar.';
                                   
                                }
                            ?>
                            </td>

                        </form>
                        <td>
                            <?php

                                /*Extraemos de la tabla usuarios_apuntados el número de personas apuntadas a un determinado plan*/
                                $consultaUsuarios = 'select * from usuarios_apuntados where id_actividad='.$resultado -> id_actividad.'';
                                $sentenciaUsuarios = $bd->conectarBD()->prepare($consultaUsuarios);
                                $sentenciaUsuarios -> execute();

                                $totalUsuarios =  $sentenciaUsuarios -> rowcount();                            

                                echo $totalUsuarios
                            ?>
                        </td>                            
                        </td>                            
                    </tr>
               
                <?php                    
               
            }
            ?>
            <tbody>               
            </table>
            <?php
        }else{
             ?>
            <h3>Aún no hay ningún plan publicado en esta categoría. ¿Por qué no te <a href="registro.php">registras</a> y publicas tu primera plan?</h3>
            <?php
        }
           
    }

    /* Código correspondiente a filtrado de actividades según provincia*/

    if(isset($_POST['busquedaProvincia'])){           

        
        $provincia = $_POST['provincia'];
        //$tipoActividad = $_POST['idiomas'];       
        
        /*Extraemos de la tabla actividades los planes creados por otros Makers*/
        $sql = 'SELECT * FROM `actividades` WHERE ciudad="'.$provincia.'" AND tipo_actividad="idiomas"';
        
        $sentencia = $bd->conectarBD()->prepare($sql);
        $sentencia -> execute();
        
        /*Devuelve los datos obtenidos como un objeto con fetch_obj*/
        $resultados = $sentencia -> fetchAll(PDO::FETCH_OBJ);
        
        if($sentencia -> rowCount() > 0){   
            
            ?>

            <table class="table">
                <thead>
                <tr>
                    <th>Título del plan</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Ciudad</th>
                    <th>¡Únete!</th>
                    <th>Makers apuntados a este plan</th>
                </tr>                
                <thead>
                <tbody>
            <?php

            foreach ($resultados as $resultado) {

                ?>
                
                    <tr>
                        <td><?php echo $resultado -> titulo ?></td>
                        <td><?php echo $resultado -> descripcion ?></td>
                        
                        <td><?php 

                            $fecha_original = $resultado -> fecha;
                                
                            // Convertimos a timestamp la fecha
                            $timestamp = strtotime($fecha_original);

                            // Formateamos a dd-mm-yyyy y la mostramos en la tabla
                            $fecha_formateada = date("d-m-Y", $timestamp);
                        
                            echo $fecha_formateada  ?></td> 
                        <td><?php echo $resultado -> ciudad ?></td>
                        <form action="idiomas.php" method="post">

                            <input type="hidden" name="idUsuario" value='<?php echo $usuario->getIdusuario(); ?>'>
                            <input type="hidden" name="nombreUsuario" value='<?php echo $usuario->getNombre(); ?>'>
                            <input type="hidden" name="idActividad" value='<?php echo $resultado -> id_actividad ?>'>    
                            <td>
                            <?php
                                if (!empty($_SESSION['usuario'])){
                                    ?>
                                        <button name="usuarioApuntado" class="btn btn-primary">¡Me apunto!</button>
                                    <?php
                                }else{
                                    echo 'No estás registrado. No te puedes apuntar.';
                                   
                                }
                            ?>
                            </td>

                        </form>
                        <td>
                            <?php

                                /*Extraemos de la tabla usuarios_apuntados el número de personas apuntadas a un determinado plan*/
                                $consultaUsuarios = 'select * from usuarios_apuntados where id_actividad='.$resultado -> id_actividad.'';
                                $sentenciaUsuarios = $bd->conectarBD()->prepare($consultaUsuarios);
                                $sentenciaUsuarios -> execute();

                                $totalUsuarios =  $sentenciaUsuarios -> rowcount();                            

                                echo $totalUsuarios
                            ?>
                        </td>                            
                        </td>                            
                    </tr>
               
                <?php                    
               
            }
            ?>
            <tbody>               
            </table>
            <?php
        }else if(isset($_SESSION['usuario'])){
             ?>
            <h3>No hay ningún plan en tu ciudad. ¿Porque no creas uno nuevo en tu <a href="conectLogin.php">zona de usuario</a>?</h3>
            <?php
        }else{
            ?>
            <h3>Aún no hay ningún plan en tu ciudad. ¿Por qué no te <a href="registro.php">registras</a> y publica tu primera plan?</h3>
            <?php
        }
               

        

    }
    
    ?>  

</div>

</main>
    
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
</body>


</html>

<?php 

    $bd = new BD();        

    if(isset($_POST['usuarioApuntado'])){
        
        $idUsuario = $_POST['idUsuario'];
        $nombreUsuario = $_POST['nombreUsuario'];
        $idActividad = $_POST['idActividad'];  

        $sql ="insert into `usuarios_apuntados`(`id_user_apuntado`, `nombre`, `id_actividad`) VALUES (?,?,?)";

        $sentencia = $bd->conectarBD()->prepare($sql);
        $resultado = $sentencia->execute([$idUsuario, $nombreUsuario,$idActividad]);

        if($resultado){            

            /*Lo marcado a continuación me sirve para recorrer la tabla y comprobar si el usuario está o no apuntado a la actividad
            -- Continuar por aquí 07/12/2020*/
            
            /*Comprobamos recorriendo con un for que el usuario que se vaya apuntar no lo haya hecho, a través de su número de ID*/        
            
            $sqlUser = 'select * from usuarios_apuntados where id_user_apuntado = "'.$idUsuario.'"';
            $sentenciaUser = $bd->conectarBD()->prepare($sqlUser);
            $sentenciaUser -> execute();
            
            //Devuelve los datos obtenidos como un objeto con fetch_obj
            $resultadosUsers = $sentenciaUser -> fetchAll(PDO::FETCH_OBJ);

            //echo "id Usuario ".$idUsuario;
            if($sentenciaUser -> rowCount() > 0){
                foreach ($resultadosUsers as $resultadoUser) {
                    //var_dump($resultadoUser -> id_user_apuntado);
                    if($resultadoUser -> id_user_apuntado == 3){
                        //echo "No estás apuntado a esta actividad."; 
                        
                        ?>
                            <div class="container">
                                <div class="row">                                
                                    <div class="col d-flex justify-content-center pt-4">
                                            <h3>Ya estabas apuntado a esta actividad</h3>                    
                                    </div>
                                </div>
                                <div class="row">                                
                                    <div class="col d-flex justify-content-center pt-4">
                                            <h3>Descubre <a href="index.php">otros planes</a></h3>                    
                                    </div>
                                </div>                                                                
                            </div>
                        <?php
                        break;
                    }
                }
            }
        
            ?>
            <!--<div class="container">
                <div class="col d-flex justify-content-center pt-4">
                    <h3>¡Te has apuntado a este plan! ¡Disfruta de la actividad!</h3>                    
                </div>
                <div class="col d-flex justify-content-center pt-4">                    
                    <a href="index.php">Descubre nuevos planes</a>
                </div>
            </div>-->

            
            
            <?php
                
        }else{
            echo "Hubo un error en el registro";
        }  


        

    }


    ?>
  

    