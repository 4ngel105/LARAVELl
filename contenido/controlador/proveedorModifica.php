<?php
include("../modelo/proveedorClase.php");

// Obtener el ID del proveedor a modificar
$id_proveedor = $_GET['cod']; // Verifica si es el ID correcto

// Crear un objeto para obtener datos del proveedor
$prov = new Proveedor($id_proveedor, "", "", "", "", "", "");
$res = $prov->obtenerProveedorPorId(); // Método para obtener datos de un proveedor por ID

// Verificar si el formulario se envió para modificación
if (isset($_POST['Modificar'])) {
    $empresa = $_POST['empresa'];
    $contacto = $_POST['contacto'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $nombre_logo = $res['logo']; // Mantener el logo actual por defecto

    // Verificar si se subió un nuevo logo
    if (isset($_FILES['log']) && $_FILES['log']['error'] === UPLOAD_ERR_OK) {
        $nombre_logo = $_FILES['log']['name']; // Nombre del nuevo logo
        $ruta_logo = '../controlador/imagenesproveedor/' . $nombre_logo;

        // Mover el archivo subido a la carpeta correcta
        if (!move_uploaded_file($_FILES['log']['tmp_name'], $ruta_logo)) {
            echo "<script>alert('Error al subir el logo');</script>";
        }
    }

    // Modificar el proveedor con los datos y el nuevo logo
    $resultado = $prov->modificarProveedor($id_proveedor, $empresa, $contacto, $email, $telefono, $direccion, $nombre_logo);

    if ($resultado) {
        // Redireccionar si se modifica exitosamente
        echo "<script>
                alert('Proveedor modificado exitosamente');
                location.href='proveedorLista.php';
              </script>";
    } else {
        // Mostrar mensaje de error si falla la modificación
        echo "<script>
                alert('No se pudo modificar el proveedor');
              </script>";
    }
}

// Incluir la vista para mostrar el formulario con los datos existentes
include("../vista/proveedorModifica.php");
