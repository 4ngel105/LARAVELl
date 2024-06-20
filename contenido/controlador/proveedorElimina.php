<?php
    $id_proveedor = $_GET['cod'];
    include("../modelo/proveedorClase.php");
    $prov = new Proveedor($id_proveedor, "", "", "", "", "", "");
    $res = $prov->eliProveedor($id_proveedor);
    if($res){
?>
        <script type="text/javascript">
            alert("Se eliminó correctamente");
            location.href='proveedorLista.php';
        </script>
<?php     
    } else {
?>
        <script type="text/javascript">
            alert("No se pudo eliminar");
        </script>
<?php 
    }
?>
