<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>PROGRAMAÇÃO WEB</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</style>
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula10.png" alt="Topo">
	</div>
	<br><br><br><br>
	<h1>TECTREINAMENTOS - TRATAMENTO DE DADOS COM PHP</h1><hr><BR>

	<div class="pesquisa">
		<h6>Lucas Iwasaka Dairel</h6>
	</div>

	<div class="conteudo">
		<?php

			$nome = $_POST["nome"];
			$renda = $_POST["renda"];

			echo "Olá, $nome! Muito obrigado por seu contato.<br>";
			if ($renda>=2000) {
					echo "Parabéns! Seu crédito está <strong>aprovado!</strong>";
			}elseif ($renda<2000) {
				echo "Infelizmente neste momento não poderemos conceder crédito, clique em VOLTAR para acessar a página principal.";
			}		
		
		?>
		<br><br>
		<a href="index.html"> << Voltar </a>


	</div>

	<div class="rodape">
		<h2>TECTREINAMENTOS - PROGRAMAÇÃO WEB COM PHP</h2><br>
		<h2>PÁGINA DE TRATAMENTO DE DADOS</h2>
	</div>
	<footer>
		<h3>Todos os direitos reservados - desenvolvido por TECTREINAMENTOS</h3>
	</footer>



</body>
</html>