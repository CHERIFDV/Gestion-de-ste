

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
<center>
    <h1>Demande de vacance :</h1>
    <form action="enregistresejour.php" method="post">
        <h4>Identifer d'un employée :</h4>
        <input type="number" name="num" id="">
    <h4>Nombre de jour:</h4>
    <input type="number" name="nbjour" id="">
       <h4>debut de sejour:</h4>
    <input type="date" name="dated" id="">
    
    

     <br><br><br>
    <input type="submit" value="envoyer" >


</center>




    </form>
</body>
</html>