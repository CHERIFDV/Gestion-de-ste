

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
$req=$connection->prepare('SELECT * FROM esejoure where num=?');
$req->execute(array($_GET['num']));

$rqt=$connection->prepare('SELECT nbsejour FROM employes where num=?');
$rqt->execute(array($_GET['num']));
$sejourreston=$rqt->fetch();
echo "<h1>Etat de vacance :</h1>";
echo "N employée:".$_GET['num']." &nbsp;&nbsp;&nbsp; Nombre de sejour restant:".$sejourreston['nbsejour'];


$rqd=$connection->prepare('SELECT count(num) FROM esejoure where num=?');
$rqd->execute(array($_GET['num']));
$n=$rqd->fetch();
if($n['count(num)']<=0){ echo "<br>vide";}


echo "<ul>";
while ($donnes=$req->fetch()){

echo "<li>";
echo "le ".$donnes['datejour']." demende de sejour  ";
echo " qui starte le :".$donnes['datedebutsjour']."  et termine le: ".$donnes['datefinsjour']."      Nombre de jour :".$donnes['nbsejour'];


echo "</li>";
}
echo "</ul>";

echo "    <a href='etatpdf.php?num=".$_GET['num']."&p=v'> imprimer</a>"
?>
</body>
</html>