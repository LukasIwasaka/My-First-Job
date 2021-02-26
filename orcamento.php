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
	<h1>ORÇAMENTO</h1><hr><BR>

	<div class="conteudo">
		<?php

			$data = $_POST["data"];
			$garantia = $_POST["garantia"];
			$servico = $_POST["servico"];
			$aparelho = $_POST["aparelho"];
			$cliente = $_POST["cliente"];

			echo "<strong>Detalhes do Orçamento: </strong><br><br>";
			echo "Data $data <br><br>Tempo de Garantia após a entrega $garantia:<br><br>";
			echo "Aparelho para manutenção: $aparelho<br><br>";
			echo "Serviço a ser executado:<br><br>";

			switch ($servico) {
						case 'Formatação':
							echo "O valor total será de R$ 70,00 a mão de obra mais R$ 50,00 em equipamentos, totalizando R$ 120,00";
							break;
						case 'Troca de Peças':
							echo "O valor total será de R$ 100,00 a mão de obra mais R$ 50,00 em equipamentos, totalizando R$ 150,00";
							break;
						case 'Outros':
							echo "O valor total será de R$ 150,00 a mão de obra mais R$ 50,00 em equipamentos, totalizando R$ 200,00<br>";
							break;						
						default:
							echo "Infelizmente não é possível realizar este serviço no momento";
							break;
					}
						echo "<br><strong>Declaro estar de acordo com os valores e informações acima descritos</strong><br> $cliente.";
		?>
		<br><br>

		<p>Assinatura:________________________________</p><br>
		<p>Data: ___/___/___</p><br>
		<p>Ao assinar, você concorda com todos os termos de serviço e garantia.</p>
		<form>
			<input type="button" value="Imprimir orçamento" onclick="window.print()">
		</form><br>

		<a href="index.html"> << Voltar </a>
	</div>

	<footer>
		<h3>Todos os direitos reservados - desenvolvido por TECTREINAMENTOS</h3>
	</footer>


</body>
</html>