

<!DOCTYPE html>
<html lang="ar">
<head>
    <link type="text/css" rel="stylesheet" href="ajoute1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>ajoute employes</title>
    <script>  
      function showp(){
          document.getElementById("d").innerHTML=('<h4> جواز سفر: <input type="text" name="passeport"></h4>');
          
      }
      function showcin(){
        document.getElementById("d").innerHTML=('بطاقة التعريف الوطنية:&numsp;<input type="number" name="cin" id="cin" >')

      }
      function show(){
        document.getElementById("d").innerHTML=('بطاقة التعريف الوطنية: &numsp;<input type="number" name="cin" id="cin" > <br> <h4> جواز سفر :<input type="text" name="passeport"></h4>')
      }
     
      
      </script>
</head>

<body  lang="ar" >
  <?php
require_once('verifsession.php');
?>
<h4><a href="ajoutef.php">française</a></h4> 

    <form action="ajoute.php" method="post" enctype="multipart/form-data" >
  
      <h1>:المعلومات الشخصية</h1>
      <h5>
      بطاقة التعريف الوطنية &numsp;&numsp;
      

       <input type="radio" onclick="showp()" name="n" id=""> :جواز سفر&numsp;&numsp;
       
       <input type="radio" onclick="show()" name="n" id="">:الأثنان
       :<input  type="radio" onclick="showcin()" name="n" id="">
      </h5>
      <div class="input-group mb-3">
     <div id="d"></div></div><div class="input-group mb-3">
     <h4></h4> &nbsp; <input  type="text" class="form-control" name="nom" id="nom">اللقب: &numsp;&numsp;<input type="text" name="prenom"class="form-control" id="prenom"> :الاسم</h4></h4>
     </div>

     <h4>:تاريخ مكان الولادة</h4>
     <div class="input-group mb-3">
     مكانها :<input type="text" class="form-control" name="lieu">:تاريخ الولادة<input class="form-control" type="date" name="date" >
     </div>
     <h4> جنس :  <input type="radio" name="s" value="f">:مؤنث  <input type="radio" name="s" value="m">:مذكر </p> 
     </h4>
     <h4>
     <div class="input-group mb-3">
     <input type="tel" class="form-control" name="tel">:رقم الهاتف</h4>
     </div><div class="input-group mb-3">
     <H4> <input type="email" class="form-control" name="email" id="">:البريد الالكتروني</H4>
     </div><div class="input-group mb-3">
     <h4><input class="form-control"  type="file" name="image" id="">:صورة</h4>
     </div>
     <h4>
      <select name="nationality">:الجنسية
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

      <h4> <select name="situation" id=""> 
         <option value="marié">marié</option>
         <option value="divorcé">divorcé</option>
         <option value="séparé">séparé</option>
         <option value="célibataire">célibataire</option>
         <option value="veuf">veuf </option>
      </select> :الوضع العائلي</h4>
   <div class="input-group mb-3">
       <h4> :حساب بنكي<input type="number"  class="form-control" name="nbancaire" id=""></h4>
       </div>
       <h4><select name="pad" id=""> 
         <option value="directe">directe</option>
         <option value="indirecte">indirecte</option>
      </select>:(الوضعية الإدارية (مباشر/غير مباشر </h4>
      
      
      
      <br>

      
      <h4> <select name="ta" id=""> 
         <option value="permanent">permanent</option>
         <option value="contractuel">contractuel</option>
      </select>:(نوع الإنتداب (قار/متعاقد </h4>
   <div class="input-group mb-3">
      <h4> &numsp;:تاريخ المباشرة في اخر رتبة<input type="date"class="form-control" name="Datdrang" id="" ></h4>
      </div><div class="input-group mb-3">
    <h4> &numsp;:الاختصاص العام<input type="text" class="form-control" name="specialite" id="" ></h4>
    </div><div class="input-group mb-3">
    <h4> &numsp;:أنتداب<input type="text"  class="form-control" name="Recrutement" id="" ></h4>
    </div><div class="input-group mb-3">
    <h4>&numsp;:نوع<input type="text" class="form-control" name="genre" id="" ></h4>
    </div>
      <h1></h1>
      <h4>&numsp;&numsp;
      <?php 
        $connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
     echo" <select name='grade'>";
     $rqt=$connection->query('SELECT * FROM poste ');

     
     echo" <option value=''>-- select one --</option>";
      while($donne=$rqt->fetch()){


     echo" <option value='".$donne['npost']."'>".$donne['npost']."</option>";}
      ?>
      </select>:الرتية
      </h4>
      <br>
      <h4>&numsp;&numsp;
      <select name="dep" >
      <option value="12">12</option>
      <option value="14">14</option>
      <option value="50">50</option>
      </select>:القسم
      </h4>

    <br> <br>

     <input type="submit" style="position: absolute; left: 1024px; value="enregistrer" >
    </form>
</body>
</html>