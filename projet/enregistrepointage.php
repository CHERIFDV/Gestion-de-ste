<?php

require_once('verifsession.php');

try{
$connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');

if(empty($_POST['date'])){$date=date('Y-m-d');
        
}else{$date=$_POST['date'];}



$rqd=$connection->prepare('SELECT count(num) FROM employes where num=?');
$rqd->execute(array($_POST['num']));
$n=$rqd->fetch();
if($n['count(num)']<=0){ echo "<h1>cette employée ne existe pas </h2>";}else{



if (isset($_POST['p'])&& $_POST['p']=='e'){



$req=$connection->prepare('INSERT INTO gestionpointage (num,entre,datejour) VALUES(?,?,?)');

$req->execute(array($_POST['num'],$_POST['time'],$date));

$req=$connection->prepare('insert into nbhparjour (num,nbh,datejour) (Select ?,?,? from dual Where not exists(select * from nbhparjour where datejour=? and num=?));');
$req->execute(array($_POST['num'],0,$date,$date,$_POST['num']));

header('location:pointageemployes.php');

}elseif(isset($_POST['p'])&& $_POST['p']=='s'){

$req=$connection->prepare('UPDATE gestionpointage sorti set sorti=? WHERE num=? and datejour=? AND sorti is null  ');

$req->execute(array($_POST['time'],$_POST['num'],$date));

////
$rqt=$connection->prepare('SELECT * FROM gestionpointage where num=? and datejour=? ');
$rqt->execute(array($_POST['num'],$date));

while($donnes=$rqt->fetch()){
$nb=$donnes['entre'];
};
echo $nb=$_POST['time']-$nb;

///
$req=$connection->prepare('UPDATE  nbhparjour set nbh=?+nbh where num=? and datejour=?');
$req->execute(array($nb,$_POST['num'],$date));
header('location:pointageemployes.php');

}}

}catch (Exception $e){

        die('Erreur : ' . $e->getMessage());
        
}
/*/
insert into nbhparjour (num,nbh,datejour) (Select '2020-01-19' from dual Where not exists(select datejour from nbhparjour where datejour='2020-01-19')); 
/*/
?>