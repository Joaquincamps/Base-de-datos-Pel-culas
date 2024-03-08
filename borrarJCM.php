<?php
try{
        //joaquin camps

$conexion = new PDO("mysql:host=localhost;dbname=pelis;charset=utf8", "root","");
$id= $_POST['id'];
$sentenciaDelete="DELETE FROM pelis where IdPeli=?";
$stmt=$conexion->prepare($sentenciaDelete);
    $stmt->execute(array($id));
    header("Location: indexJCM.php");
}
catch(PDOException $excp){

    die("Fallo en la conexion". $excp->getMessage());

   
}
?>