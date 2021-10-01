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


try{
  $connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
  $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $rqt=$connection->prepare('SELECT * FROM options where num=1');
  $rqt->execute(array());
  $donne=$rqt->fetch();
  print_r($rqt->errorInfo()[2]); 
  $c=true;



}catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



?>
    
<form action="eregistrerparametre.php" method="post" enctype="multipart/form-data">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Nom de Société</span>
  </div>
  <input type="text" class="form-control" placeholder="nom" name="noms" <?php if($c){echo "value='".$donne['noms']."'";}   ?>aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Secrétaire Géneral</span>
  </div>
  <input type="text" class="form-control" placeholder="nom" name="sg"<?php if($c){echo "value='".$donne['sg']."'";}   ?> aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Fax</span>
  </div>
  <input type="number" class="form-control" placeholder="FAX" name="fax"<?php if($c){echo "value='".$donne['fax']."'";}   ?> aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Tel</span>
  </div>
  <input type="number" class="form-control" placeholder="TEL" name="tel" <?php if($c){echo "value='".$donne['tel']."'";}   ?>aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Email</span>
  </div>
  <input type="email" class="form-control" placeholder="Emaile" name="email" <?php if($c){echo "value='".$donne['email']."'";}   ?>aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Adress en arabe</span>
  </div>
  <input type="text" class="form-control" placeholder="adressa" name="adressa"<?php if($c){echo "value='".$donne['adressa']."'";}   ?> aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Adress en française</span>
  </div>
  <input type="text" class="form-control" placeholder="adressf" name="adressf" <?php if($c){echo "value='".$donne['adressf']."'";}   ?>aria-label="Username" aria-describedby="basic-addon1">
</div>



<input type="submit" value="enregistrer">


</form>


</body>
</html>