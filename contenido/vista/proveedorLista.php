<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Clientes</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../assets/demo/demo.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/16aa4a797c.js" crossorigin="anonymous"></script>
</head>

<body>
  
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <br><br>
            <center>
                <h1>LISTA DE PROVEEDORES</h1>
            </center>
            <br><br>
            <table class="table">
                <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">N°</th>
                        <th scope="col">EMPRESA</th>
                        <th scope="col">CONTACTO</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">LOGO</th>

                        <th scope="col" colspan="2">OPERACIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $c = 1;
                    while ($r = mysqli_fetch_array($r1)) {
                    ?>
                        <tr>
                            <td><?php echo $c ?></td>
                            <td><?php echo $r[1]; ?></td>
                            <td><?php echo $r[2]; ?></td>
                            <td><?php echo $r[3]; ?></td>
                            <td><?php echo $r[4]; ?></td>
                            <td><?php echo $r[5]; ?></td>
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
                        $c++;
                    } ?>
                </tbody>
            </table>
            <td><a href='../controlador/proveedorRegistro.php' class="btn btn-success">Nuevo Proveedor</a></td>
            <td><a href='../controlador/proveedorBusqueda.php' class="btn btn-info">Buscar Proveedor</a></td>
            <td><a class="btn btn-primary" align="center" href="../reportes/reporteproveedor.php">Reporte</a></td>
            <td><a href="../index.php" class="btn btn-dark">SALIR</a></td>

        </div>
        <div class="col-md-1"></div>
    </div>
</body>

</html>