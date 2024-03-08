<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="joaquin camps">
    <title>Document</title>
</head>
<body>
    <h1>Peliculas</h1>
    <form action="mostrarJCM.php" method="post">
    <?php   
      try{
        $conexion = new PDO("mysql:host=localhost;dbname=pelis;charset=utf8", "root","");
        $sentenciaSelect="SELECT titulo FROM pelis ORDER BY titulo asc";
        $resultado = $conexion->query($sentenciaSelect);
        echo "<h2>Numero de Peliculas actuales: ". $resultado->rowCount() . "</h2>";

        ?>
        <label for="cat">Selecciona una pelicula</label>
        <select name="cat" id="cat">
        <?php
        while ($fila = $resultado-> fetchObject()){ 
        ?>
        <option><?=$fila->titulo?></option>
        <?php
        }
    
        ?>
        </select>
        <button type="submit">Seleccionar</button>
        </form>
        <br>
        <br>
        <fieldset>
            <legend>Añadir pelicula</legend>
            <form action="altaJCM.php" method="post">
            <label for="tit">Titulo</label>
            <input type="text" name="tit" id="tit">
            <br>
            <button type="submit">Añadir</button>
            </form>
        </fieldset>
        <?php
    }catch(PDOException $excp){

        die("Fallo en la conexion". $excp->getMessage());

       
    }
    ?>
</body>
</html>