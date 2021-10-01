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
       
        

if(!empty($_FILES['imaget']['name'])){

 
        $nameimaget=time().'_'.$_FILES['imaget']['name'];
        $targett='attestation/'.$nameimaget;

        move_uploaded_file($_FILES['imaget']['tmp_name'],$targett);

        $req=$connection->prepare('UPDATE options set image=? where num=1');
        $req->execute(array($nameimaget));
        print_r($req->errorInfo()[2]); 

}

        }catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    



?>
    
<form action="matestation.php" method="post" enctype="multipart/form-data">
 <h1>Option sur attestation</h1>
<div class="m">
<h4 >Photo d'un entête: <input class="form-control" type="file" name="imaget" id=""></h4>

</div>


<input type="submit" value="enregistrer">



<?php 
        $rqt=$connection->query('SELECT * FROM options where num=1');
        $image=$rqt->fetch();


echo "<img width='400px' height='500px' style='position: absolute ;left:1200px ; top:150px ;'src='attestation/".$image['image']."'alt=''><br>";


?>






</form>






</body>
</html>