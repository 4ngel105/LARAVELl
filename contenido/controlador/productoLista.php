<?php
include("../modelo/productoClase.php");
$r1 = new Producto("","","","","","","","","");
$productos = $r1->listarProducto();
include("../vista/productoLista.php");
?>