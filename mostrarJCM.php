<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="joaquin camps">
    <title>Document</title>
</head>
<body>
    <h1>Detalle de Pelicula</h1>
    <?php
    try{
    $conexion = new PDO("mysql:host=localhost;dbname=pelis;charset=utf8", "root","");
    $cat=$_POST['cat'];
    $sentenciaSelect="SELECT IdPeli,titulo,portada,annoEstreno,fechaPublicacion FROM pelis where titulo='$cat'";
    $resultado = $conexion->query($sentenciaSelect);
    $fila = $resultado-> fetchObject();
    $id=$fila->IdPeli;
    $titulo=$fila->titulo;
    $portada=$fila->portada;
    $anno=$fila->annoEstreno;
    $fecha=$fila->fechaPublicacion;
    ?>
    <h1>Codigo:<?=$id?></h1>
    <h1><?=$titulo?></h1>
    <h1>Año de estreno<?=$anno?></h1>
    <?php
    #echo "<img src='img/".$portada. "' alt='no carga'>";
    echo "<a href='actualizarJCM.php?id=".$fila->IdPeli."'><img src='img/".$portada."' alt='no carga'></a>"
    ?>
        <h1><?=$fecha?></h1>
        <form action="borrarJCM.php" method="post" onclick="return confirm('¿Desea borrar?')">
        <input type="hidden" name="id" id="id" value=<?=$id?>>
        <button type="submit">Borrar</button>
        </form>
       
    <?php
    }catch(PDOException $excp){

        die("Fallo en la conexion". $excp->getMessage());

       
    }
    ?>
</body>
</html>