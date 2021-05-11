<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .ima{
            width: 75%;
            height: auto;
            flex: auto;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <div class="container-fluid">
            <div class="row">
                <img src="img/loading.gif" alt="loading" id="ima" class="ima"> 
            </div>
            <?php sleep(10); ?>
        </div>
    </div>
    <?php
        echo'<script language="javascript">
            window.location.href="calculo.php";
            </script>';
    ?>
</body>
</html>