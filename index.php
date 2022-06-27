<?php
include('controlador/plantilla.controlador.php');
include('controlador/usuarios.controlador.php');

//modelos
include("modelo/usuariosmodelo.php");


$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
?>