<?php
require_once "conexion.php";

class Usuario
{
    // nuevo usuario
    function NuevoUsuario(){
      if(isset($_POST["nombre"]) && isset($_POST["telefono"]) && isset($_POST["correo"]) && isset($_POST["clave"]) && isset($_POST["confirmacion"])){
        if($_POST["clave"] == $_POST["confirmacion"]){
           
            $stmt = Conexion::conectar()->prepare("Insert into Usuario values (null,:nombre,:telefono,:correo,:clave);");
            $stmt -> bindParam(":nombre",$_POST["nombre"]);
            $stmt -> bindParam(":telefono",$_POST["telefono"]);
            $stmt -> bindParam(":correo",$_POST["correo"]);
            $stmt -> bindParam(":clave",$_POST["clave"]);
        if($stmt -> execute()){
            echo "<br>Usuario REGISTRADO exito!<br>";
        }else{
            echo "<br>Error<br>";
        }
            
        }else{
            echo "<br>las contraseña no Coinciden<br>";
        }
      } 
       
    }

    function Entrar(){
      if(isset($_POST["usuarioEntrar"]) && isset($_POST["claveEntrar"])){
        
            $stmt = Conexion::conectar()->prepare("select correo, clave from usuario where correo = :usuario and clave = :clave");
            $stmt -> bindParam(":usuario",$_POST["usuarioEntrar"]);
            $stmt -> bindParam(":clave",$_POST["claveEntrar"]);
            $stmt -> execute();
            $response = $stmt -> fetch();
            if($response){
                if($response["correo"] == $_POST["usuarioEntrar"] && $response["clave"] == $_POST["claveEntrar"]){
                    session_start();

                     $_SESSION["validar"] = 1;

                     header('location: intranet.php');
                }
            }else{
                echo "<br>Datos incorectos Verifique sus datos<br>";
            }

          
      }
    }
}



