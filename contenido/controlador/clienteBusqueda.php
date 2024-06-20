<?php
    include("../vista/clienteBusqueda.php");
    if(isset($_GET['Buscar'])){
        $rs=$_GET['razon'];
        include("../modelo/clienteClase.php");
        $cli=new Cliente("","","","");
        $res=$cli->buscarCliente($rs);
        while($r=mysqli_fetch_array($res)){
            ?>
        <tr>
            <td><?php echo $r['nit_cli'];?></td>
            <td><?php echo $r['razonSocial'];?></td>
            <td><a href='clienteModifica.php?cod=<?php echo $r[0]; ?>' class="btn btn-success"><i class="glyphicon glyphicon-edit">ACTUALIZAR</i></a></td>
            <td><a href='clienteInactiva.php?cod=<?php echo $r[0]; ?>' class="btn btn-danger"><i class="glyphicon glyphicon-trash">INACTIVAR</i></a></td>
        </tr>
        <?php
        }
    }
?>