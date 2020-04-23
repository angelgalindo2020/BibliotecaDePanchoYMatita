<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaseDatosBiblioteca</title>
    <link rel="stylesheet" href="CSS/estiloPHP.css">
    <style type="text/css">
  .Regresar{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
  .Regresar{
    color: #1883ba;
    background-color: #ffffff;
  }
</style>
</head>
<body>
    <a href="TablaPrestamos.html" class="Regresar"> < Regresar</a>
<?php
$servidor= "localhost";
$usuario = "Pancho";
$password = "";
$bd= "biblioteca";
$con = mysqli_connect($servidor,$usuario,$password,$bd);
$NumPrestamos=($_POST['NumPedido']);
$CodigoLibro=($_POST['CodigoLibro']);
$CodigoUsuario=($_POST['CodigoUsuario']);
$FechaSalida=utf8_decode($_POST['FechaSalida']);
$FechaMax=utf8_decode($_POST['FechaMax']);
$FechaDevolucion=utf8_decode($_POST['FechaDevolucion']);
$sqlR="UPDATE prestamos SET CodigoLibro='".$CodigoLibro."', CodigoUsuario='".$CodigoUsuario."', FechaSalida='".$FechaSalida."',  FechaMax='".$FechaMax."', FechaDevolucion='".$FechaDevolucion."' Where NumPedido='".$NumPrestamos."'";
if(mysqli_query($con,$sqlR)){
    ?>
    <script>
        alert("Registro Actualizado Exitosamente");
</script>
<?php
}
?>
<center>
<div class="prestamos">
<table border=1>
<h1>Prestamos</h1>
    <tr>
        <td>Pedido No.</td>
        <td>Libro No.</td>
        <td>Usuario No.</td>
        <td>Fecha De Salida</td>
        <td>Fecha Maxima Para Devolver</td>
        <td>Fecha De Devolucion</td>
    </tr>
<?php
$sql = "SELECT * FROM prestamos";
$resulta = mysqli_query($con,$sql);
while ($mostrar = mysqli_fetch_assoc($resulta)) {
    ?>
    <tr>
    <td><?php echo $mostrar['NumPedido']?></td>
    <td><?php echo $mostrar['CodigoLibro']?></td>
    <td><?php echo $mostrar['CodigoUsuario']?></td>
    <td><?php echo $mostrar['FechaSalida']?></td>
    <td><?php echo $mostrar['FechaMax']?></td>
    <td><?php echo $mostrar['FechaDevolucion']?></td>
    </tr>
    <?php
}
?>
</table>
</div>
</center>