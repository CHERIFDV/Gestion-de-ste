

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
$req=$connection->prepare('SELECT * FROM gestionpointage where num=?');
$req->execute(array($_GET['num']));

$reqt=$connection->query('SELECT * FROM options where num=1');
$options=$reqt->fetch();

echo "<h1>Etat de pointage:</h1>";
echo "N employée:".$_GET['num'];

$rqd=$connection->prepare('SELECT count(num) FROM gestionpointage where num=?');
$rqd->execute(array($_GET['num']));
$n=$rqd->fetch();
if($n['count(num)']<=0){ echo "<br>vide";}


while ($donnes=$req->fetch()){
    if($donnes['num']!=$_GET['num']){ echo "<br>not existe cette employée";}
echo "<ul><li>";
echo "le ".$donnes['datejour']."    entre: ".$donnes['entre']."   sortir: ".$donnes['sorti'];
echo "</li></ul>";

}
echo "     <a href='etatpdf.php?num=".$_GET['num']."&p=p'> imprimer</a>"
?>

</body>
</html>
