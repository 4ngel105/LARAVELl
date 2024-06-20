<?php
    include("../vista/proveedorRegistro.php");
    
    if(isset($_POST['Registrar'])){
        $e=$_POST['emp'];
        $c=$_POST['con'];
        $em=$_POST['ema'];
        $t=$_POST['tel'];
        $d=$_POST['dir'];

        $im=$_FILES['log']['name'];
        $lo=$_FILES['log']['tmp_name'];
        include("../modelo/proveedorClase.php");

        $pro=new Proveedor("",$e,$c,$em,$t,$d,$im);
        $r=$pro->grabarProveedor();
        
        if ($r) {
            @copy($lo,'imagenesproveedor/'.$im);
            echo "<script>
                alert('Se Registro');
                location.href='proveedorLista.php';
            </script>";
        } else {
            echo "<script>
                alert('NO SE REGISTRO');
            </script>";
        }
    }
?>