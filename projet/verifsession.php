<?php
require_once('baremenu.php');
session_start();
if(!isset($_SESSION['user'])&&!isset($_SESSION['pasword']) ){
     header("location:login.php");
}
?>