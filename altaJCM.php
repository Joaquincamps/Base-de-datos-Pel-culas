<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="joaquin camps">
    <title>Document</title>
</head>
<body>
    <?php
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=pelis;charset=utf8", "root","");
        $tit=$_POST['tit'];
        $sentenciaSelect="SELECT * FROM pelis WHERE titulo='$tit'";
        $resultado = $conexion->query($sentenciaSelect);
        if ($resultado ->rowCount() == 0){
            ?>
            <h1>Nueva</h1>
            <form action="alJCM.php" method="post">
                <label for="port">Introduce Nombre Fichero de la Portada</label>
                <input type="hidden" name="tit" id="tit" value=<?=$tit?>>
                <input type="text" name="port" id="port" placeholder="Por ejemplo: portada1.jpg">
                <br>
                <label for="anno">Introduce el año de estreno</label>
                <input type="text" name="anno" id="anno">
                <br>
                <button type="submit">Insertar</button>
            </form>
        <?php
        }else{
            echo "Titulo existente";
        }
    }catch(PDOException $excp){

        die("Fallo en la conexion". $excp->getMessage()); 
    }
    ?>
   
</body>
</html>