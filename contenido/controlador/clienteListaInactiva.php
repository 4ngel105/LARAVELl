<?php
include("../modelo/clienteClase.php");
$cli = new Cliente("", "", "", ""); // Cambié Cliente a cliente
$res = $cli->listarClienteInactivo();
include("../vista/clienteListaInactiva.php");
?>