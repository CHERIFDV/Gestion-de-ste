<?php

require_once('verifsession.php');

try{
$connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$req=$connection->prepare('SELECT nbsejour FROM employes where num=?');
$req->execute(array($_POST['num']));
$donnes=$req->fetch();


$rqd=$connection->prepare('SELECT count(num) FROM employes where num=?');
$rqd->execute(array($_POST['num']));
$n=$rqd->fetch();
if($n['count(num)']<=0){ echo "<h1>cette employée ne existe pas </h2>";}else{

$next_date = date('Y-m-d', strtotime($_POST['dated'].' +'.$_POST['nbjour'].' day'));
$reste=$donnes['nbsejour']-$_POST['nbjour'];
if($reste>=0){
$req=$connection->prepare('UPDATE employes SET nbsejour=? where num=?');
$req->execute(array($reste,$_POST['num']));
$rqt=$connection->prepare('INSERT INTO esejoure(num,nbsejour,datedebutsjour,datefinsjour,datejour) VALUES (?,?,?,?,sysdate())');
$rqt->execute(array($_POST['num'],$_POST['nbjour'],$_POST['dated'],$next_date));
print_r($rqt->errorInfo()[2]); 
header('location:accueil.php');


}else{

        echo "jour insufisant li vou reste :".$donnes['nbsejour'];
}}



}catch (Exception $e)
{
        die('Erreur:'. $e->getMessage());
}

?>