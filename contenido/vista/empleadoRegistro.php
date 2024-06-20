<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>añadir Clientes</title>
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
            
            <form method="post">
                <center><h1>REGISTRO EMPLEADO</h1></center>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <label id="id_car">CARGO</label>
                        <select name="cargo" class="form-control">
                            <?php
                            while($reg=mysqli_fetch_array($res)){
                                var_dump($reg); // Mostrará el contenido de la variable $reg
                                // O bien, puedes mostrar solo el id_cargo y el cargo
                                echo "ID Cargo: " . $reg['id_cargo'] . " - Cargo: " . $reg['cargo'] . "<br>";
                                ?>
                                <option value="<?php echo $reg['id_cargo'];?>"><?php echo $reg['cargo']." "; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <div class="form-group">
                            <label for="cedula" id="cedula">CI:</label>
                            <input type="text" class="form-control" name="cedula" placeholder="Ingrese su cedula  de identidad" required>
                        </div>
                        <div class="form-group">
                            <label for="paterno" id="paterno">PATERNO:</label>
                            <input type="text" class="form-control" name="paterno" placeholder="Ingrese su apellido paterno" required>
                        </div>
                        <div class="form-group">
                            <label for="materno" id="materno">MATERNO:</label>
                            <input type="text" class="form-control" name="materno" placeholder="Ingrese su apellido materno" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre" id="nombre">NOMBRE:</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion" id="direccion">DIRECCION:</label>
                            <input type="text" class="form-control" name="direccion" placeholder="Ingrese su direccion" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono" id="telefono">TELEFONO:</label>
                            <input type="numeric" class="form-control" name="telefono" placeholder="Ingrese su telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha" id="fecha">FECHA DE NACIMIENTO:</label>
                            <input type="date" class="form-control" name="fecha" placeholder="Ingrese fecha de naciemiento" required>
                        </div>
                        <div class="form-group">
                            <label id="genero">GENERO:</label>&nbsp; &nbsp; &nbsp; &nbsp;
                            <input type="radio" name="genero" id="genero" value="F">Femenino &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="genero" id="genero" value="M">Masculino
                        </div>
                        <div class="form-group">
                            <label id="intereses">INTERESES:</label>
                            <input type="checkbox" id="intereses[]" name="intereses[]" value="Estudia">Estudia &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" id="intereses[]" name="intereses[]" value="Deporte">Deporte &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" id="intereses[]" name="intereses[]" value="Trabaja">Trabaja                            
                        </div>
                        
                        <input type="submit" name="registrarEmpleado" value="Registrar" class="btn btn-primary">
                        <a href="../controlador/empleadoLista.php" class="btn btn-danger">cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>