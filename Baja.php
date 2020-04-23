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
<a href="TablaUsuarios.html" class="Regresar"> < Regresar</a>
<?php
$servidor= "localhost";
$usuario = "Pancho";
$password = "";
$bd= "biblioteca";
$con = mysqli_connect($servidor,$usuario,$password,$bd);
$Usuario=($_POST['NoUsuario']);
$sqlR="DELETE FROM usuarios WHERE CodigoUsuario='".$Usuario."'";
if(mysqli_query($con,$sqlR)){
    ?>
    <script>
        alert("Registro Eliminado Exitosamente");
</script>
<?php
}
?>
<br><br>
<center>
<div class="usuarios">
<table id="usuarios" border=1>
<h1>Usuarios</h1>
    <tr>
        <td>Usuario No.</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>DNI</td>
        <td>Domicilio</td>
        <td>Poblacion</td>
        <td>Provincia</td>
        <td>Fecha De Nacimiento</td>
    </tr>
<?php
$sqlI = "SELECT * FROM usuarios";
$resulta = mysqli_query($con,$sqlI);
while ($mostrar = mysqli_fetch_assoc($resulta)) {
    ?>
    <tr>
    <td><?php echo $mostrar['CodigoUsuario']?></td>
    <td><?php echo $mostrar['Nombre']?></td>
    <td><?php echo $mostrar['Apellidos']?></td>
    <td><?php echo $mostrar['DNI']?></td>
    <td><?php echo $mostrar['Domicilio']?></td>
    <td><?php echo $mostrar['Poblacion']?></td>
    <td><?php echo $mostrar['Provincia']?></td>
    <td><?php echo $mostrar['FechaNacimiento']?></td>
    </tr>
    <?php
}
?>
</table>

</div>
</center>