<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Empleado</title>
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
            <center><h1>MODIFICAR EMPLEADO</h1></center>
            <?php
                while($reg=mysqli_fetch_array($res)){
            ?>
                <form method="get" action="empleadoModifica.php">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input type="text" hidden name="id" value="<?php echo $reg['id_empleado']; ?>">
                            <input type="text" hidden name="cod" value="<?php echo $reg['id_empleado']; ?>">
                            <label>Cargo</label>
                        <select name="cargo" class="form-control">
                            <?php
                            while($reg2=mysqli_fetch_array($res2)){
                                ?>
                                <option value="<?php echo $reg2['id_cargo'];?>"><?php echo $reg2['cargo']." "; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                            <br><br>
                            <label>CI:</label>
                            <input type="text" name="cedula" value="<?php echo $reg['ci']; ?>" class="form-control" required>
                            <br><br>
                            <label>Nombre:</label>
                            <input type="text" name="nombre" value="<?php echo $reg['nombre']; ?>" class="form-control" required>
                            <br><br>
                            <label>Apellido Paterno:</label>
                            <input type="text" name="paterno" value="<?php echo $reg['paterno']; ?>" class="form-control" required>
                            <br><br>
                            <label>Apellido Materno:</label>
                            <input type="text" name="materno" value="<?php echo $reg['materno']; ?>" class="form-control" required>
                            <br><br>
                            <label>Dirección:</label>
                            <input type="text" name="direccion" value="<?php echo $reg['direccion']; ?>" class="form-control" required>
                            <br><br>
                            <label>Teléfono:</label>
                            <input type="text" name="telefono" value="<?php echo $reg['telefono']; ?>" class="form-control" required>
                            <br><br>
                            <label>Fecha de Nacimiento:</label>
                            <input type="date" name="fecha" value="<?php echo $reg['fechanacimiento']; ?>" class="form-control" required>
                            <br><br>
                            <label>Género:</label>
                            <select name="genero" class="form-control" required>
                                <option value="F" <?php if($reg['genero'] == 'F') echo 'selected'; ?>>Femenino</option>
                                <option value="M" <?php if($reg['genero'] == 'M') echo 'selected'; ?>>Masculino</option>
                            </select>
                            <br><br>
                            <label>Intereses:</label><br>
                            <input type="checkbox" name="intereses[]" value="Estudia" <?php if(strpos($reg['intereses'], 'Estudia') !== false) echo 'checked'; ?>> Estudia<br>
                            <input type="checkbox" name="intereses[]" value="Deporte" <?php if(strpos($reg['intereses'], 'Deporte') !== false) echo 'checked'; ?>> Deporte<br>
                            <input type="checkbox" name="intereses[]" value="Trabaja" <?php if(strpos($reg['intereses'], 'Trabaja') !== false) echo 'checked'; ?>> Trabaja<br>
                            <br><br>
                            <input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-success">
                            <a href="../controlador/empleadoLista.php" class="btn btn-secondary">CANCELAR</a>
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
