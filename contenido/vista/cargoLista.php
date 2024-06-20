<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../css/bootstrap.min.js"> </script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Juvenil</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/demo/demo.css" rel="stylesheet" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/16aa4a797c.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">

<div class="container">
        <div class="row justify-content-center"  >
        <div class="col-md-6">
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" class="bg-dark"  ><img src="../reportes/imagenes/laravel.png" alt=""  width="200px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="../controlador/clienteLista.php">CLIENTES <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="../controlador/empleadoLista.php">EMPLEADOS</a>
      <a class="nav-item nav-link" href="../controlador/cargoLista.php">CARGOS</a>
      <a class="nav-item nav-link" href="../controlador/proveedorLista.php">PROVESDORES</a>
      </nav>
</div>
  </div>
<div class="col-md-12"><br><br>
        
        <center>
            <h1>Lista de Cargos</h1>
        </center>
        <table  class="table table-striped-dark table-bordered table-hover   ">
            <thead class="bg-primary text-white">
                <tr align="center">
                    <th scope="col">ID CARGO</th>
                    <th scope="col">CARGOS</th>
                    <th scope="col" colspan="2">ACCIONES</th>
                </tr>
            </thead>
          <tbody align="center" class="bg-dark text-white">
          <?php
            while ($reg = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>" . $reg['id_cargo'] . "</td>";
                echo "<td>" . $reg['cargo'] . "</td>";

                echo "<td><a href='../controlador/clienteInactiva.php?cod=" . $reg['id_cargo'] . "' class='btn btn-danger'>  <i class='fa-solid fa-trash'></i></a></td>";
                echo "<td><a href='../controlador/cargoModifica.php?cod=" . $reg['id_cargo'] . "' class='btn btn-success'>   <i class='fa-regular fa-pen-to-square'></i></a></td>";
                echo "</tr>";
            }
            ?>
          </tbody>
         
        </table>
        <td><a href='../controlador/cargoRegistro.php' class="btn btn-success">Nuevo Cargo <i class="fa-solid fa-address-book"></i></a></td>
        <td><a href='../controlador/clienteBusqueda.php' class="btn btn-info">Buscar Cliente  <i class="fa-solid fa-magnifying-glass"></i></a></td>
        <td><a class="btn btn-danger" align="center" href="../reportes/reportecargo.php"><i class="fa-solid fa-file-pdf"></i</a></td>
        <td><a href='../index.php' class="btn btn-light">Salir <i class="fa-solid fa-right-from-bracket"></i></a></td>
    </div>
    <div class="col-md-2"></div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>