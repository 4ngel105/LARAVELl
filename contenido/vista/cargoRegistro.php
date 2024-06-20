<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registrar Nuevo Cargo</title>
</head>
<body>
    <h2>Registrar Nuevo Cargo</h2>
    <form action="../controlador/cargoRegistro.php" method="post">
        <label for="cargo">Cargo:</label>
        <input type="text" id="cargo" name="cargo" required>
        <br><br>
        <input type="submit" name="registraCargo" value="Registrar" class="btn btn-primary">
        <a href="../controlador/cargoLista.php" class="btn btn-danger">cancelar</a>
    </form>
</body>
</html>