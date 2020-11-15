<?php
 require_once "conexion.php";

if(isset($_POST["id"])){
    $stmt = Conexion::conectar()->prepare("delete from checkin where id = :id;");
    $stmt->bindParam(":id",$_POST["id"]);
    if($stmt -> execute()){
        header("location: ../views/intranet.php");
    }else{
        echo "<br>Error<br>";
    }
    
}