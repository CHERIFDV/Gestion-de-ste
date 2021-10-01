<?php
$connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');

if($_GET['p']=='p'){
    $reqt=$connection->prepare('SELECT * FROM employes where num=?');
    $reqt->execute(array($_GET['num']));
     $donnes=$reqt->fetch();

$req=$connection->prepare('SELECT * FROM gestionpointage where num=?');
$req->execute(array($_GET['num']));

$reqt=$connection->query('SELECT * FROM options where num=1');
$options=$reqt->fetch();
require_once('tcpdf/tcpdf.php');  
    
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
$obj_pdf->SetCreator(PDF_CREATOR);  
$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); 
$obj_pdf->SetDefaultMonospacedFont('aealarabiya');  
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
$obj_pdf->setPrintHeader(false);  
$obj_pdf->setPrintFooter(false);  
$obj_pdf->SetAutoPageBreak(TRUE, 10); 
$obj_pdf->SetFont('helvetica', '', 11);  
$obj_pdf->AddPage(); 
$obj_pdf->Image("attestation/".$options['image'],0,10,210,297);
$obj_pdf->SetFont("aealarabiya","","20");
$obj_pdf->Cell(0,30," ",0,1);
$obj_pdf->cell(0,0,"Etat de pointage",1,1,"C");
$obj_pdf->SetFont("aealarabiya","","12");

$obj_pdf->Cell(0,15," ",0,1);
$obj_pdf->cell(0,0,"l'employée: ".$donnes['firstname']." ".$donnes['lastname'],0,1);
$obj_pdf->cell(0,20,"N employée:".$_GET['num'],0,1);

while ($donnes=$req->fetch()){
    $obj_pdf->cell(0,0,"le ".$donnes['datejour']."    entre: ".$donnes['entre']."   sortir: ".$donnes['sorti'],0,1,"L");
}
$obj_pdf->Output('file.pdf', 'I');
}

if($_GET['p']=='v'){

    

$req=$connection->prepare('SELECT * FROM esejoure where num=?');
$req->execute(array($_GET['num']));

$reqt=$connection->query('SELECT * FROM options where num=1');
$options=$reqt->fetch();

$rqt=$connection->prepare('SELECT nbsejour FROM employes where num=?');
$rqt->execute(array($_GET['num']));
$sejourreston=$rqt->fetch();

$reqt=$connection->prepare('SELECT * FROM employes where num=?');
    $reqt->execute(array($_GET['num']));
     $donnes=$reqt->fetch();


    require_once('tcpdf/tcpdf.php');  
    
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $obj_pdf->SetCreator(PDF_CREATOR);  
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); 
    $obj_pdf->SetDefaultMonospacedFont('aealarabiya');  
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $obj_pdf->setPrintHeader(false);  
    $obj_pdf->setPrintFooter(false);  
    $obj_pdf->SetAutoPageBreak(TRUE, 10); 
    $obj_pdf->SetFont('helvetica', '', 11);  
    $obj_pdf->AddPage(); 
    $obj_pdf->Image("attestation/".$options['image'],0,10,210,297);
    $obj_pdf->SetFont("aealarabiya","","20");
    $obj_pdf->Cell(0,30," ",0,1);
    $obj_pdf->cell(0,0,"Etat de vacance",1,1,"C");
    $obj_pdf->SetFont("aealarabiya","","20");
    $obj_pdf->cell(0,0,"l'employée: ".$donnes['firstname']." ".$donnes['lastname'],0,1);
    $obj_pdf->cell(0,20,"N employée:".$_GET['num']."  Nombre de sejour restant:".$sejourreston['nbsejour'],0,1,"C");
    $obj_pdf->SetFont("aealarabiya","","12");

    while ($donnes=$req->fetch()){

        $obj_pdf->cell(0,5,"le ".$donnes['datejour']." demende de sejour qui :",0,1,"L");
       
        $obj_pdf->Write(0, "starte le :".$donnes['datedebutsjour']."  et termine le: ".$donnes['datefinsjour']."      Nombre de jour :".$donnes['nbsejour'] , 0, false, 'C', 0, '', 0, false, 'T', 'M');
         $obj_pdf->Cell(0,10," ",0,1);
    }
    $obj_pdf->Output('file.pdf', 'I');
}

if($_GET['p']=='vg'){


    $rqt=$connection->prepare('SELECT * FROM employes');
    $rqt->execute(array());


    $reqt=$connection->query('SELECT * FROM options where num=1');
    $options=$reqt->fetch();


    require_once('tcpdf/tcpdf.php');  
    
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $obj_pdf->SetCreator(PDF_CREATOR);  
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); 
    $obj_pdf->SetDefaultMonospacedFont('aealarabiya');  
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $obj_pdf->setPrintHeader(false);  
    $obj_pdf->setPrintFooter(false);  
    $obj_pdf->SetAutoPageBreak(TRUE, 10); 
    $obj_pdf->SetFont('helvetica', '', 11);  
    $obj_pdf->AddPage(); 
    $obj_pdf->Image("attestation/".$options['image'],0,10,210,297);
    $obj_pdf->SetFont("aealarabiya","","20");
    $obj_pdf->Cell(0,30," ",0,1);
    $obj_pdf->cell(0,0,"Etat de vacance global",1,1,"C");
    $obj_pdf->SetFont("aealarabiya","","20");
 
    $obj_pdf->SetFont("aealarabiya","","15");
    $obj_pdf->Cell(0,15," ",0,1);
    while ($donnes=$rqt->fetch()){
       
        $obj_pdf->cell(0,0,"l'employée: ".$donnes['firstname']." ".$donnes['lastname'],0,1);
        $obj_pdf->cell(0,0,"N employée: ".$donnes['num']." Nombre de sejour restant:".$donnes['nbsejour'],0,1);
       
    }
    $obj_pdf->Output('file.pdf', 'I');









}
?>
