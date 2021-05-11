<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="login-form">
            <h2>Calculo de material</h2>
            <br>
            <br>
            <form>
                <?php
                    include 'php/conexion.php'; 
                    $conexion=mysqli_connect($host,$user,$password,$db); 
                    $consulta="select Material, Producto, Cantidad from temporal order by ID desc";
                    $resultado=mysqli_query($conexion,$consulta); 
                    $datos=mysqli_fetch_row($resultado); //obtiene los datos obtenidos y los almacena en un array
                ?>
                <label for="Material">Material</label> 
                <input type="text"disabled value="<?php echo $datos[0]?>"> 
                <label for="Producto">Producto</label>
                <input type="text" disabled value="<?php echo $datos[1]?>">
                <label for="Cantidad">Cantidad</label>
                
                <?php
                    $datosC=$datos[2]; 
                        if($datosC>50) 
                        {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                Está usando demasiado material.
                            </div>
                            <?php
                        }
                        else
                        if($datosC>=20&&$datosC<=50)
                        {
                            ?>
                            <div class="alert alert-success" role="alert">
                                Está usando suficiente material
                            </div>
                            <?php
                        }
                        else
                        {
                            ?>
                            <div class="alert alert-warning" role="alert">
                            Está usando muy poco material.
                            </div>
                            <?php
                        }
                    mysqli_close($conexion);
                ?>               
            </form>
        </div>
    </div>
</body>
</html>