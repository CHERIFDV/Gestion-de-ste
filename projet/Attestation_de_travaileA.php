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


$data1= " يشهد مدير المعهد العالي للدراسات التكنولوجية بسوسة بان :";

$data3="               صاحب(ة) المعرف الوحيد:".$donnes['cin'];
$data2="               السيد(ة ):".$donnes['firstname']."  ".$donnes['lastname'];

$data4="                المولود(ة) في :".date("d-m-Y",$donnes['naissanced']);

$data5="                رتبته (ها) أو صنفه(ها):".$donnes['grade'];
$data6="                خطته(ها) الوظيفية: ".$donnes['specialite'];

$data7="                 يعمل (تعمل): ";
$data8="             سلمت هذه الشهادة بطلب منه ( ها ) للإدلاء بلدى من يهمه الأمر.";
$data9="سوسة في :".date('d/m/Y');
$data10="       الكاتب العام:         ";

$footer .= ''.$options['adressf'].'                      Tel/الهاتف:'.$options['tel'].'                       Fax:'.$options['fax'].'                  '.$options['adressa'].'
           Email: '.$options['email'].'';  


require_once('tcpdf/tcpdf.php');



$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
$pdf->SetCreator(PDF_CREATOR);  


$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); 

$pdf->SetDefaultMonospacedFont('aealarabiya');  

$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  

$pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
$pdf->setPrintHeader(false);  

$pdf->setPrintFooter(false);  

$pdf->SetAutoPageBreak(TRUE, 10); 

$pdf->SetFont('helvetica', '', 11);  
$pdf->AddPage(); 
$pdf->SetFont("aealarabiya","","20");

$pdf->SetFont("aealarabiya","B","20");
$pdf->Image("attestation/".$options['image'],0,10,210,297);
$pdf->Cell(0,40," ",0,1);
$pdf->Cell(0,15,"شهادة عمل",1,1,"C");

$pdf->SetFont("aealarabiya","","20");
$pdf->Cell(0,30,$data1,10,10,"C");
$pdf->Cell(0,15,$data2,0,1,"R");
$pdf->Cell(0,15,$data3,0,1,"R");
$pdf->Cell(0,15,$data4,0,1,"R");

$pdf->SetFont("aealarabiya","","20");
$pdf->cell(0,15,$data5,0,1,"R");

$pdf->SetFont("aealarabiya","","20");
$pdf->cell(0,15,$data6,0,1,"R");
$pdf->SetFont("aealarabiya","","19");

$pdf->Cell(0,15,$data7,0,1,"R");
$pdf->Cell(0,15,$data8,0,1,"R");

$pdf->Cell(0,10,$data9,0,1,"L");
$pdf->Cell(0,1,$data10,0,1,"L");


$pdf->SetFont("aealarabiya","","10");

$pdf->SetY(-20);
        // Set font
        $pdf->SetFont('aealarabiya', 'I', 8);
        // Page number
        $pdf->Write(0, $footer, 0, false, 'C', 0, '', 0, false, 'T', 'M');
$pdf->Output();
}