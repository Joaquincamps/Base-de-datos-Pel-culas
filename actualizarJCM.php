<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="joaquin camps">

    <title>Document</title>
</head>
<body>
    <h1>Actualizacion de Datos de Película</h1>
    <?php
    try{
        //conexion
    $conexion = new PDO("mysql:host=localhost;dbname=pelis;charset=utf8", "root","");
    //$id= $_POST['id'];
    $sentenciaSelect="SELECT IdPeli,titulo,portada,annoEstreno,fechaPublicacion FROM pelis";
    $resultado = $conexion->query($sentenciaSelect);
    $fila = $resultado-> fetchObject();
    $id=$fila->IdPeli;
    $titulo=$fila->titulo;
    $portada=$fila->portada;
    $anno=$fila->annoEstreno;
    $fecha=$fila->fechaPublicacion;
    

        ?>
        <form action="actuJCM.php" method="get">
            <label for="tit">Titulo</label>
            <input type="text" name="tit" id="tit" readonly value=<?=$fila->titulo?>>
            <input type="hidden" name="id" id='id' value="<?=$fila->IdPeli?>">
            <br>
            <label for="fech">Fecha de actualizacion</label>
            <input type="text" name="fech" id="fech" readonly value=<?=$fila->fechaPublicacion?>>
            <br>
            <label for="fech2">Introduce Año de Estreno</label>
            <input type="text" name="fech2" id="fech2">
            <br>
            <label for="intr">Introduce Nombre Fichero de la Portada</label>
            <input type="text" name="intr" id="intr" placeholder="Por ejemplo: portada.jpg">
            <br>
            <button type="submit">Actualizar</button>
        </form>
        <?php
    }
    catch(PDOException $excp){
    
        die("Fallo en la conexion". $excp->getMessage());
    
       
    }
    ?>
    
</body>
</html>