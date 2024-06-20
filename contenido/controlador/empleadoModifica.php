<?php
    include("../modelo/cargoClase.php");
    $cargo2=new Cargo("","");
    $res2=$cargo2->lista();

    $id_empleado = $_GET['cod'];
    include("../modelo/empleadoClase.php");
    $emp = new Empleado($id_empleado, "", "", "", "", "", "", "", "", "", "");
    $res = $emp->listaEmpleadoId();
    include("../vista/empleadoModifica.php");
    if(isset($_GET['Modificar'])){
        $id_cargo = $_GET['cargo'];
        $ci = $_GET['cedula'];
        $nombre = $_GET['nombre'];
        $paterno = $_GET['paterno'];
        $materno = $_GET['materno'];
        $direccion = $_GET['direccion'];
        $telefono = $_GET['telefono'];
        $fecha_nacimiento = $_GET['fecha'];
        $genero = $_GET['genero'];
        $intereses =$_GET['intereses'];
        $int="";
        foreach($intereses as $i=>$valor){
            $int=$int.$intereses[$i]."  ";
        }
        // Ejecutar el método para editar el empleado
        $r = $emp->editarEmpleado($id_empleado, $id_cargo, $ci, $nombre, $paterno, $materno, $direccion, $telefono, $fecha_nacimiento, $genero, $intereses);
        
        // Verificar si la edición fue exitosa
        if($r){
            // Redireccionar a la lista de empleados si la edición fue exitosa
            echo "<script>alert('Se modificó Exitosamente');
                location.href='empleadoLista.php';
                </script>";
        } else {
            // Mostrar un mensaje de error si la edición falló
            echo "<script>alert('NO se pudo modificar');</script>";
        }
    }
?>