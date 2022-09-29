 <?php 
if(!isset($_SESSION)){

  session_start();
  date_default_timezone_set("America/Sao_Paulo");
  set_time_limit(0);

  //$id_empresa = $_SESSION['id_empresa'];
  //$id_usuario = $_SESSION['id_usuario']; 
 

//$nr_controle_voucher2 = $_POST['nr_controle_voucher2'];
//$nr_controle_pix2 = $_POST['nr_controle_pix2'];


}

// require_once ('../controle/conexao.php');
//require_once ('../controle/action.php');
//require_once ('../controle/verifica_login.php');
//print_r($_SESSION);exit;  // mostra o resultado dos dados do usuario*/
//var_dump($_POST);exit;
//var_dump($_SESSION);exit;


?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Laudo - Multi Laudos Telemedicina</title>
	<?php 
	//INCLUINDO O STYLE E OS LINKS GERAIS
	include '../geral/head.php';
	?> 

	<!-- style somente dessa pagina-->
	<style> 



		.container-fluid{
			background-color: transparent;
		}


		@page {
			margin-top: 50px;
			margin-left: 50px;
			margin-right: 50px;
			margin-bottom: 0px;              
		}         


		.header {
			position: fixed;
			top: -20px;
			left: 0;
			right: 0;
			width: 100%; 
			text-align: center;
			background: #;
			padding: 0px;

		}

		.header img {
			width: 690px;
		}


		body {                
			font-size: 10;
			padding: : 0px;
			font-family: "Open Sans", sans-serif;            
			margin-top: 125px;
			margin-left: 0px;
			margin-right: 0px;
			margin-bottom: 110px; 
		}


		.footer {
			position: fixed;        
			bottom: 50px;
			left: 0;
			width: 100%;
			text-align: center;
			background: #;
			padding: 0px;
		}

		.footer img {
			width: 690px;
		}

		.footer .page: after {
			content: counter(page);
		}

		p {           
			margin: 1px; 
		}



		.linha {
			border: 1px solid black;
			border-collapse: collapse;
		}









	</style>
	<!-- fim style somente dessa pagina-->
</head>


	<body>


<!-- ESSAS DIV HEADER E FOOTER TEM QUE SER AQUI PARA REPETIR EM TODAS AS PAGINAS -->
<div class="header" >
<!-- IMAGEM CABEÇALHO -->
<img src="http://localhost/multi_laudos_novo/img/topo_laudo_oit.png" alt=""> 
<!--
<img src="https://portalsaudefacil-sistema.com.br/img/topo_voucher.png" alt=""> -->


<br>



<div class="row">
	<table width=100%>

		<tr width=100%>
			<span style="color: #ffcc80; font-size: 20px;"><em><b>Nº Controle Laudo:</b></em></span>
			<span> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
			<span style="color: #bdbdbd; font-size: 20px;"><b>101010101</b></span> 
		</tr>
		<tr width=100%>

			<span style="color: #bdbdbd; font-size: 12px;">pesquise a autenticidade desse laudo em nosso portal www.multilaudos.com.br pelo numero acima<</span> 

		</tr>

	</table>
</div>
 

</div>

<div class="footer">
 <!-- IMAGEM RODAPÉ PAGINA -->
<img src="http://localhost/multi_laudos_novo/img/rodape_laudo.png" alt="">
<!-- <img src="https://portalsaudefacil-sistema.com.br/img/rodape_voucher.png" alt="">-->
</div>



<!-- ESSAS DIV HEADER E FOOTER TEM QUE SER AQUI PARA REPETIR EM TODAS AS PAGINAS -->








<!--Main layout-->
<main>
	<div class="container-fluid">
		<!-- Inicio Section -->
		<section class="section">               

			<!-- Primeira Row -->
			<div class="row align-items-center justify-content-center">             





<!-- TITULO -->
<div class="row align-items-center justify-content-center">
<table border="1" width=100% class="linha">
<tr>
<td align="center" class="titulo_lista" style="background:#ffffff; color:#424242; font-size: 18px; height:40px;"><b>FOLHA DE LEITURA RADIOLÓGICA - CLASSIFICAÇÃO INTERNACIONAL DE RADIOGRAFIAS DE PNEUMOCONIOSE</b></td>
</tr>		
</table>
</div>



<!-- LINHA ESPAÇO SOMENTE -->
<div class="row">
	<table width=100%>
		<tr width=100%>
			<td></td>
		</tr>
	</table>
</div>
<!-- LINHA ESPAÇO SOMENTE -->




<!-- NOME PACIENTE  -->
<div class="row align-items-center justify-content-center">
<table border="1" width=100% class="linha">
<tr>
<td width="70%" align="middle">Nome: Allan Marciel Ricardo</td>
<td width="30%">Data RX: 16/10/1979</td>
</tr>		
</table>
</div>


<!-- LINHA ESPAÇO SOMENTE -->
<div class="row">
	<table width=100%>
		<tr width=100%>
			<td></td>
		</tr>
	</table>
</div>
<!-- LINHA ESPAÇO SOMENTE -->



<!-- DADOS LEITOR MÉDICO -->
<div class="row align-items-center justify-content-center">
<table border="1" width=100% class="linha">
<tr>
<td width="35%" align="middle">Nº do RX: ABCD-ABCD-ABCD</td>
<td width="35%">Leitor: Dr. Pedro Inácio Dias</td>
<td width="30%">Data Leitura: 16/10/1979</td>
</tr>		
</table>
</div>



<!-- LINHA ESPAÇO SOMENTE -->
<div class="row">
	<table width=100%>
		<tr width=100%>
			<td></td>
		</tr>
	</table>
</div>
<!-- LINHA ESPAÇO SOMENTE -->




<!-- DADOS LEITOR MÉDICO -->
<div class="row align-items-center justify-content-center">
<table border="1" width=100% class="linha">
<tr>
	<td width="50%">
		
		<br>
		<br>
		<br>


	</td>

	<td width="50%">

		<br>
		<br>
		<br>

		

	</td>
</tr>		
</table>
</div>











			</div>
			<!-- Fim - Primeira Row  -->
		</section>
		<!-- Fim Section -->
	</div>
</main>
<!--Main layout-->


    <?php 
    //INCLUINDO O SCRIPT GERAL
    include '../geral/script.php';
    ?> 
    
     
    <!--Custom scripts só dessa pagina-->
    <script>
      


    </script>
    <!--Fim Custom scripts só dessa pagina-->






	
	</body>
</html>