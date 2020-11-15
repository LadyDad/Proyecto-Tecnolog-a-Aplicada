<?php

class Conexion{
   
    public static function conectar(){
       $host = "localhost";
       $usuario = "root";
       $clave = "";
       $database = "db_hotel";
       $conn = new PDO("mysql:host={$host};dbname={$database}",$usuario,$clave);
       if($conn){
        return $conn;
       }else{
         echo "Error al conectar a la base de datos";
       }
       
    }
}