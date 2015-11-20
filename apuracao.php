<?php

$sql="SELECT num_candidato,nome_candidato,regiao, situacao, SUM(votos) as votos FROM `dadosapuracao` where nome_candidato!='voto branco' && nome_candidato!='nulo' group by nome_candidato ORDER BY `votos` DESC

";

$sql2="select nome_candidato, SUM(votos) as brancos_qtde
from dadosapuracao where nome_candidato='VOTO BRANCO' group by nome_candidato
";

$sql3="select nome_candidato,SUM(votos) as nulos_qtde
from dadosapuracao where nome_candidato='NULO' group by nome_candidato
";

$sql4 = "select SUM(votos) as total from dadosapuracao";
$conect = mysql_connect("localhost", "root", "");

if (!$conect) die ("<h1>FALHA NA CONEÇÃO DO BANCO DE DADOS!</h1>");

$db = mysql_select_db("apuracao");
mysql_set_charset("utf8");
$exe_sql=mysql_query($sql) or die (mysql_error());
$exe_sql2=mysql_query($sql2) or die (mysql_error());
$exe_sql3=mysql_query($sql3) or die (mysql_error());
$exe_sql4=mysql_query($sql4) or die (mysql_error());

define('FPHF_FONTPATH', 'font');
require ('fpdf/fpdf.php');




$pdf=new FPDF('L', 'cm', 'A4');
$pdf->Open();
$pdf->AddPage();


//Data e Titulo do doc



$pdf->SetFont('Arial','B',12);
$pdf->Cell(25,1,'ELEIÇÃO CONSELHO MUNICIPAL DOS DIREITOS DA CRIANÇA E ADOLESCENTE', 1,0,'C');
$pdf->Cell(3, 1, ''.date('d-m-Y').'', 1,0,'C');
$pdf->Ln(1);



//DADOS DO LOCAL
$pdf->SetFont('times','B',11);
$pdf->Cell(4,1,'LOCAL:', 1,0,'L');
$pdf->Cell(24,1,'CENTRO EDUCACIONAL ADAMASTOR - APURAÇÃO', 1,1,'L');
$pdf->Cell(4,1,'ENDERECO:', 1,0,'L');
$pdf->Cell(24,1,'AVENIDA MONTEIRO LOBATO,   - MACEDO', 1,1,'L');
$pdf->Ln(1);






//Assunto do Doc
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'BOLETIM DE APURAÇÃO DOS VOTOS VALIDADOS NAS URNAS', 1,1,'C');
$pdf->Ln(1);


while ($resultado2=mysql_fetch_array($exe_sql2)) 
{
	# code...
	
	$pdf->Cell(10,1,$resultado2['nome_candidato'], 1,0,'C');
	
	$pdf->Cell(5,1,$resultado2['brancos_qtde'], 1,1,'C');


}

while ($resultado3=mysql_fetch_array($exe_sql3)) 
{
	# code...
	
	$pdf->Cell(10,1,$resultado3['nome_candidato'], 1,0,'C');
	
	$pdf->Cell(5,1,$resultado3['nulos_qtde'], 1,1,'C');
$pdf->Ln(1);

}

while ($resultado4=mysql_fetch_array($exe_sql4)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado4['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIÃO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,0,'C');
$pdf->Cell(4,1,'STATUS', 1,1,'C');
$pdf->Ln(1);





$pdf->SetFont('Arial','',11);









while ($resultado=mysql_fetch_array($exe_sql)) 
{


	# code...
	$pdf->Cell(5,1,$resultado['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado['votos'], 1,0,'C');
	$pdf->Cell(4,1,$resultado['situacao'], 1,1,'C');


}



$pdf->Output();






?>