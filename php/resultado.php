<?php
include 'conexion.php';
$cant=$_POST["Kilos"]; 
$mat=$_POST["Material"]; 
$prod=$_POST["Producto"]; 

$conexion=mysqli_connect($host,$user,$password,$db); 
$consulta="insert into temporal (Material, Producto, Cantidad) values ('$mat','$prod','$cant');"; 
$resultado=mysqli_query($conexion,$consulta);

if($resultado==true) 
{
    echo '<script language="javascript">
			
			window.location.href="../loading.php";
			</script>';
}
else 
{
    echo 'Falló la conexión';
}
?>