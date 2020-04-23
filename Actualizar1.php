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
    <a href="TablaLibros.html" class="Regresar"> < Regresar</a>
<?php
$servidor= "127.0.0.1";
$usuario = "Pancho";
$password = "";
$bd= "biblioteca";
$con = mysqli_connect($servidor,$usuario,$password,$bd);
$NoLibro=($_POST['NoLibro']);
$NombreLibro=utf8_decode($_POST['NombreLibro']);
$Editorial=utf8_decode($_POST['Editorial']);
$Autor=utf8_decode($_POST['Autor']);
$Genero=utf8_decode($_POST['Genero']);
$PaisAutor=utf8_decode($_POST['PaisAutor']);
$NumPaginas=($_POST['NumPaginas']);
$AnioEdicion=utf8_decode($_POST['AnioEdicion']);
$Precio=($_POST['Precio']);
$sqlR="UPDATE libros SET NombreLibro='".$NombreLibro."', Editorial='".$Editorial."', Autor='".$Autor."',  Genero='".$Genero."', PaisAutor='".$PaisAutor."', NumPaginas='".$NumPaginas."', AnioEdicion='".$AnioEdicion."', Precio='".$Precio."' Where CodigoLibro='".$NoLibro."'";
if(mysqli_query($con,$sqlR)){
    ?>
    <script>
        alert("Registro Actualizado Exitosamente");
</script>
<?php
}
?>
<center>
<div class="libros">
<table border=1>
<h1>Libros</h1>
    <tr>
        <td>Libro No</td>
        <td>Nombre Del Libro</td>
        <td>Editorial</td>
        <td>Autor</td>
        <td>Genero</td>
        <td>Pais</td>
        <td>Numero De Paginas</td>
        <td>Año De Edicion</td>
        <td>Precio</td>
    </tr>
<?php
$sql = "SELECT * FROM libros";
$resulta = mysqli_query($con,$sql);
while ($mostrar = mysqli_fetch_assoc($resulta)) {
    ?>
    <tr>
    <td><?php echo $mostrar['CodigoLibro']?></td>
    <td><?php echo $mostrar['NombreLibro']?></td>
    <td><?php echo $mostrar['Editorial']?></td>
    <td><?php echo $mostrar['Autor']?></td>
    <td><?php echo $mostrar['Genero']?></td>
    <td><?php echo $mostrar['PaisAutor']?></td>
    <td><?php echo $mostrar['NumPaginas']?></td>
    <td><?php echo $mostrar['AnioEdicion']?></td>
    <td><?php echo $mostrar['Precio']?></td>
    </tr>
    <?php
}
?>
</table>
</div>
</center>
