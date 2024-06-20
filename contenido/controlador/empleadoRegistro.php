<?php
    include("../modelo/cargoClase.php");
    $cargo=new Cargo("","");
    $res=$cargo->lista();
    include("../vista/empleadoRegistro.php");
    
    if(isset($_POST['registrarEmpleado'])){
        $id=$_POST['cargo'];
        $d1=$_POST['cedula'];
        $d2=$_POST['nombre'];
        $d3=$_POST['paterno'];
        $d4=$_POST['materno'];
        $d5=$_POST['direccion'];
        $d6=$_POST['telefono'];
        $d7=$_POST['fecha'];
        $d8=$_POST['genero'];
        $in=$_POST['intereses'];
        $int="";
        foreach($in as $i=>$valor){
            $int=$int.$in[$i]."  ";
        }
        include("../modelo/empleadoClase.php");
        $emp=new Empleado("","$id","$d1","$d2","$d3","$d4","$d5","$d6","$d7","$d8","$int");
        $r=$emp->grabarEmpleado();
        if($r){
            ?>
            <script type="text/javascript">
                alert("Se Registro");
                location.href='empleadoLista.php';
            </script>
            <?php
        }else{
            ?>
            <script type="text/javascript">
                alert("NO SE REGISTRO");               
            </script>
            <?php
        }
    }
?>