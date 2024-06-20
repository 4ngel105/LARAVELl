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

<body>
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-12"><br><br>
            <div class="card">
                <form role="form" method="post" enctype="multipart/form-data">
                    <center><h1>Modificar Proveedor</h1></center>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <label> Empresa</label>
                                <input type="text" class="form-control" name="empresa" value="<?php echo $res['empresa']; ?>">
                                <br>
                                <label> Contacto</label>
                                <input type="text" class="form-control" name="contacto" value="<?php echo $res['contacto']; ?>">
                                <br>
                                <label> Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $res['mail']; ?>">
                                <br>
                                <label> Teléfono</label>
                                <input type="text" class="form-control" name="telefono" value="<?php echo $res['telefono']; ?>">
                                <br>
                                <label> Dirección</label>
                                <input type="text" class="form-control" name="direccion" value="<?php echo $res['direccion']; ?>">
                                <br>
                                <label> Logo</label>
                                <input type="file" class="form-control" name="log">
                                <br><br>
                                <input type="submit" name="Modificar" value="Modificar" class="btn btn-primary">
                                <a href="../controlador/proveedorLista.php" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
