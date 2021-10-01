


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
$req=$connection->prepare('SELECT * FROM employes where num=?');
$req->execute(array($_GET['num']));
$donnes=$req->fetch();

$req=$connection->prepare('SELECT * FROM images where num=?');
$req->execute(array($_GET['num']));
$image=$req->fetch();
echo "<div style='position: absolute; left:60px ; top: ;'>";
echo "<h1> Information personnel:</h1>";
echo "<img width='450px' height='330px' style='position: absolute ;left:600px ; top:100px ;'src='images/".$image['image']."'alt=''><br>";

echo "N Employée : ".$donnes['num']."<br><br>";
echo "Passeport: ".$donnes['passeport']."<br><br>";
echo "CIN:  ".$donnes['cin']."<br><br>";
echo "Nom et Prenom: ".$donnes['firstname']."   ".$donnes['lastname']."<br><br>";
echo "lieu d'oregine:  ".$donnes['lieu']." date :".$donnes['naissanced']."<br><br>";
if ($donnes['sexe']=='f'){$sexe="Féminin";}else{$sexe="Masculin";}
echo "Sexe: ".$sexe."     &ensp;&ensp;&ensp;&ensp;&ensp;          TEL:".$donnes['tel']."  &ensp;&ensp;&ensp;&ensp;&ensp; EMAIL:".$donnes['email']."<br><br>";
echo "Nationalite:   ".$donnes['nationalite']."<br><br>";
echo "Situation Familial: ".$donnes['situationf']."<br><br>";

echo "Compte Bancaire: ".$donnes['nbancaire']."<br><br>";
echo" <br>Date de début au dernier rang: ".$donnes['Datdrang'];
echo "<br><br>spécialité: ".$donnes['specialite'];
echo "<br><br>Recrutement:".$donnes['Recrutement'] ;
echo "<br><br>Genre:". $donnes['genre'];
echo "<br><br>Grade:".$donnes['grade']."     &ensp;&ensp;&ensp;&ensp;&ensp;      Departement:".$donnes['dapartement']."<br><br>";
echo "Nombre de vacance reste:".$donnes['nbsejour']."      &ensp;&ensp;&ensp;&ensp;&ensp;        salaire par heure:".$donnes['salaryh']."<br><br>";

echo "</div>"






?>

</body>
</html>