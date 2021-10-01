
<?php
require_once('verifsession.php');
try{
$connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
$rqt=$connection->prepare('SELECT * from poste WHERE npost=? ');
$rqt->execute(array($_POST['grade']));
$donnes=$rqt->fetch();



$req=$connection->prepare('UPDATE employes SET firstname=?,lastname =?,email=?,tel=?,sexe=?,nationalite=?,situationf=?,nbancaire=?,naissanced=?,cin=?,passeport=?,lieu=?,dapartement=?,nbsejour=?,salaryh=?,grade=?,specialite=?,genre=?,ta=?,pad=?,Datdrang=?,Recrutement=? WHERE num=?');

$req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel'],$_POST['s'],$_POST['nationality'],$_POST['situation'],$_POST['nbancaire'],$_POST['date'],$_POST['cin'],$_POST['passeport'],$_POST['lieu'],$_POST['dep'],$donnes['nbsejourfix'],$donnes['salaire_par_h'],$_POST['grade'],$_POST['specialite'],$_POST['genre'],$_POST['ta'],$_POST['pad'],$_POST['Datdrang'],$_POST['Recrutement'],$_POST['num']));

if($_FILES['image']['name']!=''){
echo $_POST['himage'];
echo 'ok';

$nameimage=time().'_'.$_FILES['image']['name'];
$target='images/'.$nameimage;
move_uploaded_file($_FILES['image']['tmp_name'],$target);
$req=$connection->prepare('UPDATE images SET image=? where num=?');
$req->execute(array($nameimage,$_POST['num']));
unlink('images/'.$_POST['himage']);
}

header('location:accueil.php');
}catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}





?>