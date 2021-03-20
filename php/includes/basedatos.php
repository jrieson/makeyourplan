<?php


class BD{

    private $host;
    private $usuario;
    private $password; 
    private $baseDatos;
    private $charset;


    //Asignamos valores a las variables

    public function __construct(){
        //this hace referencia al contexto de la clase BD
        $this->host = 'localhost';
        $this->baseDatos = 'makeyourplan';
        $this->usuario = 'root';
        $this->password = '';
        $this->charset = 'utf8';
    }

    public function conectarBD(){
        try {
            $conexion = "mysql:host=" . $this->host. ";dbname=" . $this->baseDatos . ";charset=" .$this->charset;

            //Para obtener los errores
            $opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];

            $bd = new PDO($conexion, $this->usuario, $this->password, $opciones);
            

            return $bd;
            echo "Connected successfully"; 

        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }   

}



?>