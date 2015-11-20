<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEMA DE APURAÇÃO</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script language='JavaScript'>
    function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
      if (tecla==8 || tecla==0) return true;
    else  return false;
    }
    }
    </script>







</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.html">
                        SEISEMA DE APURAÇÃO
                    </a>
                </li>
                <li>
                    <a href="index1.php">APURAR VOTOS</a>
                </li>
                <li>
                    <a href="relatorio.html">RELATÓRIOS</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"> <br>
                        
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                    </div>
                </div>
            </div> <br>



<form method="post" action="enviar.php" autocomplete="off">
    <div class="container-fluid">
  <div class="row">





<legend>LOCALIZAÇÃO</legend>

<!-- ESCOLAS A SEREM SELECIONADAS -->
<div class="col-md-9">
  <label>NOME DA ESCOLA</label>  
    <select id="nomeescola" name="nomeescola" class="form-control ">
      <option></option>
      <option>1º Teatro Adamastor, AV: Monteiro Lobato, nº 734 – Macedo</option>
      <option>2º EPG Zumbi dos Palmares Av: Bom Jesus Lapa, nº 610 – Bonsucesso</option>
      <option>3º EPG Zilda Furini Fanganiello R: Aracaju, nº 458 – Jd. Leblon</option>
      <option>4º EPG GLORINHA PIMENTEL Rua: Pedra Lavada, 829 - Jardim Castanha</option>
      <option>5º EPG Svaa Evans AV: Benjamin Harris Hannicut, nº 1854 -  Vila Rio</option>
      <option>6º EPG Dona Benta R: Taipu nº 176 –  São João</option>
      <option>7° EPG Perseu Abramo R: Bela Vista do Paraíso, nº 53, Presidente Dutra</option>
      <option>8º EPG Manoel de Paiva AV: Francisco Conde, nº 600 – Vila Rosália</option>
      <option>9°  EPG Walter Efigênio- Céu Parque São Miguel Rua: Joaquim Moreira S/N – Parque são Miguel</option>
      <option>10º EPG Faustino Ramalho AV: Palmira Rossi,s/nº Recreio São Jorge</option>
      <option>11º EPG Da Emilia R: João Loprete, nº 234 –Vila São João</option>
      <option>12º EPG Hamilton Felix AV: Atalaia do Norte nº 544 – Cumbica</option>
      <option>13º EPG SILVIA DE CASSIA MATIAS Rua: Conceição da Barra, S/N - Jardim Santa Inês</option>      
      <option>14º EPG Amadeu Pereira Lima R: Reriutaba, nº 51 Uirapuru</option>
      <option>15º E.E PADRE CONRADO Avenida Bom Clima, 556 - Bom clima</option>
      <option>16º EPG Cerqueira Cesar AV: Domingos Fanganiello nº 171 – Ponte Grande</option>
      <option>17° EPG Euclides da Cunha R: Luiz Caputo nº 23 – Fortaleza</option>
      <option>18º EPG Edson Nunes Malecka - Céu Ponte Alta R: Pernambuco, nº 836 – Ponte Alta</option>
      <option>19º EPG Manoel Resende da Silva R: Benedito Thieso nº 213 – Bambi</option>
      <option>20º EPG Dorival Caymi AV: da Granja nº 578 – Guaracy</option>
      <option>21º EPG Inez Rizzatto Rodrigues R: Padre Marcos, nº 437 – Aracilia</option>
      <option>22º Céu Pimentas Estrada do Caminho Velho, nº 351 – Pimentas</option>
    </select>
  </div>

  <!-- NÚMERO DA SALA A SER SELECIONADO -->
<div class="col-md-3">
  <label>SALA</label>  
    <select id="sala" name="sala" class="form-control ">
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>               <br><br>
  </div>





<legend>CANDIDATOS</legend>

<!-- Select Basic -->


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="1" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="FARLEY MESSIAS BORGES DE SOUZA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>

  

  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="2" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SUELI DA SILVA MOREIRA ZACARIAS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="3" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SERGIO DE FREITAS JUNIOR" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="4" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="EVANDRO SILVA MARQUES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="5" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="TAMMY REGINA FERNANDES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="6" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="GILMARIA DA SILVA FERREIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)">    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="7" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ROSELITO SANTOS SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="8" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="AURENI SERAFIM DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="9" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="NOEMIA MARIA DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="10" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="WELLINTON BEZERRA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="11" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="(MARIAZINHA) MARIA APARECIDA DA SILVA
" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="12" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ANTONIA BEZERRA DE CARVALHO
" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="13" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="(PRISCILA)ERIDAN DOS SANTOS ALMEIDA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="14" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSÉ FABIANO MORENO GONÇAVES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>

  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="15" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA HELENA ALVES MACEDO SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="16" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SELVIRA MOITINHO DE ANDRADE" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="17" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="TATIANE PATRICIO ARRECHE NETO " readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="18" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="FABIANA PEREIRA DE FRANÇA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="19" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA KATIA DELMONTES DOS SANTOS " readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="20" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARILDA SAMPAIO DE JESUS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="21" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="CARLA DUQUE DE FRANÇA THEODORO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="22" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSEILDO BERNADINO COSTA JUNIOR" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="23" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSEFINA MARIA DE JESUS BISPO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="24" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="NAIR CECILIA REIS PORTO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="25" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SUELI APARECIDA MARQUES DOMINGOS " readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="26" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCIA LIRA JACUNDINO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="27" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSÉ HENRIQUE DAS NEVES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="28" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCELA RODRIGUES DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="29" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="DEVAIR NUNES VARGAS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="30" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ODILA FATIMA PEREIRA DOS SANTOS " readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="31" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="THATIANE SOUSA THEODORO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="32" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ANA PAULA MARTINES MORAES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="33" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ROSANA DANIELA DE PAULA CORDEIRO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="34" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ROSEMEIRE DE SOUZA MENCONCINI" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="35" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SONIA ALVES DA PAZ" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="36" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ANDREIA FERREIRA BORTOLOTTI" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="37" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="LUZIA PEREIRA DE SENA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="38" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ERIKA ANTONIA DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="39" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="DENISE DAS DORES PEREIRA PAIXÃO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="40" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="DAYSE DE LIMA SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="41" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ELIAS MARINHO DOS REIS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="42" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ANA MARLI RODRIGUES MOTA CUNHA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="43" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ALESSANDRA MARIA DE ALMEIDA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="44" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JULIANA GOMES CORREA DE LIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="45" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SABINO PINTO SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="46" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCOS ROBERTO FERREIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="47" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="PATRICIA NASCIMENTO DE MATOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="48" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ROSANGELA PEDRO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="49" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="RAQUEL DOS SANTOS SOTELINO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="50" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="BENEDITA GOMES DE OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="51" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="WANILDA ROSA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="52" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SANDRA REGINA DE JESUS LANDIM " readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="53" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ROBSON SOARES DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="54" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JEIZA CAVALCANTE LIMA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="55" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="DANIELLY NAILANY LIMA ARAUJO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="56" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="VALDEJANE LUCIA SILVA DE SIQUEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="57" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA APARECIDA BARBOSA GOMES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="58" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="IRISMAR CARVALHO DE SOUZA TEIXEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="59" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="GLAUCIA SOUSA MIRANDA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="60" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA APARECIDA LIMA DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="61" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="GERALDA VIEIRA ROCHA SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="62" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="BERTULINO SANTOS SANTANAS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="63" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SAMARA SANTOS SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="64" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="CLAUDIO ROBERTO SOARES COELHO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>

    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="65" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA JOSÉ PAVAN MOLLEDO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="66" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="DANIELA DE MELO CARACY SOUZA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="67" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="NILZA PENHA DO NASCIMENTO DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="68" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="WILMA APARECIDA MACHADO SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="69" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ANELISE ANDRADE LIMA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="70" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSE PAULO DA SILVA SOBRINHO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="71" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ELISANGELA RODRIGUES DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


          <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="72" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA SUELY SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


            <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="73" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JESSICA DO NASCIMENTO SAMPAIO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="74" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="KATIA CRISTINA FERRON LEITE" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="75" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCO ANTONIO VIEIRA COUTO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="76" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ALUISIO BATISTA DE AMORIM" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="77" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="PEDRO HENRIQUE ALBUQUERQUE DE SIQUEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="78" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SILVIO LUIZ SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="79" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JONATAS MACENA OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="80" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MÓISES BRAZ DA HORA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="81" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="GLORIA DA PENHA VILAÇA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


         <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="82" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOANA MARES CORREIA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="83" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SANDRA DA SILVA SANTANA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="84" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SUELLEM MARTA DOS SANTOS VIEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


               <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="85" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="CICERO COSMO PEREIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


                <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="86" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ISAIAS GOMES DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


                <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="87" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ELIANA SOUZA SANTOS BRITO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


                 <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="88" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="LUCILENE CRISTINA DOS SANTOS SOUZA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


                  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="89" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="VANUZA APARECIDA DE LIMA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="90" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="CLOVIS MACEDO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="91" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JAQUELINE DE LIMA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="92" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ESTER BENONES DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="93" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="KELLY CRISTINA DE MOURA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


         <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="94" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JUSSARA ROSELI FULCO " readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


          <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="95" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="HEYB HAYANE SANTOS PAULO DO NASCIMENTO " readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="96" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSÉ ALOISIO NATAL DE SOUZA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="97" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="LUCIANA APARECIDA SILVA SANTOS " readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


               <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="98" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="VANGELIA GOMES CAMILO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


                 <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="99" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="AMÉLIA LEITE GOMES PAVAM" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="100" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MÁRCIA APARECIDA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>



  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="101" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="LUCIO MAURO NUNES PEREIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="102" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="EUNICE DE SANTANA ARAUJO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="103" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ROBERVAL TRAJANO BARROS CAVALCANTE " readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="104" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ADRIANA FERNANDES ALMEIDA BENDITO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


         <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="105" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="GESLAINE QUINTINO SOBRAL" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


          <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="106" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SANDRO ALDÊNIO FERREIRA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="107" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="APARECIDA DE SOUZA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="108" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="BRASILENE CAVALCANTE DE BRAGANÇA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="109" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="EDLEUDES EVANGELISTA SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="110" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="REGIANE BUENO DOS SANTOS " readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="111" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ADAILTON BATISTA DE SENA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="112" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA EDWINA SANTOS CRUZ" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="113" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ANA CLAUDIA CASTRO LIMA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="114" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ZINALEIA NOGUEIRA SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="115" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA ELISABETE DA SILVA MELO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>



        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="116" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="VANESSA DOS SANTOS SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


         <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="117" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="REJANE APARECIDA FLAUZINO SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="118" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ALECSANDRA DA SILVA OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="119" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="FERNANDA LOPES DE OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="120" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="PATRICIA ALVES SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="121" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSÉ EDIVALDO ROCHA LINS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="122" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="IRAQUITAN SOUZA DE ARAÚJO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="123" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ROBERTO CORDEIRO DE ALMEIDA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="124" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ALEXANDRE ORNELAS DE ALMEIDA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="125" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="VERA LUCIA MORELLI DE ARAUJO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="126" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ERIVALDO FRANCISCO MARTINS DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="127" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="REGINA MARIA ABREU DA CONCEIÇÃO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


         <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="128" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="HEITOR VINICIUS PINHEIRO DOS SANTOS VILLELA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="129" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ELIZETE GERALDO DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="130" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="LUCIMAR NOEMIA LEAL DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="131" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA SILVA DE SOUZA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="132" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA LÚCIA COSTA ALMEIDA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="133" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ANGELO CARDOSO DO AMARAL" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="134" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="CIBELE CRISTINA DA SILVA TAKAMATSU" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="135" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ALEANDRO FERREIRA DE SOUZA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="136" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="EDSON DO NASCIMENTO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="137" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCIA INES CONCEIÇÃO DE OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="138" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="FRANCIELEN BERNARDO DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


         <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="139" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="LUCILENE FERREIRA MEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


          <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="140" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="FABIANA LINS DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


            <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="141" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="VANDERLI BARBOSA DOS SANTOS AMARAL" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


              <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="142" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="EDILSON PIRES PEREIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="143" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="FABIO MOREIRA DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="144" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSE CARLOS DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="145" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="NELSON DO NASCIMENTO SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="146" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOELMA ALVES DE OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


         <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="147" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="GISLENE VIANA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="148" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MICHELE DA SILVA LIMA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="149" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="VILMA PORTO SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


              <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="150" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="LEILA MARIA NAPOLI DO AMARAL" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="151" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="FATIMA MARIA SANTOS SILVA SOARES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


              <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="152" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ITAMI ALVES SIQUEIRA ROCHA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="153" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCIA REGINA MENDES MILITÃO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="154" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="GERALDO PAULINO DO NASCIMENTO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="155" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSE CARLOS MORENO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="156" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCELO DE SOUSA SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


          <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="157" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSENALDO WILLIAM ARAUJO SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


            <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="158" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SAMUEL OLIVEIRA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="159" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SIDNEY CICERO CAMARGO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="160" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="PAULO CESAR TRINDADE" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="161" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCIO AUGUSTO DIAS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="162" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JEUVÁ SUELI PEREIRA DE ANDRADE BARROS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="163" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SANDRA BRAGA DE SOUZA SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="164" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="WAGNER MAURÍCIO PALERMO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


         <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="165" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA AMELIA BARBOSA DUÓ" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="166" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="CREUZA MARTINS DE SENA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>



           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="167" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA DA CONCEIÇÃO DA SILVA MATOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>



           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="168" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="CONCEIÇÃO ALVES DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="169" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ROSEMEIRE OLIVEIRA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="170" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="KATIANA DIAS SANTANA RIBEIRO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="171" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA APARECIDA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="172" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="WALNIR HENRIQUE RODRIGUES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="173" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="GISELDA DIAS DE OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="174" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="CARLOS MAGNO DOMINGOS DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="175" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="GENIVALDO FELIX DE SOUZA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="176" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="RUBENS CLARO PEREIRA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="177" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="LILIANE SANTOS CARDOSO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


          <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="178" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCOS LUIZ DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


            <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="179" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ANTONIO PIRES DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="180" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ANA LUCIA MARIA GOMES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="181" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="TELMA PIRES ALVES DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="182" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="DALVANI SILVA SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="183" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOSE ROBERTO ALVES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="184" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="FATIMA REGINA DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>



    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="185" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCOS AURELIO DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="186" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MICHELE DOMINGUES DE OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="187" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARIA APARECIDA SOARES TRINDADE" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="188" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JUSSARA DE CASSIA SOARES MACEDO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


         <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="189" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="CLEONICE MARIA DE OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="190" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="RENALDO ANTONIO RODRIGUES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


            <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="191" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ODETE DE LOURDES RAMOS DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="192" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="GILVAN ALVES MARTINS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="193" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SANDRA SUELY VIEIRA DA SILVA DUARTE" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>



  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="194" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SIDNEY MENEZES CURSI" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>



  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="195" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCOS VINICIUS DE OLIVEIRA CAMPOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="196" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="DAYANE FARIAS SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="197" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ROGERIO APARECIDO DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="198" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="CLEUSA BERNARDO DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="199" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARTHA ALMEIDA SANTANA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


         <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="200" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="PIMENTAS" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="EDINA FERREIRA LIMA COSTA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="201" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="DEBORA MARTINS FELIX DA SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


           <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="202" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="MARCOS VINICIUS PERINETTI" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


             <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="203" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SAMUEL JOSE RAMOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


               <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="204" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ANA PAULA FREITAS SANTANA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="205" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="BENEDITO APARECIDO DE SOUZA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>



  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="206" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="BONSUCESSO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="IGOR ANDRÉ RIBEIRO SANTANA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="207" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="FRANCILEIA CRISTINA DANTAS DA SILVA E SILVA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="208" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ABELARDIA PEREIRA DE ANDRADE" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="209" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="DÁRIO DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>



    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="210" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JECILENE MONTEIRO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


     <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="211" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JOAQUINA DONIZETTI NUNES" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="212" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CENTRO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="IVANILDO SOARES BEZERRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


       <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="213" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="LUCAS DE OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="214" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="JANLEIDE FERNANDES DOS SANTOS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


        <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="215" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="VERONICA RAFAEL DE SENA CARVALHO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


          <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="216" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="NADIA SILVA BARBOZA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


  <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="217" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="VALQUÍRIA APARECIDA JULIO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


   <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="218" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="SÃO JOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="ALCILEIA MACHADO" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


    <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="219" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="TABOÃO" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="SILVANETE DE OLIVEIRA" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    
  </div>


      <div class="col-md-2">
  <label>N°</label>  
    <input id="num_candidato" name="num_candidato" type="text" value="220" readonly="" placeholder="" class="form-control ">    
  </div> 
<div class="col-md-2">
  <label>REGIÃO</label>  
    <input id="regiao" name="regiao" type="text" placeholder="" value="CUMBICA" readonly="" class="form-control ">    
  </div>
<div class="col-md-6">
  <label>NOME</label>  
    <input id="nome_candidado" name="nome_candidado" type="text" placeholder="" value="LUCIANA REGINA DIAS" readonly=""  class="form-control ">    
  </div>
<div class="col-md-2">
  <label>VOTOS</label>  
    <input id="votos" name="votos" type="text" placeholder="" value="" redonly="" class="form-control " required="" maxlength="4" onkeypress="return SomenteNumero(event)" >    <br><br><br>
  </div>



<div class="form-group">
  <label class="col-md-3 control-label" for="button1id"></label>
  <div class="col-lg-6">
    <button   type="submit" class="btn btn-success">Gravar</button>
    <button   type="reset" class="btn btn-danger">Cancelar</button>
  </div>
</div>   



</form>

</div>
</div>



           
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
