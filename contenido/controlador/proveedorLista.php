<?php
include("../modelo/proveedorClase.php");
$prov = new Proveedor("","","","","","","");
$r1=$prov->listarProveedor();
include("../vista/proveedorLista.php");
?>