<?php
try{
    //joaquin camps
$conexion = new PDO("mysql:host=localhost;dbname=pelis;charset=utf8", "root","");
$id= $_GET['id'];
$fech2=$_GET['fech2'];
$intr=$_GET['intr'];
$sentenciaUpdate="UPDATE pelis SET portada=?,annoEstreno=? where IdPeli=?";
$stmt=$conexion->prepare($sentenciaUpdate);
    $stmt->execute(array($intr,$fech2,$id));
    header("Location: indexJCM.php");
}
catch(PDOException $excp){

    die("Fallo en la conexion". $excp->getMessage());

   
}
?>