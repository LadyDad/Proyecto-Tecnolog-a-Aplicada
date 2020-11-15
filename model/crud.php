<?php
 require_once "conexion.php";
class Crud
{
    // listar habitaciones en el select de html
    function listarHabitaciones(){
            $stmt = Conexion::conectar()->prepare("select numero,tipo, precio from habitaciones;");
            $stmt -> execute();
            $response = $stmt->fetchAll();
      if($response){
         foreach($response as $row => $item){
            echo '<option value='.$item['numero'].'>'.$item['tipo'].' - '.$item['precio'].'</option>';
           }
      }else{
        echo '<option value="">No hay habitacion disponible</option>';
      }
    }

    // guardar habitaciones
    function guardarHabitaciones(){
        if(isset($_POST["numero"]) && isset($_POST["tipohabitacion"]) && isset($_POST["piso"]) && isset($_POST["precio"])){
                $stmt = Conexion::conectar()->prepare("Insert into Habitaciones values (:numero,:tipo,:piso,:precio);");
                $stmt -> bindParam(":numero",$_POST["numero"]);
                $stmt -> bindParam(":tipo",$_POST["tipohabitacion"]);
                $stmt -> bindParam(":piso",$_POST["piso"]);
                $stmt -> bindParam(":precio",$_POST["precio"]);
            if($stmt -> execute()){
                echo "<br><br>Habitación REGISTRADO exito!<br>";
            }else{
                echo "<br>Error<br>";
            }

          }
    }

    //guardar checkin
    function guardarCheckin(){
        if(isset($_POST["id_habitacion"]) && isset($_POST["dias"])){
            $stmt = Conexion::conectar()->prepare("Insert into checkin values (null,:habitacion,:dias,1);");
            $stmt -> bindParam(":habitacion",$_POST["id_habitacion"]);
            $stmt -> bindParam(":dias",$_POST["dias"]);
        if($stmt -> execute()){
            echo "<br><br>Checkin REGISTRADO exito!<br>";
        }else{
            echo "<br>Error<br>";
        }

      }
    }

    //listar checkin en tabla html
    function listarCheckin(){
        $stmt = Conexion::conectar()->prepare("select id, h.tipo, h.precio, c.tiempo_estancia, (h.precio * c.tiempo_estancia) as total from checkin c, Habitaciones h where estado = 1 and c.habitacion = h.numero;");
        $stmt -> execute();
        $response = $stmt->fetchAll();
      if($response){
         foreach($response as $row => $item){
            echo '<tr>
                  <td>'.$item['id'].'</td>
                  <td>'.$item['tipo'].'</td>
                  <td>'.$item['precio'].'</td>
                  <td>'.$item['tiempo_estancia'].'</td>
                  <td>'.$item['total'].'</td>
                  <td>
                  <form action="../model/eliminar.php" method="post">
                     <input type="numbre" name ="id" value="'.$item['id'].'" style="display:none">
                    <button class="btn_checkin">eliminar</button>
                  </form>
                  </td>
                  <td>
                  <form action="actualizar.php" method="post">
                     <input type="numbre"  name ="id" value="'.$item['id'].'" style="display:none">
                    <button class="btn_checkin">Actualizar</button>
                  </form>
                  </td>
                  </tr>';
           }
      }else{
        echo '<tr><td>No hay datos disponibles</td></tr>';
      }

       
    }

    //actualizar el checkin
    function actualizar(){
        if(isset($_POST["id_actualizar"]) && isset($_POST["id_habitacion"]) && isset($_POST["dias"])){
            $stmt = Conexion::conectar()->prepare("Update checkin set habitacion = :habitacion, tiempo_estancia = :dias where id = :id");
            $stmt -> bindParam(":habitacion",$_POST["id_habitacion"]);
            $stmt -> bindParam(":dias",$_POST["dias"]);
            $stmt -> bindParam(":id",$_POST["id_actualizar"]);
        if($stmt -> execute()){
            header("location: intranet.php");
        }else{
            echo "<br>Error<br>";
        }

      }
    }


}