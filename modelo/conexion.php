<?php
    class Conexion{
         
        static public function conectar(){
            $link = new pdo("mysql:host=localhost;dbname=managerusuarios","root","");
            $link->exec("set names utf8mb4");

            return $link;

        }
    }
?>