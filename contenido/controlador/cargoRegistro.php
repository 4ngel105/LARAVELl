<?php
    include("../vista/cargoRegistro.php");
    if(isset($_POST['registraCargo'])){
        $nombreCargo = $_POST['cargo'];
        include("../modelo/cargoClase.php");
        $cargo = new Cargo("", $nombreCargo);
        $registroExitoso = $cargo->grabarCargo();
        if($registroExitoso){
            ?>
            <script type="text/javascript">
                alert("Se registró el cargo correctamente");
                location.href='cargoLista.php';
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert("No se pudo registrar el cargo");               
            </script>
            <?php
        }
    }
?>
