<?php
include("../modelo/cargoClase.php");
$car=new Cargo("","");
$res=$car->listarCargo();
include("../vista/cargoLista.php");
?>