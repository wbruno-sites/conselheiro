<?php
//include('banco.php');
//include('config.php');


$host = "localhost";
$user = "root";
$pass = "";
$banco = "apuracao";

$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());




	if( $_POST ){
mysql_set_charset('utf8');

	foreach( $_POST as $campo => $valor ){//Separa o post em campos e valores
			$campos[]  = $campo;//Monta um array somente com os campos
			$valores[] = strtoupper ("'$valor'"); //Monta um array somente como os valores
		}
		$campos  = implode( ",", $campos );//Converte o array em string separando por virgula (Campos)	
				$valores = implode( ",", $valores );//Converte o array em string separando por virgula (Valores)
	
//echo $campos;

$sql = "insert into dadosapuracao ( $campos ) values ( $valores )";
//echo $sql;
$retorno= mysql_query($sql);

//echo $sql;



	if( $retorno ){
			
	     echo "<script>

alert('Voto cadastrado com sucesso!!!')</script>";
        echo "<script>window.location.href='index1.php'</script>";
		}else{
		     echo "Não foi possivel cadastrar!";?><a href="index.html"><b>Retornar</a><?php
		}
	}
?>
