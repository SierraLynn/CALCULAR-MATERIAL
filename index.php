<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="login-form">
            <h2>Calculo de material</h2>
            <br>
            <br>
            <form action="php/resultado.php" method="post">
                <label for="Material">Material</label>
                <select name="Material" id="Material" required>
                    <?php
                    include 'php/conexion.php';
                    $conexion=mysqli_connect($host,$user,$password,$db);
                    $consulta="select Materiales from material"; 
                    $resultado=mysqli_query($conexion,$consulta); 
                        while($datos=mysqli_fetch_row($resultado)) 
                        {
                    ?>
                        <option value="<?php echo $datos[0]?>"><?php echo $datos[0]?></option>                      
                    <?php
                        }
                    ?>
                    <?php
                    mysqli_close($conexion);
                    ?>
                </select>
                <br>
                <br>
                <br>
                <label for="Producto">Producto</label>
                <select name="Producto" id="Producto" required>
                    <?php
                    include 'php/conexion.php';
                    $conexion=mysqli_connect($host,$user,$password,$db);
                    $consulta="select NOMBRE from productos";
                    $resultado=mysqli_query($conexion,$consulta);
                        while($datos=mysqli_fetch_row($resultado)) 
                        {
                    ?>
                        <option value="<?php echo $datos[0]?>"><?php echo $datos[0]?></option>
                    <?php
                        }
                    ?>
                    <?php
                    mysqli_close($conexion); 
                    ?>
                </select>
                <br>
                <br>
                <br>
                <label >Kilos</label>
                <input name="Kilos" type="text" placeholder="Escribe aqui la cantidad">
                <br>
                <input type="submit" value="Enter">
            </form>
        </div>
    </body>
</html>