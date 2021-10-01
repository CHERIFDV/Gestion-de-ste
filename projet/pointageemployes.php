<?php
require_once('verifsession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Pointage de employees</title>
    <script>  
  function show(){
      document.getElementById("d").innerHTML=('<input type="date" name="date">');
      
  }
  
  </script>
</head>
<body>
  <h1>Pointage des employées</h1>
  <form action="enregistrepointage.php" method="post">

    <H3>N° d'un employée: <input type="number" name="num" id=""></H3>

  <h3>Entrée: <input type="radio" name="p" value="e" id="">
  Sorti: <input type="radio" name="p" value="s" id=""></h3>  
  
  <input type="time" name="time" id="">
  <br>
  <br>
  <input type="button" onclick="show()" value="set date by your self">
  <div id="d"></div>
  <br>
  <input type="submit" value="enregistre" style="position: absolute; left: 400px;">
</form>
</body>
</html>