

<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="ajoute1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajoute employes</title>
    <script>  
      function showp(){
          document.getElementById("d").innerHTML=('<h4>N° de passeport <input type="text" value="$donnes['passeport']" name="passeport"></h4>');
          
      }
      function showcin(){
        document.getElementById("d").innerHTML=('CIN:&numsp;<input type="number" value="$donnes['cin']" name="cin" id="cin" >')

      }
      function show(){
        document.getElementById('d').innerHTML=('CIN:&numsp;<input type='number' value='$donnes['cin']' name='cin' id='cin' > <br> <h4>N° de passeport <input type='text' value='$donnes['passeport']' name='passeport'></h4>')
      }
      function cnss(){
        document.getElementById('cnss').innerHTML=('CNSS: <input type='number' value="'.$donnes['cnss'].'" name='cnss' id=''>');
      }
      function cnrps(){
        document.getElementById('cnrps').innerHTML=('CNRPS: <input type='number' value="'.$donnes['cnrps'].'" name='cnrps' id=''>');

      }
      </script>
</head>

<body>
<?php

require_once('verifsession.php');

try{
    $connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');

   
    $req=$connection->prepare('SELECT * FROM employes where num=?');
    $req->execute(array($_GET['num']));
    $donnes=$req->fetch();

    $req=$connection->prepare('SELECT * FROM images where num=?');
    $req->execute(array($_GET['num']));
    $image=$req->fetch();
    
    
    
}catch (Exception $e)
{
        die('Erreur:'. $e->getMessage());
}
    echo "<form action='modif.php' method='post' enctype='multipart/form-data'>";
  
      echo "<h1>Information Personel</h1>";
      echo"<h4>N° employe : <input type='number' value='".$donnes['num']."' name='num' id='num' ></h4>";
      
      
       echo "<h4>CIN:&numsp;<input type='number' value='".$donnes['cin']."' name='cin' id='cin' >";
      
      echo"N° de passeport <input type='text' value='".$donnes['passeport']."' name='passeport'></h4>";

      echo "</h5>";

     echo "<div id='d'></div>";
     echo "<h4>Nom: <input  type='text' name='nom'  value='".$donnes['firstname']."' id='nom'>&numsp; Prenom:&numsp;";
     echo "<input type='text' name='prenom' value='".$donnes['lastname']."' id='prenom'></h4>";
     echo "</h4>";
     
     echo "<h4>Date et Lieu de naissance:";
     echo "<p>Date:<input type='date' name='date'  value='".$donnes['naissanced']."'>lieu: <input type='text' value='".$donnes['lieu']."'name='lieu'></p></h4>";
     
     if( $donnes['sexe']=='m'){echo "<h4>Sexe: Féminin <input type='radio' name='s' value='f'>Masculin ";
      echo "<input type='radio' name='s'checked value='m'>";
     }else{
        echo "<h4>Sexe: Féminin <input type='radio'checked name='s' value='f'>Masculin ";
        echo "<input type='radio' name='s' value='m'>";}
     
     echo "</h4>";
     echo "<h4>N° tel:";
     echo "<input type='tel' value='".$donnes['tel']."' name='tel'></h4>";
     echo "<H4>Adresse Email: <input type='email' name='email' value='".$donnes['email']."' id=''>";
     echo "</H4>";
     echo "<h4 style='position: absolute; top:300px;left: 1024px;' > Photo d'un employé: <br> <img  width='450px' height='330px' src='images/".$image['image']."' alt='' srcset=''><br><input type='text' name='himage'value='".$image['image']."'><br><input type='file'  name='image' id=''>";
     
     echo "</h4>";
     echo "<h4>Nationalite: ";
      echo "<select name='nationality' value='".$donnes['nationalite']."'>";

     echo "<option value='".$donnes['nationalite']."'>-- select one --</option>";
      echo "<option value='albanian'>Albanian</option>";
      echo "<option value='algerian'>Algerian</option>";
         echo "<option value='american'>American</option>";
         echo "<option value='andorran'>Andorran</option>";
         echo "<option value='angolan'>Angolan</option>";
         echo "<option value='antiguans'>Antiguans</option>";
         echo "<option value='argentinean'>Argentinean</option>";
         echo "<option value='armenian'>Armenian</option>";
         echo "<option value='australian'>Australian</option>";
         echo "<option value='austrian'>Austrian</option>";
         echo "<option value='azerbaijani'>Azerbaijani</option>";
         echo "<option value='bahamian'>Bahamian</option>";
         echo "<option value='brazilian'>Brazilian</option>";
         echo "<option value='burundian'>Burundian</option>";
         echo "<option value='cambodian'>Cambodian</option>";
         echo "<option value='cameroonian'>Cameroonian</option>";
         echo "<option value='canadian'>Canadian</option>";
         echo "<option value='cape verdean'>Cape Verdean</option>";
         echo "<option value='central african'>Central African</option>";
         echo "<option value='chadian'>Chadian</option>";
         echo "<option value='chilean'>Chilean</option>";
         echo "<option value='chinese'>Chinese</option>";
         echo "<option value='colombian'>Colombian</option>";
         echo "<option value='comoran'>Comoran</option>";
         echo "<option value='czech'>Czech</option>";
         echo "<option value='danish'>Danish</option>";
         echo "<option value='djibouti'>Djibouti</option>";
         echo "<option value='dominican'>Dominican</option>";
         echo "<option value='dutch'>Dutch</option>";
         echo "<option value='east timorese'>East Timorese</option>";
         echo "<option value='ecuadorean'>Ecuadorean</option>";
         echo "<option value='egyptian'>Egyptian</option>";
         echo "<option value='emirian'>Emirian</option>";
         echo "<option value='equatorial guinean'>Equatorial Guinean</option>";
         echo "<option value='eritrean'>Eritrean</option>";
         echo "<option value='estonian'>Estonian</option>";
         echo "<option value='ethiopian'>Ethiopian</option>";
         echo "<option value='fijian'>Fijian</option>";
         echo "<option value='filipino'>Filipino</option>";
         echo "<option value='finnish'>Finnish</option>";
         echo "<option value='french'>French</option>";
         echo "<option value='gabonese'>Gabonese</option>";
         echo "<option value='gambian'>Gambian</option>";
         echo "<option value='georgian'>Georgian</option>";
         echo "<option value='german'>German</option>";
         echo "<option value='ghanaian'>Ghanaian</option>";
         echo "<option value='greek'>Greek</option>";
         echo "<option value='indian'>Indian</option>";
         echo "<option value='iranian'>Iranian</option>";
         echo "<option value='iraqi'>Iraqi</option>";
         echo "<option value='south african'>South African</option>";
         echo "<option value='south korean'>South Korean</option>";
         echo "<option value='spanish'>Spanish</option>";
         echo "<option value='sri lankan'>Sri Lankan</option>";
         echo "<option value='swedish'>Swedish</option>";
         echo "<option value='swiss'>Swiss</option>";
         echo "<option value='syrian'>Syrian</option>";
         echo "<option value='taiwanese'>Taiwanese</option>";
         echo "<option value='tunisian'>Tunisian</option>";
         echo "<option value='turkish'>Turkish</option>";
       echo "</select> ".$donnes['nationalite']."</h4>";

      echo "<h4>Situation Familial: <select name='situation' value='".$donnes['situationf']."' id=''>";
      echo "<option value='".$donnes['situationf']."'>".$donnes['situationf']."</option>";
      echo "<option value='".$donnes['situationf']."'>-- select one --</option>";
         echo "<option value='marié'>marié</option>";
         echo "<option value='divorcé'>divorcé</option>";
         echo "<option value='séparé'>séparé</option>";
         echo "<option value='célibataire'>célibataire</option>";
         echo "<option value='veuf'>veuf</option>";
      echo "</select>";
      echo "</h4>";
    

     echo" <h4>N° compte bancaire: <input type='number' name='nbancaire'   value='".$donnes['nbancaire']."'></h4>";
      echo "<h4>Position administrative (directe / indirecte): <select name='pad' >";
      echo "<option value='".$donnes['pad']."'>".$donnes['pad']."</option>";
      echo"<option value='directe'>directe</option>";
      echo"<option value='indirecte'>indirecte</option>";
   echo "</select></h4>";


   echo "<h4>Type d'affectation (permanent / contractuel): <select name='ta' >";
   echo "<option value='".$donnes['ta']."'>".$donnes['ta']."</option>";
      echo"<option value='permanent'>permanent</option>";
      echo"<option value='contractuel'>contractuel</option>";
   echo "</select></h4>";
   echo "<h4>Date de début au dernier rang: &numsp;<input type='date' name='Datdrang' value='".$donnes['Datdrang']."' ></h4>";
 echo "<h4>spécialité: &numsp;<input type='text' name='specialite'value='".$donnes['specialite']."' ></h4>";
 echo "<h4>Recrutement: &numsp;<input type='text' name='Recrutement' value='".$donnes['Recrutement']."' ></h4>";
 echo "<h4>genre: &numsp;<input type='text' name='genre'value='".$donnes['genre']."' ></h4>";
   echo "<hr></Hr>";
   echo "<h1></h1>";
















      echo "<h1></h1>";
      echo "<h4>Poste:&numsp;&numsp;";
    echo "<select name='grade' value='".$donnes['grade']."'>";
    echo "<option value='".$donnes['grade']."'>".$donnes['grade']."</option>";
      echo "<option value='".$donnes['grade']."'>-- select one --</option>";
     
      $connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
   $rqt=$connection->query('SELECT * FROM poste ');
    while($donne=$rqt->fetch()){
   echo" <option value='".$donne['npost']."'>".$donne['npost']."</option>";}
    

      echo "</select>";
      echo "</h4>";
      echo "<h4>Departement:&numsp;&numsp;";
      
      echo "<select name='dep'  value='".$donnes['dapartement']."'>";
      echo "<option value='".$donnes['dapartement']."'>".$donnes['dapartement']."</option>";
      echo "<option value=''>-- select one --</option>";
      echo "<option value='12'>12</option>";
      echo "<option value='14'>14</option>";
      echo "<option value='50'>50</option>";
      echo "</select>";
      echo "</h4>";

      

     echo "<input type='submit' value='enregistrer' style='position: absolute; left: 1024px;'>";
     echo "</form>";


     ?>
</body>
</html>