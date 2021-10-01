<?php

if(!empty($_POST['user'])&&!empty($_POST['pasword'])){
try{

$connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');

$rqt=$connection->query('SELECT * from login');
while($donnes=$rqt->fetch()){
if($_POST['user']==$donnes['user']&&$_POST['pasword']==$donnes['pasword']){

session_start();
$_SESSION['user']=$_POST['user'];
$_SESSION['pasword']=$_POST['pasword'];
 header("location:accueil.php");
}
if(empty($_SESSION['user'])){
        require_once('login.php');
        echo '<center>error pasword or login is incorrect</center>';
        }}
}catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
}

}else{
require_once('login.php');
echo '<center>error pasword or login is incorrect</center>';

}

?>