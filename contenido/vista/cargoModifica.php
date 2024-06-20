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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
   <div class="container ">
<div class="col-md-1"></div>
<div class="col-md-8">
<h1>MODIFICAR CARGO</h1>
<?php
while ($reg=mysqli_fetch_array($res)){
?>
<form method="GET" action="cargoModifica.php">
<input type="text" hidden name="cod" 
value="<?php echo $reg[0];?>">  
<label> CARGO</label>
<input type="text" name="cargo" value="<?php 
echo $reg['cargo'];?>"
class="form-control">
<br><br>

<input type ="submit" name="Modificar" id="Modificar" value="Modificar" 
class="btn btn-success"><a href="../controlador/cargoLista.php" class="btn btn-secondary">cancelar</a>
</form>
<?php
}
?>

</body>

</html>