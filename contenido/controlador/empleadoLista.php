<?php
include("../modelo/empleadoClase.php");
$emp = new Empleado("","","","","","","","","","","");
$r1=$emp->lista();
include("../vista/empleadoLista.php");
?>