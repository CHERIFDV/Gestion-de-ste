<?php

require_once('verifsession.php');

try{
$connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$rqt=$connection->prepare('UPDATE options  SET noms=?,sg=?,fax=?,tel=?,email=?,adressa=?,adressf=? WHERE num=1');
$rqt->execute(array($_POST['noms'],$_POST['sg'],$_POST['fax'],$_POST['tel'],$_POST['email'],$_POST['adressa'],$_POST['adressf']));


$rqt=$connection->prepare('INSERT INTO options VALUES(?,?,?,?,?,?,?,null,1)');
$rqt->execute(array($_POST['noms'],$_POST['sg'],$_POST['fax'],$_POST['tel'],$_POST['email'],$_POST['adressa'],$_POST['adressf']));

print_r($rqt->errorInfo()[2]); 


header('location:sinformations.php');

}catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}





?>