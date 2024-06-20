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
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../assets/demo/demo.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-12"><br><br>
        <center><h1>CLIENTE</h1></center>
        <form method="get">
            <label>RAZON SOCIAL: </label>
            <input style=" vertical-aling:middle;" type="text" name="razon">
            <input style="whith: 200px;float:right; vertical-aling:middle;" type="submit" value="Buscar Cliente" name="Buscar" class="btn btn-primary"><br>
            <table class="table">
                <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">NIT</th>
                        <th scope="col">RAZON SOCIAL</th>
                        <th scope="col" colspan="2" style="width: 10px;">OPERACIONES</th>
                    </tr>
</body>