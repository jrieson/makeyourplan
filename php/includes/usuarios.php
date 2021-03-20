

<?php
/*Comprobaremos que el usuario existe en la base de datos*/

require_once("includes/basedatos.php");

class Usuario extends BD
{
    private $nombre;
    private $apellido;
    private $idUsuario;
    

    /*Función para comprobar que existe el usuario*/

    public function existeUsuario($nombreUsuario, $pass){
        $md5pass = md5($pass);

        $query = $this->conectarBD()->prepare("select * from usuarios where usuario = :usuario and password = :pass");
        $query->execute(['usuario' => $nombreUsuario, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    //Una vez logueado, para mostrar su nombre y apellidos
    public function establecerUsuario($usuario){
        $query = $this->conectarBD()->prepare('select * from usuarios where usuario = :usuario');
        $query->execute(['usuario' => $usuario]);

        foreach ($query as $usuarioActual) {
            /*Asignamos a las variables el nombre y el usuario obtenido de la bbdd*/
            $this->nombre = $usuarioActual['nombre'];
            $this->apellido = $usuarioActual['apellidos'];
            $this->idUsuario = $usuarioActual['id_usuario'];
           
        }

       
    }

    public function getNombre(){
        echo $this->nombre." ".$this->apellido;
       
    }

    public function getIdUsuario(){
        /*También cojo el id el usuario en esta funcion para asociar la actividad al usuario */
        echo $this->idUsuario;
    }
}




?>