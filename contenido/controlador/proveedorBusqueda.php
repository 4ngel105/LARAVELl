<?php
// Incluir la vista para búsqueda de proveedores
include("../vista/proveedorBusqueda.php");

// Verificar si se realizó una búsqueda
if (isset($_GET['Buscar'])) {
    $empresa = $_GET['empresa']; // Obtener el término de búsqueda
    include("../modelo/proveedorClase.php");

    // Crear objeto Proveedor y buscar por empresa
    $prov = new Proveedor("", "", "", "", "", "", "");
    $res = $prov->buscarProveedor($empresa); // Método para buscar proveedores por empresa

    // Mostrar los resultados
    while ($r = mysqli_fetch_array($res)) {
        ?>
        <tr>
            <td><?php echo $r['empresa']; ?></td>
            <td><?php echo $r['contacto']; ?></td>
            <td><?php echo $r['mail']; ?></td>
            <td><?php echo $r['telefono']; ?></td>
            <td><?php echo $r['direccion']; ?></td>
            <td><img src="../controlador/imagenesproveedor/<?php echo $r[6]; ?>" alt="" width="40px" height="35px"></td>
            <td>
                                <a href="../controlador/proveedorModifica.php?cod=<?php echo $r[0]; ?>" class="btn btn-success">
                                    EDITAR
                                </a>
                            </td>
                            <td>
                                <a href="../controlador/proveedorElimina.php?cod=<?php echo $r[0]; ?>" class="btn btn-danger">
                                    ELIMINAR
                                </a>
                            </td>
        </tr>
        <?php
    }
}
?>
