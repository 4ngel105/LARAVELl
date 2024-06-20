<?php
    include("../vista/clienteRegistro.php");
    if(isset($_POST['registraCliente'])){
        $ni=$_POST['nit'];
        $rs=$_POST['razon'];
        $es="Activo";
        include("../modelo/clienteClase.php");
        $cli=new Cliente("",$ni,$rs,$es);
        $r=$cli->grabarCliente();
        if($r){
            ?>
            <script type="text/javascript">
                alert("Se Registro correctamente");
                location.href='clienteLista.php';
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