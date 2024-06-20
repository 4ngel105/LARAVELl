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
    <title>PRODUCTO</title>
</head>
<body>
<h1>asda</h1>
  
 <div class="container">
 <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
 <?php
  $c = 1;
   while ($r = mysqli_fetch_array($productos)) {
         ?>
    <div class="col">
        <div class="card swadow-sm" >
        <img src="../controlador/imagenesproducto/<?php echo $r[8]; ?>" alt="" width="40px" height="35px">
            <div class="card-body">
                <h5 class="card-title"><?php echo $r[3]; ?></h5>
            
            <p class="card-text"><?php echo $r[4]; ?></p>

            </div>

        </div> 

    </div>


 </div>    

 </div>
 <?php
                        $c++;
                    } ?>
   
</body>
</html>