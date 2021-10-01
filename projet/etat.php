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
?>

<h1>Etat</h1><ul>
        <li>
         <h3>Etats de vacances:</h3>
        </li><li>
         <a class="btn btn-primary" href="getnumemployer.php?mode=sejoure">Demande Etats de vacance par employée</a>
        
        </li><br> 
        <li>
         
         <a class="btn btn-primary" href="etatvacancet.php">Demande Etats de vacances Global </a>
         
        </li>
        <li>
         <h3>Etat de pointage</h3>
         <a  class="btn btn-primary" href="getnumemployer.php?mode=pointage"> Demande de relever de pointage</a>
        </li>
        
        
        <li>
         <h3>Attestation de travaille:</h3>
         <a class="btn btn-primary" href="getnumemployer.php?mode=a&lang=f">Attestation de travaille en français</a>
         <a class="btn btn-primary" href="getnumemployer.php?mode=a&lang=a">Attestation de travaille en arabe</a>
         <li>
         <h3>Demande de vacance:</h3>
         <a class="btn btn-primary" href="demandesejour.php">Demande de vacance</a> </li>
         </ul>
         </div>
</body>
</html>