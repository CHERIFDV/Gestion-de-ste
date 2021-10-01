<?php


$connection=new PDO('mysql:host=localhost;dbname=cherif;charset=utf8','dsi2','dsi2');
$req=$connection->prepare('SELECT * FROM employes where num=?');
$req->execute(array($_GET['num']));
$donnes=$req->fetch();
$rqd=$connection->prepare('SELECT count(num) FROM employes where num=?');
$rqd->execute(array($_GET['num']));
$n=$rqd->fetch();
if($n['count(num)']<=0){ echo "<br>vide";}else{

$req=$connection->query('SELECT * FROM options where num=1');
$options=$req->fetch();
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
        $obj_pdf->Cell(0,50," ",0,1);
        $obj_pdf->cell(0,0,"Attestation De Travail",1,1,"C");
        $obj_pdf->SetFont("aealarabiya","",18);
        $obj_pdf->Cell(0,15," ",0,1);
        $obj_pdf->cell(0,20,"Le Secretaire General de ".$options['sg']." certifie que :",0,1,"C");
     
        $f="  <P>   &nbsp;  &nbsp;  &nbsp; Exerce la fonction d'un enseignant Universitaire en Grade de ".$donnes['grade'].", à  L'Institut Superieur des Etudes Technologiques de Sousse.</p>";
        $content = '';  
       if($donnes['sexe']=='f'){ $content .= '
                    <div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mme :'.$donnes['firstname'].'  '.$donnes['lastname'].'
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Matricule: '.$donnes['cin'].'
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Née le :'.date("d-m-Y",$donnes['naissanced']).'</div> 
     
                    <br><br> '.$f.'
     <p>  &nbsp;  &nbsp; Cette attestation est delivree a la demande de lintéressée pour servir et valoir ce que de droit.</p>
     <br>
    '; 
    
       }else{$content .= '
    <div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M :'.$donnes['firstname'].'  '.$donnes['lastname'].'
    <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Matricule: '.$donnes['cin'].'
    <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Né le :'.date('d/m/Y',$donnes['naissanced']).'</div> 

    <br><br> '.$f.'
<p>  &nbsp;  &nbsp; Cette attestation est delivree a la demande de lintéressé pour servir et valoir ce que de droit.</p>
<br>
';  }
   
     $footer .= ''.$options['adressf'].'                      Tel/الهاتف:'.$options['tel'].'                       Fax:'.$options['fax'].'                  '.$options['adressa'].'
           Email: '.$options['email'].'';
        
        
        $obj_pdf->SetFont("aealarabiya","","15");
        $obj_pdf->writeHTML($content); 
        
        $obj_pdf->Cell(0,0," Sousse le : ".date('d/m/Y'),0,1,"R");
        $obj_pdf->Cell(0,0,"Le secretaire General",0,1,"R");

        $obj_pdf->SetY(-20);
        // Set font
        $obj_pdf->SetFont('aealarabiya', 'I', 8);
        // Page number
        $obj_pdf->Write(0, $footer, 0, false, 'C', 0, '', 0, false, 'T', 'M');
        $obj_pdf->Output('file.pdf', 'I');  
        
        
}