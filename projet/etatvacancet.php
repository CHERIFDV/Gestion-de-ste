<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<?php
require_once('verifsession.php');
$connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');

echo "<h1>Etat de vacances :</h1>";
$rqt=$connection->prepare('SELECT * FROM employes  ');
$rqt->execute(array());
 
  
echo "<ul>";
while ($donnes=$rqt->fetch()){
  
    
    echo "N employée: ".$donnes['num']." &nbsp;&nbsp;&nbsp; Nombre de sejour restant:".$donnes['nbsejour']."<br>";



echo "</li>";









}
echo "</ul>";


?>
<a href="etatpdf.php?p=vg"> Imprimer</a>
</body>
</html>