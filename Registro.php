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
$Nombre=utf8_decode($_POST['Nombre']);
$Apellido=utf8_decode($_POST['Apellido']);
$DNI=utf8_decode($_POST['DNI']);
$Domicilio=utf8_decode($_POST['Domicilio']);
$Poblacion=utf8_decode($_POST['Poblacion']);
$Provincia=utf8_decode($_POST['Provincia']);
$FechaNac=utf8_decode($_POST['FechaNac']);
$sqlR="INSERT INTO usuarios(Nombre, Apellidos, DNI, Domicilio, Poblacion, Provincia, FechaNacimiento) VALUES
       ('".$Nombre."', '".$Apellido."','".$DNI."', '".$Domicilio."', '".$Poblacion."', '".$Provincia."', '".$FechaNac."')";
if(mysqli_query($con,$sqlR)){
    ?>
    <script>
        alert("Registro Agregado Exitosamente");
</script>
<?php
}
?>
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