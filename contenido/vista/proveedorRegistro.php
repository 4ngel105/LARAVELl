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
                    <center>
                        <h1>REGISTRO PROVEEDOR</h1>
                    </center>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <label> Empresa</label>
                                <input type="text" class="form-control" name="emp">
                                <br>
                                <label> Contacto</label>
                                <input type="text" class="form-control" name="con">
                                <br>
                                <label> Email</label>
                                <input type="email" class="form-control" name="ema">
                                <br>
                                <label> telefono</label>
                                <input type="numeric" class="form-control" name="tel">
                                <br>
                                <label>dieccion</label><br>
                                <input type="text" class="from-control" name="dir">
                                <br><br>
                                <label> Logo</label>
                                <input type="file" class="form-control" name="log" value="examinar">
                                <br><br>
                                <input type="submit" name="Registrar" value="Registrar" class="btn btn-primary">
                                <a href="../controlador/proveedorLista.php" class="btn btn-danger">cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>