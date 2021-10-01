
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
   
$reqt=$connection->prepare('SELECT * from poste WHERE npost=? ');
$reqt->execute(array($_POST['grade']));
$donnes=$reqt->fetch();

if(empty($_POST['cin'])){
        $cin=00;
        
}else{$cin=$_POST['cin'];
        
}
if(empty($_POST['passeport'])){
        $passeport=00;
}else{$passeport=$_POST['passeport'];}


$rqt=$connection->prepare('INSERT INTO employes(firstname,lastname,email,tel,sexe,nationalite,situationf,nbancaire,naissanced,cin,passeport,lieu,dapartement,nbsejour,salaryh,grade,specialite,genre,ta,pad,Datdrang,Recrutement,Datafect) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,sysdate())');
$rqt->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel'],$_POST['s'],$_POST['nationality'],$_POST['situation'],$_POST['nbancaire'],$_POST['date'],$cin,$passeport,$_POST['lieu'],$_POST['dep'],$donnes['nbsejourfix'],$donnes['salaire_par_h'],$_POST['grade'],$_POST['specialite'],$_POST['genre'],$_POST['ta'],$_POST['pad'],$_POST['Datdrang'],$_POST['Recrutement']));
print_r($rqt->errorInfo()[2]); 

if($rqt->errorInfo()[2]==''){

$nameimage=time().'_'.$_FILES['image']['name'];
$target='images/'.$nameimage;

move_uploaded_file($_FILES['image']['tmp_name'],$target);

$rqt=$connection->prepare('INSERT INTO images(image) values(?)');
$rqt->execute(array($nameimage));
header('location:accueil.php');
}


}catch (Exception $e)
{
        die('Erreur:'. $e->getMessage());
}

?>
</body>
</html>
