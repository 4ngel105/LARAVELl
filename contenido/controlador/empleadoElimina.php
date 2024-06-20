<?php
    $id_empleado = $_GET['cod'];
    include("../modelo/empleadoClase.php");
    $emp = new Empleado($id_empleado, "", "", "", "", "", "", "", "", "", "");
    $res = $emp->eliEmpleado($id_empleado);
    if($res){
?>
        <script type="text/javascript">
            alert("Se eliminó correctamente");
            location.href='empleadoLista.php';
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
