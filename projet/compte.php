<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once('verifsession.php');

$connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   
if(isset($_GET['user1'])){ 
    $c=true;
    $req=$connection->prepare('SELECT * FROM login WHERE user=?');
    $req->execute(array($_GET['user1']));
    $donne=$req->fetch();
    print_r($req->errorInfo()[2]); 

}
       
if(isset($_POST['user'])){
    $req=$connection->prepare('INSERT INTO login values(?,?)');
    $req->execute(array($_POST['user'],$_POST['pasword']));
   
print_r($req->errorInfo()[2]); 
}

if(isset($_GET['user'])){
    $req=$connection->prepare('UPDATE login SET  user=?,pasword=? WHERE user=?');
    $req->execute(array($_GET['user'],$_GET['pasword'],$_GET['user']));
}

if(isset($_GET['sup'])){
    $req=$connection->prepare('delete from login WHERE user=?');
    $req->execute(array($_GET['sup']));
}

?>

<?php if($c){echo "<form action='compte.php' method='get' >"; } else{

echo"<form action='compte.php' method='post' >";

}  ?>  

<h1>Option sur compte</h1>
<div class="p">
<div class="input-group mb-3">
<div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1">user</span>
</div>
<input type="text" class="form-control" placeholder="user" name="user"<?php if($c){echo "value='".$donne['user']."'";}   ?> name="grade" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1">mot de passe</span>
</div>
<input type="text" class="form-control" placeholder="pasword" name="pasword" <?php if($c){echo "value='".$donne['pasword']."'";}   ?> aria-label="Username" aria-describedby="basic-addon1">
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
        <th>user</th>
        <th>pasword</th> 
        
      </tr>
<?php

    
$rqt=$connection->query('SELECT * from login');

while($donne=$rqt->fetch()){

   echo"   <tr>";
     echo"<td>".$donne['user']."</td>";
     echo"<td>".$donne['pasword']."</td>";
     
     echo"<td><a href='compte.php?user1=".$donne['user']."'>modifier</a></td>";
     echo"<td><a href='compte.php?sup=".$donne['user']."'> Supprimer</a></td>";
     echo" </tr>";




}
echo"</table>";







?>





</body>
</html>