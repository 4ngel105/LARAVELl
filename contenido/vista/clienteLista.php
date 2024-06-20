<!DOCTYPE html>
<html lang="es">
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
 
      </nav>
  </div>

        </div>

        <div class="col-md-12"><br><br>
            <center><h1 class="text-white">LISTA DE CLIENTES</h1></center> <a href="../controlador/clienteListaInactiva.php" class="btn btn-secondary">LISTA DE CLIENTES INACTIVOS</a>
            <table class="table table-striped-dark table-bordered table-hover   ">
                <thead class="bg-primary text-white">
                    <tr align="center">
                        <th style="width: 100px;">ID</th>
                        <th>NIT/CI</th>
                        <th>RAZON SOCIAL</th>
                        <th>INACTIVAR</th>
                        <th>MODIFICAR</th>
                    </tr>
                </thead>
               <tbody align="center" class="bg-dark text-white" >
               <?php
                    
                    while ($reg = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td style='text-align: center;'>" . $reg['id_cliente'] . "</td>";
                        echo "<td> <center>" . $reg['nit_cli'] . "</center></td>";
                        echo "<td> <center>" . $reg['razonSocial'] . "</center></td>";
                        echo "<td style='text-align: center;'><a href='../controlador/clienteInactiva.php?cod=" . $reg['id_cliente'] . "' class='btn btn-danger'><i class='fa-solid fa-user-slash'></i></a></td>";
                        
                        echo "<td style='text-align: center;'><a href='../controlador/clienteModifica.php?cod=" . $reg['id_cliente'] . "' class='btn btn-success'><i class='fa-solid fa-pen-to-square'></i></a></td>";
                  
                        echo "</tr>";
                    }
                ?>
               </tbody>
      
            </table>
            <td><a href='../controlador/clienteRegistroCo.php'class="btn btn-success">Nuevo Cliente <i class="fa-solid fa-user"></i></a></td>
            <td><a href='../controlador/clienteBusqueda.php'class="btn btn-info">BUSCAR <i class="fa-solid fa-magnifying-glass"></i></a></td>
            <td><a class="btn btn-danger" aling="center" href="../reportes/reportecliente.php"><i class="fa-solid fa-file-pdf"></i></a></td>
            <td><a href="../index.php" class="btn btn-light">SALIR  <i class="fa-solid fa-right-from-bracket"></i></a></td>
                    
        </div>
    </div>
    </div>
    </div>
</body>
</html>