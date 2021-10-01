<?php

?>

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
     echo"<div style='position: absolute ; left: 1400px;'><form action='listeemployes.php' method='post'>";
     
     echo "<input type='text' name='ch'>";
    echo "<input type='submit' value='Recherche'>";
    
     
     echo "&nbsp;&nbsp;<a href='listeemployes.php' >annuler</a>";
 echo "</form></div>";


    try{
    $connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
    
    $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    
    if(isset($_POST['ch'])){

        $rqt=$connection->prepare('SELECT * FROM employes where num=? OR firstname=? or lastname=?');
        $rqt->execute(array($_POST['ch'],$_POST['ch'],$_POST['ch']));
        $rqd=$connection->prepare('SELECT count(num) FROM employes where num=? OR firstname=? or lastname=?');
        $rqd->execute(array($_POST['ch'],$_POST['ch'],$_POST['ch']));
        $n=$rqd->fetch();
        if($n['count(num)']<=0){ echo "<br>cette employe n'existe pas";}

        

        
    }else{
        $rqt=$connection->query('SELECT * FROM employes');

    }
 
     echo"<br>";
    while($donnes=$rqt->fetch()){ 
        echo "<table style='width:100%'>";
       echo" <tr>";
        echo "<td>N:".$donnes['num']." l'employe:".$donnes['firstname']."   ".$donnes['lastname']."</td>";
        echo "<td><a href='modif1.php?num=".$donnes['num']."'>modifier</a></td> ";
        echo "<td><a href='suppression.php?num=".$donnes['num']."'>Supprimer</a></td>";
        echo "<td><a href='informationtotalemployes.php?num=".$donnes['num']."'>Information totale</a></td>";
        echo "<hr></tr>";
        
    }
   echo"</table>";
    
}catch (Exception $e)
{
        die('Erreur:'. $e->getMessage());
}

    
    
    
    ?>
</body>
</html>