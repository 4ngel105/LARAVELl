<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modificar Clientes</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../assets/demo/demo.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-12"><br><br>
                <center><h1>MODIFICAR CLIENTE</h1></center>
                <?php
                    while($reg=mysqli_fetch_array($res)){
                ?>
                    <form method="get" action="clienteModifica.php">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input type="text" hidden name="cod" value="<?php echo $reg[0]; ?>">
                                <label>Razon Social</label>
                                <input type="text" name="razon" value="<?php echo $reg['razonSocial']; ?>" class="form-control">
                                <br><br>
                                <label>NIT CI</label>
                                <input type="text" name="nit" value="<?php echo $reg['nit_cli']; ?>" class="form-control">
                                <br><br>
                                <input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-success">
                                <a href="../controlador/clienteLista.php" class="btn btn-secondary">CANCELAR</a>
                            </div>
                        </div>
                    </form>
                <?php
                    }
                ?>
            
        </div>
    </div>
</body>
</html>