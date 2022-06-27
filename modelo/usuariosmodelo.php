<?php
    require_once("conexion.php");
    class mdlUsuarios{

        static public function mdlMostrarUsuarios($tabla){
            $stmt = Conexion::conectar()->prepare("SELECT * from $tabla");
            $stmt->execute();

            return $stmt->fetchAll();

            $stmt->close();

            $stmt = null;
        }
    }
?>