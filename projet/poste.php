<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="matestation.css">

    <title>Document</title>
</head>
<body>
<?php
require_once('verifsession.php');
try{

        $connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
        $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
if(isset($_POST['grade'])){
   
 
        $req=$connection->prepare('INSERT INTO poste values(?,?,?)');
        $req->execute(array($_POST['grade'],$_POST['nbj'],$_POST['sh']));
       
 print_r($req->errorInfo()[2]); 
}
if(isset($_GET['mod'])){
        
        $c=true;
        $req=$connection->prepare('SELECT * FROM poste WHERE npost=?');
        $req->execute(array($_GET['mod']));
        $donne=$req->fetch();
        print_r($req->errorInfo()[2]); 

}
if(isset($_GET['grade'])){
       
        $req=$connection->prepare('UPDATE poste SET  salaire_par_h=?,nbsejourfix=? WHERE npost=?');
        $req->execute(array($_GET['sh'],$_GET['nbj'],$_GET['grade']));
}
if(isset($_GET['sup'])){
       
        $req=$connection->prepare('delete from poste WHERE npost=?');
        $req->execute(array($_GET['sup']));
}
        }catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
?>
  <?php if($c){echo "<form action='poste.php' method='get' >"; } else{

  echo"<form action='poste.php' method='post' >";

  }  ?>  

 <h1>Option sur poste</h1>
<div class="p">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Grade</span>
  </div>
  <input type="text" class="form-control" placeholder="Grade" <?php if($c){echo "value='".$donne['npost']."'";}   ?> name="grade" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h8> &nbsp; &nbsp; &nbsp;* Grade ne pas changeable</h8>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Nombre des jours de vacances</span>
  </div>
  <input type="number" class="form-control" placeholder="jour" name="nbj" <?php if($c){echo "value='".$donne['nbsejourfix']."'";}   ?> aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">salaire par heure</span>
  </div>
  <input type="text" class="form-control" placeholder="salaire par heure" <?php if($c){echo "value='".$donne['salaire_par_h']."'";}   ?> name="sh" aria-label="Username" aria-describedby="basic-addon1">
</div>







</div>


<input type="submit" value="enregistrer">


<br>
<br>
<br>
<br>






</form>

        <table style="width:100%">
        <tr>
          <th>Grade</th>
          <th>nombre de jour vacance</th> 
          <th>salaire par heure</th>
        </tr>
<?php
$rqt=$connection->query('SELECT * FROM poste ');

while($donne=$rqt->fetch()){

     echo"   <tr>";
       echo"<td>".$donne['npost']."</td>";
       echo"<td>".$donne['nbsejourfix']."</td>";
       echo"<td>".$donne['salaire_par_h']."</td>";
       echo"<td><a href='poste.php?mod=".$donne['npost']."'>modifier</a></td>";
       echo"<td><a href='poste.php?sup=".$donne['npost']."'> Supprimer</a></td>";
       echo" </tr>";




}
echo"</table>";







?>



</body>
</html>