
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>ajoute employes</title>
    <script>  
      function showp(){
          document.getElementById("d").innerHTML=('<h4>N° de passeport :<input class="form-control" type="text" name="passeport"></h4>');
          
      }
      function showcin(){
        document.getElementById("d").innerHTML=('CIN:&numsp;<input class="form-control" type="number" name="cin" id="cin" >');

      }
      function show(){
        document.getElementById("d").innerHTML=('<h4>CIN:&numsp;<input class="form-control" type="number" name="cin" > </h4><br> <h4>N° de passeport: <input class="form-control" type="text" name="passeport"></h4>');
      }
      
      </script>
</head>

<body>
<?php
require_once('verifsession.php');
?>

<h4><a href="ajoutea.php">arabe</a> </h4>
    <form action="ajoute.php" method="post" enctype="multipart/form-data" >
  
   
      <h1>Information Personel:</h1> <br>
      
      <h5>N° cin:
       <input type="radio" onclick="showcin()" name="n" id=""> &numsp;&numsp; 
       N° passeport:
       <input type="radio" onclick="showp()" name="n" id="">&numsp;&numsp; 
       les deux:
       <input type="radio" onclick="show()" name="n" id=""> <br>
      </h5>
      <div class="input-group mb-3">
      <div id="d"></div>
      </div>
      <div class="input-group mb-3">
      Nom:&nbsp; <input  class="form-control" aria-describedby="basic-addon1" type="text" name="nom" id="nom">&numsp; Prenom:&numsp;<input class="form-control" type="text" name="prenom" id="prenom"></h4></h4>
      </div><br>
      <h4>Date et Lieu de naissance:</h4>
    <div class="input-group mb-3">
     Date:<input class="form-control" aria-describedby="basic-addon1" type="date" name="date" >lieu:<input class="form-control" aria-describedby="basic-addon1" type="text" name="lieu">
     </div>
     <h4>Sexe: Féminin <input type="radio"  name="s" value="f"> Masculin <input type="radio" name="s" value="m"></h4>

      
         N° tel:  <div class="input-group mb-3"><input class="form-control" type="tel" name="tel">
     </div>
     <div class="input-group mb-3" >
     Adresse Email: <input class="form-control"type="email" name="email" >
    </div>
    <div class="input-group mb-3">
     <h4>Photo d'un employé: <input class="form-control" type="file" name="image" id=""></h4>
    </div>
     <h4>Nationalite:
      <select name="nationality">
         <option value="">-- select one --</option><option value="albanian">Albanian</option><option value="algerian">Algerian</option>
         <option value="american">American</option>
         <option value="andorran">Andorran</option>
         <option value="angolan">Angolan</option>
         <option value="antiguans">Antiguans</option>
         <option value="argentinean">Argentinean</option>
         <option value="armenian">Armenian</option>
         <option value="australian">Australian</option>
         <option value="austrian">Austrian</option>
         <option value="azerbaijani">Azerbaijani</option>
         <option value="bahamian">Bahamian</option>
         <option value="brazilian">Brazilian</option>
         <option value="burundian">Burundian</option>
         <option value="cambodian">Cambodian</option>
         <option value="cameroonian">Cameroonian</option>
         <option value="canadian">Canadian</option>
         <option value="cape verdean">Cape Verdean</option>
         <option value="central african">Central African</option>
         <option value="chadian">Chadian</option>
         <option value="chilean">Chilean</option>
         <option value="chinese">Chinese</option>
         <option value="colombian">Colombian</option>
         <option value="comoran">Comoran</option>
         <option value="czech">Czech</option>
         <option value="danish">Danish</option>
         <option value="djibouti">Djibouti</option>
         <option value="dominican">Dominican</option>
         <option value="dutch">Dutch</option>
         <option value="east timorese">East Timorese</option>
         <option value="ecuadorean">Ecuadorean</option>
         <option value="egyptian">Egyptian</option>
         <option value="emirian">Emirian</option>
         <option value="equatorial guinean">Equatorial Guinean</option>
         <option value="eritrean">Eritrean</option>
         <option value="estonian">Estonian</option>
         <option value="ethiopian">Ethiopian</option>
         <option value="fijian">Fijian</option>
         <option value="filipino">Filipino</option>
         <option value="finnish">Finnish</option>
         <option value="french">French</option>
         <option value="gabonese">Gabonese</option>
         <option value="gambian">Gambian</option>
         <option value="georgian">Georgian</option>
         <option value="german">German</option>
         <option value="ghanaian">Ghanaian</option>
         <option value="greek">Greek</option>
         <option value="indian">Indian</option>
         <option value="iranian">Iranian</option>
         <option value="iraqi">Iraqi</option>
         <option value="south african">South African</option>
         <option value="south korean">South Korean</option>
         <option value="spanish">Spanish</option>
         <option value="sri lankan">Sri Lankan</option>
         <option value="swedish">Swedish</option>
         <option value="swiss">Swiss</option>
         <option value="syrian">Syrian</option>
         <option value="taiwanese">Taiwanese</option>
         <option value="tunisian">Tunisian</option>
         <option value="turkish">Turkish</option>
       </select></h4>

      <h4>Situation Familial: <select name="situation" id=""> 
         <option value="marié">marié</option>
         <option value="divorcé">divorcé</option>
         <option value="séparé">séparé</option>
         <option value="célibataire">célibataire</option>
         <option value="veuf">veuf </option>
      </select> </h4>
      <div class="input-group mb-3">
       <h4>N° compte bancaire: <input class="form-control" type="number" name="nbancaire" id=""></h4>
       </div>
       <h4>Position administrative (directe / indirecte): <select name="pad" id=""> 
         <option value="directe">directe</option>
         <option value="indirecte">indirecte</option>
      </select> </h4>
      <h4>Type d'affectation (permanent / contractuel): <select name="ta" id=""> 
         <option value="permanent">permanent</option>
         <option value="contractuel">contractuel</option>
      </select> </h4>
      <div class="input-group mb-3">
      <h4>Date de début au dernier rang: &numsp;<input class="form-control" type="date" name="Datdrang" id="" ></h4><br>
      </div>
     <div class="input-group mb-3" >
    <h4>spécialité: &numsp;<input type="text" class="form-control" name="specialite" id="" ></h4>
    </div>
     <div class="input-group mb-3" >
    <h4>Recrutement: &numsp;<input type="text" class="form-control" name="Recrutement" id="" ></h4>
    </div>
     <div class="input-group mb-3" >
    <h4>Genre: &numsp;<input type="text" class="form-control" name="genre" id="" ></h4>
    </div>
      <Hr></Hr>
      <h1></h1>
      <h4>Grade:&numsp;&numsp;
      <?php 
        $connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
     echo" <select name='grade'>";
     $rqt=$connection->query('SELECT * FROM poste ');

     
     echo" <option value=''>-- select one --</option>";
      while($donne=$rqt->fetch()){


     echo" <option value='".$donne['npost']."'>".$donne['npost']."</option>";}
      ?>
      </select>
      </h4>
      <h4>Departement:&numsp;&numsp;
      <select name="dep" >
      <option value="12">12</option>
      <option value="14">14</option>
      <option value="50">50</option>
      </select>
      </h4>

      

     <input type="submit" value="enregistrer" style="position: absolute; left: 1024px;">
    </form>
</body>
</html>