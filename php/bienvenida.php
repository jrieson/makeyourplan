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
</head>
<body>


<?php
require_once('includes/basedatos.php');
//require_once('includes/usuarios.php');
//require_once('includes/sesion_usuario.php');

//$nuevaSesion = new SesionUsuario();
//$usuario = new Usuario();

?>

<?php 

    $bd = new BD();        

    if(isset($_POST['registroactividad'])){           

        $titulo = htmlentities($_POST['titulo']);
        $descripcion = htmlentities($_POST['descripcion']);
        $fecha = htmlentities($_POST['fecha']);
        $provincia = htmlentities($_POST['provincia']);
        $actividad = htmlentities($_POST['actividad']);
        $idusuario = htmlentities($_POST['idUsuario']);
        
        $nombreUsuario = htmlentities($_POST['nombreUsuario']);

        $orgDate = $fecha;  
        $fechaFormat = date("Y-m-d", strtotime($orgDate));
        

        $sql ="insert into `actividades`(`titulo`, `descripcion`, `fecha` ,`tipo_actividad`,`ciudad`,`id_usuario`) VALUES (?,?,?,?,?,?)";

        $sentencia = $bd->conectarBD()->prepare($sql);
        $resultado = $sentencia->execute([$titulo, $descripcion,$fechaFormat,$actividad,$provincia,$idusuario]);

        if($resultado){
            echo "Actividad registrada correctamente";
            header('Location: activ_success.php');
        }else{
            echo "Hubo un error en el registro";
        }

    }

    ?>


<header>
        <!--menú y contenido-->
        <div class="container-fluid">
            <div class="row nav rounded-top align-items-stretch justify-content-between ">
                <!--Logo-->
                <div class="col-md-12 col-lg logotipo d-flex align-items-center justify-content-center justify-content-lg-start">                    
                    <a href="index.php"><img src="../imagenes/logoEmpresa.jpg" height="100" width="400"></a> 
                </div>

                <!--icono-->
                <nav class="col-md-12 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap">
                    <a href="#" class="color-4 d-flex align-items-center">
                        <div class="d-flex flex-column text-center">
                            <span>Bienvenido <?php echo $usuario->getNombre(); ?></span>                            
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-auto lateral">
                <div class="logo">
                    <h2>Panel de control</h2>
                </div>
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <!--d-sm-block adaptable a dispositivos móviles-->
                    <a href="index.php"><i class="icon-home"></i> <span>Inicio</span></a>
                    <a href="#"><i class="icon-doc-text"></i> <span>Mi Perfil</span></a>
                    <a href="#"><i class="icon-users"></i> <span>Usuarios</span></a>
                    <a href="#"><i class="icon-cog-alt"></i> <span>Configuración</span></a>
                    <a href="logout.php"><i class="icon-logout"></i> <span>Salir</span></a>
                </nav>
            </div>

            <main class="principal col">
                <div class="row">
                    <div class="columna col-lg-7">
                        <div class="widget entrada">
                            <h3 class="titulo">¡Publica tu plan!</h3>
                            <form action="bienvenida.php" method="post">
                                <input type="text" id="titulo" name="titulo" placeholder="¡Pon un título original a tu plan!">
                                <textarea id="descripcion" name="descripcion"
                                    placeholder="¿De qué va tu plan? Cuanta más información pongas más llamará la atención">
                                </textarea>

                                <div class="columna form-group row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <input type="text" id="fecha" class="form-control" name="fecha" placeholder="Selecciona una fecha"></p>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
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
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <select  class="form-control" id="actividad" name="actividad">
                                            <option value="">Selecciona una actividad</option>
                                            <option value='cocina'>Cocina</option>
                                            <option value='deporte'>Deportes</option>
                                            <option value='animales'>Animales</option>
                                            <option value='idiomas'>Idiomas</option>
                                            <option value='lgtbi'>LGTBI</option>
                                            <option value='viajes'>Viajes</option>
                                            <option value='fotografia'>Fotografía</option>
                                            <option value='musica'>Música</option>
                                            <option value='cine'>Cine</option>
                                            <option value='videojuegos'>Videojuegos</option>
                                            <option value='lectura'>Lectura</option> 
                                    </select>
                                    </div>
                                </div>
                                <input type="hidden" name="idUsuario" value='<?php echo $usuario->getIdusuario(); ?>'>
                                <input type="hidden" name="nombreUsuario" value='<?php echo $usuario->getNombre(); ?>'>
                                <div class="d-flex justify-content-end">
                                    <button name="registroactividad"><i class="icon icon-edit"></i> Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="columna col-lg-5">
                        <div class="widget estadisticas">
                            <h3 class="titulo">Estadísticas</h3>
                            <div class="contenedor d-flex flex-wrap">
                                <div class="caja">
                                    <h3>15,236</h3>
                                    <p>Visitas</p>
                                </div>
                                <div class="caja">
                                    <h3>1831</h3>
                                    <p>Registros</p>
                                </div>
                                <div class="caja">
                                    <h3>160,548</h3>
                                    <p>Ingresos</p>
                                </div>
                            </div>
                        </div>

                        <div class="widget comentarios">
                            <h3 class="titulo">Tus últimos planes publicados</h3> 

                            <?php
                                $bd = new BD();       

                                /* $consultaID = "select id_usuario from usuarios";
                                $ejecutarConsultaID = $bd->conectarBD()->prepare($consultaID);
                                $ejecutarConsultaID -> execute();

                                $resultadosConsulta = $ejecutarConsultaID ->fetchAll(PDO::FETCH_OBJ);
                                print_r($resultadosConsulta);

                                if($ejecutarConsultaID -> rowCount() > 0){
                                    foreach ($resultadosConsulta as $resultado) {
                                    }
                                }*/
    
                                /*Comprobar porque no carga la lista con el id de usuario 21/12/2020 */   

                                    $idUser = $usuario -> getIdUsuario();
                                    
                                    $sql = "select * from actividades where id_usuario = 1";

                                   // var_dump($usuario->getIdUsuario());

                                    //echo $usuario->getIdUsuario();
                                    
                                    $sentencia = $bd->conectarBD()->prepare($sql);
                                    $sentencia -> execute();
                                    
                                    /*Devuelve los datos obtenidos como un objeto con fetch_obj*/
                                    $resultados = $sentencia -> fetchAll(PDO::FETCH_OBJ);
                                    
                                    if($sentencia -> rowCount() > 0){
                                        foreach($resultados as $resultado){                                           
                                             
                                            ?>
                                           
                                                <div class="contenedor">
                                                    <div class="comentario d-flex flex-wrap">
                                                        <div class="foto">
                                                            <a href="#">
                                                                <img src="../img/persona1.jpg" width="100">
                                                            </a>
                                                        </div>
                                                        <div class="texto">
                                                            <a href="#"><?php echo $usuario->getNombre()?></a>
                                                            <p><?php echo $resultado -> titulo ?></p>
                                                            <p class="texto-comentario"><?php echo $resultado -> descripcion ?></p>
                                                        </div>
                                                        <div class="botones d-flex justify-content-start flex-wrap w-100">
                                                            <button class="aprobar"><i class="icono icon-ok"></i>Aprobar</button>
                                                            <button class="eliminar"><i class="icono icon-cancel"></i>Eliminar</button>
                                                            <button class="bloquear"><i class="icono icon-flag"></i>Bloquear usuario</button>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    }
                                

                            ?>                            
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script>
        $( function() {
        $( "#fecha" ).datepicker({ 
            dateFormat: 'dd-mm-yy',
            autoclose: true,
            todayHighlight: true,
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            minDate: new Date()
        }).val();
    } );
  </script>


<!--<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>-->
    
</body>

</html>
