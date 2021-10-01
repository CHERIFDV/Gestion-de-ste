
<?php
require_once('verifsession.php');
try{
$connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');


$req=$connection->prepare('INSERT INTO history_employes SELECT * from employes where  num=?');
$req->execute(array($_GET['num']));
$req=$connection->prepare('DELETE FROM employes WHERE num=?');
$req->execute(array($_GET['num']));


}catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>