<?php

$sql="
SELECT num_candidato,nome_candidato,regiao, situacao, SUM(votos) as votos FROM `dadosapuracao` where regiao='Bonsucesso' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql2="
SELECT num_candidato,nome_candidato,regiao, situacao, SUM(votos) as votos FROM `dadosapuracao` where regiao='Centro' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql3="
SELECT num_candidato,nome_candidato,regiao, situacao, SUM(votos) as votos FROM `dadosapuracao` where regiao='Cumbica' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql4="
SELECT num_candidato,nome_candidato,regiao, situacao, SUM(votos) as votos FROM `dadosapuracao` where regiao='Pimentas' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql5="
SELECT num_candidato,nome_candidato,regiao, situacao, SUM(votos) as votos FROM `dadosapuracao` where regiao='SÃO JOÃO' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql6="
SELECT num_candidato,nome_candidato,regiao, situacao, SUM(votos) as votos FROM `dadosapuracao` where regiao='TABOÃO' GROUP by nome_candidato ORDER BY `votos` DESC";

$conect = mysql_connect("localhost", "root", "");

if (!$conect) die ("<h1>FALHA NA CONEXÃO DO BANCO DE DADOS!</h1>");

$db = mysql_select_db("apuracao");
mysql_set_charset("utf8");
$exe_sql=mysql_query($sql) or die (mysql_error());
$exe_sql2=mysql_query($sql2) or die (mysql_error());
$exe_sql3=mysql_query($sql3) or die (mysql_error());
$exe_sql4=mysql_query($sql4) or die (mysql_error());
$exe_sql5=mysql_query($sql5) or die (mysql_error());
$exe_sql6=mysql_query($sql6) or die (mysql_error());


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



$pdf->SetFont('times','B',11);
$pdf->Cell(4,1,'LOCAL:', 1,0,'L');
$pdf->Cell(24,1,'CENTRO EDUCACIONAL ADAMASTOR - APURAÇÃO', 1,1,'L');
$pdf->Cell(4,1,'ENDERECO:', 1,0,'L');
$pdf->Cell(24,1,'AVENIDA MONTEIRO LOBATO,   - MACEDO', 1,1,'L');
$pdf->Ln(1);






//Assunto do Doc
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'BOLETIM APURAÇÃO DOS VOTOS VALIDADOS NAS URNAS POR REGIÃO', 1,1,'C');
$pdf->Ln(1);


//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'BONSUCESSO', 1,1,'C');
$pdf->Ln(1);


//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,0,'C');
$pdf->Cell(4,1,'STATUS', 1,1,'C');






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

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'CENTRO', 1,1,'C');
$pdf->Ln(1);


//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,0,'C');
$pdf->Cell(4,1,'STATUS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado2=mysql_fetch_array($exe_sql2)) 
{
	# code...
	$pdf->Cell(5,1,$resultado2['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado2['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado2['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado2['votos'], 1,0,'C');
	$pdf->Cell(4,1,$resultado2['situacao'], 1,1,'C');


}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'CUMBICA', 1,1,'C');
$pdf->Ln(1);


//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,0,'C');
$pdf->Cell(4,1,'STATUS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado3=mysql_fetch_array($exe_sql3)) 
{
	# code...
	$pdf->Cell(5,1,$resultado3['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado3['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado3['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado3['votos'], 1,0,'C');
	$pdf->Cell(4,1,$resultado3['situacao'], 1,1,'C');


}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'PIMENTAS', 1,1,'C');
$pdf->Ln(1);


//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,0,'C');
$pdf->Cell(4,1,'STATUS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado4=mysql_fetch_array($exe_sql4)) 
{
	# code...
	$pdf->Cell(5,1,$resultado4['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado4['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado4['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado4['votos'], 1,0,'C');
	$pdf->Cell(4,1,$resultado4['situacao'], 1,1,'C');


}


$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'SAO JOAO', 1,1,'C');
$pdf->Ln(1);


//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,0,'C');
$pdf->Cell(4,1,'STATUS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado5=mysql_fetch_array($exe_sql5)) 
{
	# code...
	$pdf->Cell(5,1,$resultado5['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado5['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado5['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado5['votos'], 1,0,'C');
	$pdf->Cell(4,1,$resultado5['situacao'], 1,1,'C');


}


$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'TABOAO', 1,1,'C');
$pdf->Ln(1);


//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,0,'C');
$pdf->Cell(4,1,'STATUS', 1,1,'C');





$pdf->SetFont('Arial','',11);









while ($resultado6=mysql_fetch_array($exe_sql6)) 
{
	# code...
	$pdf->Cell(5,1,$resultado6['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado6['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado6['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado6['votos'], 1,0,'C');
	$pdf->Cell(4,1,$resultado6['situacao'], 1,1,'C');


}

$pdf->Output();











?>