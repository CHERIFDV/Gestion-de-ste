

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title>Document</title>
</head>
<body>
<?php
session_start();
?> 
  <?php   echo "<p style='position: absolute ; left: 1524px; top:30px;'> login by:".$_SESSION['user']."   &nbsp;&nbsp;    <a class='dec' href='logout.php'>deconnexion</a></p>";
 
 ?><h2>
<div class="bar">
<br>
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="accueil.php">Accueil</a>
  </li>
  &nbsp;  &nbsp;  &nbsp;
  <li class="nav-item">
    <a class="nav-link" href="etat.php">Etat</a>
  </li>
  &nbsp;  &nbsp;  &nbsp;
  <li class="nav-item">
    <a class="nav-link" href="parametre.php">Paramétre</a>
  </li>
  </ul>
</div></h2>

  </body>
</html>
