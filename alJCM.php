<?php
try{
        //joaquin camps

        $conexion = new PDO("mysql:host=localhost;dbname=pelis;charset=utf8", "root","");
        $tit=$_POST['tit'];
        $port= $_POST['port'];
        $anno=$_POST['anno'];
        $sentenciaInsert="INSERT INTO pelis (titulo,portada,annoEstreno,fechaPublicacion) VALUES (?,?,?,current_timestamp())";
        $stmt=$conexion->prepare($sentenciaInsert);
            $stmt->execute(array($tit,$port,$anno));
            echo "<script>alert('Pelicula Insertada')</script>";
            ?>
            <form action="indexJCM.php" method="post">
                <button type="submit">Ir a pagina principal</button>
            </form>
            <?php
    }
    catch(PDOException $excp){

        die("Fallo en la conexion". $excp->getMessage());

       
    }
?>