<?php
$cod = $_GET['cod'];
include("../modelo/cargoClase.php");
$car = new Cargo($cod, "", "");
$res = $car->listarCargoId();
include("../vista/cargoModifica.php");
if (isset($_GET['Modificar'])) {

    $c = $_GET['cargo'];
    $r = $car->editarCargo($c, $cod);
    if ($r) {
        echo "
<script>
alert('se modifico');
location.href='cargoLista.php';
</script>
";
    } else {
        echo "
        <script>
        alert('no se modifico');
        
        </script>
        ";
    }
}
?>