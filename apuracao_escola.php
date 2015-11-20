<?php

$sql="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Teatro Adamastor%' GROUP by nome_candidato ORDER BY `nomeescola` DESC";

$sql1_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Teatro Adamastor%'";

$sql2="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Zumbi%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql2_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Zumbi%'";

$sql3="
SELECT num_candidato,nome_candidato,regiao, nomeescola,SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Zilda%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql3_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Zilda%'";

$sql4="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%GLORINHA%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql4_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%GLORINHA%'";

$sql5="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Svaa%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql5_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Svaa%'";

$sql6="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Dona Benta%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql6_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Dona Benta%'";

$sql7="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Perseu%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql7_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Perseu%'";

$sql8="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Manoel de Paiva%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql8_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Manoel de Paiva%'";

$sql9="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Walter%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql9_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Walter%'";

$sql10="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Faustino%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql10_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Faustino%'";

$sql11="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Da Emilia%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql11_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Da Emilia%'";

$sql12="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Hamilton Felix%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql12_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Hamilton Felix%'";

$sql13="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%SILVIA%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql13_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%SILVIA%'";

$sql14="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Amadeu%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql14_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Amadeu%'";

$sql15="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%PADRE CONRADO %' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql15_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%PADRE CONRADO %'";

$sql16="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Cerqueira%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql16_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Cerqueira%'";

$sql17="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Euclides%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql17_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Euclides%'";

$sql18="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Edson%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql18_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Edson%'";

$sql19="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Manoel Resende%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql19_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Manoel Resende%'";

$sql20="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Dorival%' GROUP by nome_candidato ORDER BY `votos` DESC";

$sql20_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Dorival%'";

$sql21="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Inez%' GROUP by nome_candidato ORDER BY `votos` 
DESC";

$sql21_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Inez%'";

$sql22="
SELECT num_candidato,nome_candidato,regiao, nomeescola, SUM(votos) as votos FROM `dadosapuracao` where nomeescola LIKE'%Pimentas%' GROUP by nome_candidato ORDER BY `votos` DESC";
$conect = mysql_connect("localhost", "root", "");

$sql22_1 = "select SUM(votos) as total from dadosapuracao where nomeescola LIKE'%Pimentas%'";

if (!$conect) die ("<h1>FALHA NA CONEXÃO DO BANCO DE DADOS!</h1>");

$db = mysql_select_db("apuracao");
mysql_set_charset("utf8");
$exe_sql=mysql_query($sql) or die (mysql_error());
$exe_sql1_1=mysql_query($sql1_1) or die (mysql_error());

$exe_sql2=mysql_query($sql2) or die (mysql_error());
$exe_sql2_1=mysql_query($sql2_1) or die (mysql_error());

$exe_sql3=mysql_query($sql3) or die (mysql_error());
$exe_sql3_1=mysql_query($sql3_1) or die (mysql_error());

$exe_sql4=mysql_query($sql4) or die (mysql_error());
$exe_sql4_1=mysql_query($sql4_1) or die (mysql_error());

$exe_sql5=mysql_query($sql5) or die (mysql_error());
$exe_sql5_1=mysql_query($sql5_1) or die (mysql_error());

$exe_sql6=mysql_query($sql6) or die (mysql_error());
$exe_sql6_1=mysql_query($sql6_1) or die (mysql_error());

$exe_sql7=mysql_query($sql7) or die (mysql_error());
$exe_sql7_1=mysql_query($sql7_1) or die (mysql_error());

$exe_sql8=mysql_query($sql8) or die (mysql_error());
$exe_sql8_1=mysql_query($sql8_1) or die (mysql_error());

$exe_sql9=mysql_query($sql9) or die (mysql_error());
$exe_sql9_1=mysql_query($sql9_1) or die (mysql_error());

$exe_sql10=mysql_query($sql10) or die (mysql_error());
$exe_sql10_1=mysql_query($sql10_1) or die (mysql_error());

$exe_sql11=mysql_query($sql11) or die (mysql_error());
$exe_sql11_1=mysql_query($sql11_1) or die (mysql_error());

$exe_sql12=mysql_query($sql12) or die (mysql_error());
$exe_sql12_1=mysql_query($sql12_1) or die (mysql_error());

$exe_sql13=mysql_query($sql13) or die (mysql_error());
$exe_sql13_1=mysql_query($sql13_1) or die (mysql_error());

$exe_sql14=mysql_query($sql14) or die (mysql_error());
$exe_sql14_1=mysql_query($sql14_1) or die (mysql_error());

$exe_sql15=mysql_query($sql15) or die (mysql_error());
$exe_sql15_1=mysql_query($sql15_1) or die (mysql_error());

$exe_sql16=mysql_query($sql16) or die (mysql_error());
$exe_sql16_1=mysql_query($sql16_1) or die (mysql_error());

$exe_sql17=mysql_query($sql17) or die (mysql_error());
$exe_sql17_1=mysql_query($sql17_1) or die (mysql_error());

$exe_sql18=mysql_query($sql18) or die (mysql_error());
$exe_sql18_1=mysql_query($sql18_1) or die (mysql_error());

$exe_sql19=mysql_query($sql19) or die (mysql_error());
$exe_sql19_1=mysql_query($sql19_1) or die (mysql_error());

$exe_sql20=mysql_query($sql20) or die (mysql_error());
$exe_sql20_1=mysql_query($sql20_1) or die (mysql_error());

$exe_sql21=mysql_query($sql21) or die (mysql_error());
$exe_sql21_1=mysql_query($sql21_1) or die (mysql_error());

$exe_sql22=mysql_query($sql22) or die (mysql_error());
$exe_sql22_1=mysql_query($sql22_1) or die (mysql_error());

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
$pdf->Cell(28,1,'BOLETIM APURAÇÃO DOS VOTOS VALIDADOS NAS URNAS POR ESCOLA', 1,1,'C');
$pdf->Ln(1);


//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'1º Teatro Adamastor, AV: Monteiro Lobato, nº 734 - Macedo', 1,1,'C');
$pdf->Ln(1);

while ($resultado1_1=mysql_fetch_array($exe_sql1_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado1_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');







$pdf->SetFont('Arial','',11);









while ($resultado=mysql_fetch_array($exe_sql)) 
{
	# code...
	$pdf->Cell(5,1,$resultado['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'2º EPG Zumbi dos Palmares Av: Bom Jesus Lapa, nº 610 - Bonsucesso', 1,1,'C');
$pdf->Ln(1);

while ($resultado2_1=mysql_fetch_array($exe_sql2_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado2_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');







$pdf->SetFont('Arial','',11);









while ($resultado2=mysql_fetch_array($exe_sql2)) 
{
	# code...
	$pdf->Cell(5,1,$resultado2['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado2['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado2['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado2['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'3º EPG Zilda Furini Fanganiello R: Aracaju, nº 458 - Jd. Leblon', 1,1,'C');
$pdf->Ln(1);

while ($resultado3_1=mysql_fetch_array($exe_sql3_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado3_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');







$pdf->SetFont('Arial','',11);









while ($resultado3=mysql_fetch_array($exe_sql3)) 
{
	# code...
	$pdf->Cell(5,1,$resultado3['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado3['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado3['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado3['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'4º EPG GLORINHA PIMENTEL Rua: Pedra Lavada, 829 - Jardim Castanha', 1,1,'C');
$pdf->Ln(1);

while ($resultado4_1=mysql_fetch_array($exe_sql4_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado4_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');







$pdf->SetFont('Arial','',11);









while ($resultado4=mysql_fetch_array($exe_sql4)) 
{
	# code...
	$pdf->Cell(5,1,$resultado4['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado4['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado4['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado4['votos'], 1,1,'C');



}


$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'5º EPG Svaa Evans AV: Benjamin Harris Hannicut, nº 1854 -  Vila Rio', 1,1,'C');
$pdf->Ln(1);

while ($resultado5_1=mysql_fetch_array($exe_sql5_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado5_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');







$pdf->SetFont('Arial','',11);









while ($resultado5=mysql_fetch_array($exe_sql5)) 
{
	# code...
	$pdf->Cell(5,1,$resultado5['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado5['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado5['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado5['votos'], 1,1,'C');
	


}


$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'6º EPG Dona Benta R: Taipu nº 176 -  São João', 1,1,'C');
$pdf->Ln(1);

while ($resultado6_1=mysql_fetch_array($exe_sql6_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado6_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado6=mysql_fetch_array($exe_sql6)) 
{
	# code...
	$pdf->Cell(5,1,$resultado6['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado6['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado6['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado6['votos'], 1,1,'C');



}


$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'7° EPG Perseu Abramo R: Bela Vista do Paraíso, nº 53, Presidente Dutra', 1,1,'C');
$pdf->Ln(1);

while ($resultado7_1=mysql_fetch_array($exe_sql7_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado7_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado7=mysql_fetch_array($exe_sql7)) 
{
	# code...
	$pdf->Cell(5,1,$resultado7['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado7['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado7['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado7['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'8º EPG Manoel de Paiva AV: Francisco Conde, nº 600 - Vila Rosália', 1,1,'C');
$pdf->Ln(1);

while ($resultado8_1=mysql_fetch_array($exe_sql8_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado8_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado8=mysql_fetch_array($exe_sql8)) 
{
	# code...
	$pdf->Cell(5,1,$resultado8['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado8['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado8['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado8['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'9°  EPG Walter Efigênio- Céu Parque São Miguel Rua: Joaquim Moreira S/N - Parque são Miguel', 1,1,'C');
$pdf->Ln(1);

while ($resultado9_1=mysql_fetch_array($exe_sql9_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado9_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado9=mysql_fetch_array($exe_sql9)) 
{
	# code...
	$pdf->Cell(5,1,$resultado9['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado9['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado9['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado9['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'10º EPG Faustino Ramalho AV: Palmira Rossi,s/nº Recreio São Jorge', 1,1,'C');
$pdf->Ln(1);

while ($resultado10_1=mysql_fetch_array($exe_sql10_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado10_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado10=mysql_fetch_array($exe_sql10)) 
{
	# code...
	$pdf->Cell(5,1,$resultado10['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado10['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado10['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado10['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'11º EPG Da Emilia R: João Loprete, nº 234 -Vila São João', 1,1,'C');
$pdf->Ln(1);
while ($resultado11_1=mysql_fetch_array($exe_sql11_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado11_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado11=mysql_fetch_array($exe_sql11)) 
{
	# code...
	$pdf->Cell(5,1,$resultado11['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado11['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado11['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado11['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'12º EPG Hamilton Felix AV: Atalaia do Norte nº 544 - Cumbica', 1,1,'C');
$pdf->Ln(1);
while ($resultado12_1=mysql_fetch_array($exe_sql12_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado12_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado12=mysql_fetch_array($exe_sql12)) 
{
	# code...
	$pdf->Cell(5,1,$resultado12['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado12['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado12['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado12['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'13º EPG SILVIA DE CASSIA MATIAS Rua: Conceição da Barra, S/N - Jardim Santa Inês', 1,1,'C');
$pdf->Ln(1);

while ($resultado13_1=mysql_fetch_array($exe_sql13_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado13_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado13=mysql_fetch_array($exe_sql13)) 
{
	# code...
	$pdf->Cell(5,1,$resultado13['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado13['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado13['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado13['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'14º EPG Amadeu Pereira Lima R: Reriutaba, nº 51 Uirapuru', 1,1,'C');
$pdf->Ln(1);
while ($resultado14_1=mysql_fetch_array($exe_sql14_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado14_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado14=mysql_fetch_array($exe_sql14)) 
{
	# code...
	$pdf->Cell(5,1,$resultado14['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado14['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado14['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado14['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'15º E.E PADRE CONRADO Avenida Bom Clima, 556 - Bom clima', 1,1,'C');
$pdf->Ln(1);

while ($resultado15_1=mysql_fetch_array($exe_sql15_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado15_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado15=mysql_fetch_array($exe_sql15)) 
{
	# code...
	$pdf->Cell(5,1,$resultado15['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado15['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado15['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado15['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'16º EPG Cerqueira Cesar AV: Domingos Fanganiello nº 171 - Ponte Grande', 1,1,'C');
$pdf->Ln(1);
while ($resultado16_1=mysql_fetch_array($exe_sql16_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado16_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado16=mysql_fetch_array($exe_sql16)) 
{
	# code...
	$pdf->Cell(5,1,$resultado16['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado16['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado16['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado16['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'17° EPG Euclides da Cunha R: Luiz Caputo nº 23 - Fortaleza', 1,1,'C');
$pdf->Ln(1);
while ($resultado17_1=mysql_fetch_array($exe_sql17_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado17_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado17=mysql_fetch_array($exe_sql17)) 
{
	# code...
	$pdf->Cell(5,1,$resultado17['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado17['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado17['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado17['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'18º EPG Edson Nunes Malecka - Céu Ponte Alta R: Pernambuco, nº 836 - Ponte Alta', 1,1,'C');
$pdf->Ln(1);
while ($resultado18_1=mysql_fetch_array($exe_sql18_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado18_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado18=mysql_fetch_array($exe_sql18)) 
{
	# code...
	$pdf->Cell(5,1,$resultado18['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado18['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado18['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado18['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'19º EPG Manoel Resende da Silva R: Benedito Thieso nº 213 - Bambi', 1,1,'C');
$pdf->Ln(1);

while ($resultado19_1=mysql_fetch_array($exe_sql19_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado19_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado19=mysql_fetch_array($exe_sql19)) 
{
	# code...
	$pdf->Cell(5,1,$resultado19['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado19['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado19['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado19['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'20º EPG Dorival Caymi AV: da Granja nº 578 - Guaracy', 1,1,'C');
$pdf->Ln(1);

while ($resultado20_1=mysql_fetch_array($exe_sql20_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado20_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado20=mysql_fetch_array($exe_sql20)) 
{
	# code...
	$pdf->Cell(5,1,$resultado20['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado20['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado20['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado20['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'21º EPG Inez Rizzatto Rodrigues R: Padre Marcos, nº 437 - Aracilia', 1,1,'C');
$pdf->Ln(1);
while ($resultado21_1=mysql_fetch_array($exe_sql21_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado21_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado21=mysql_fetch_array($exe_sql21)) 
{
	# code...
	$pdf->Cell(5,1,$resultado21['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado21['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado21['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado21['votos'], 1,1,'C');



}

$pdf->Ln(1);
//separador regiao
$pdf->SetFont('Arial','B',12);
$pdf->Cell(28,1,'22º Céu Pimentas Estrada do Caminho Velho, nº 351 - Pimentas', 1,1,'C');
$pdf->Ln(1);

while ($resultado22_1=mysql_fetch_array($exe_sql22_1)) 
{
	# code...
	
	$pdf->Cell(10,1,'TOTAL DE VOTOS GERAL', 1,0,'C');
	
	$pdf->Cell(5,1,$resultado22_1['total'], 1,1,'C');
$pdf->Ln(1);

}

//titulo das tabelas
$pdf->SetFont('times','B',11);
$pdf->Cell(5,1,'NUMERO DO CANDIDATO', 1,0,'C');
$pdf->Cell(10,1,'NOME DO CANDIDATO', 1,0,'C');
$pdf->Cell(4,1,'REGIAO', 1,0,'C');
$pdf->Cell(5,1,'QUANTIDADES DE VOTOS', 1,1,'C');






$pdf->SetFont('Arial','',11);









while ($resultado22=mysql_fetch_array($exe_sql22)) 
{
	# code...
	$pdf->Cell(5,1,$resultado22['num_candidato'], 1,0,'C');
	$pdf->Cell(10,1,utf8_decode($resultado22['nome_candidato']), 1,0,'C');
	$pdf->Cell(4,1,utf8_decode($resultado22['regiao']), 1,0,'C');
	$pdf->Cell(5,1,$resultado22['votos'], 1,1,'C');



}

$pdf->Output();











?>