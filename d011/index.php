<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Reajustador de preços</title>
</head>
<body>
	<?php
		$precoInicial = $_GET['preco'] ?? 0;
		$reajuste = $_GET['reajuste'] ?? 0;
	 ?>
	<main>
		<h2>Reajustador de Preços</h2>
		<form>
			<label for="preco">Preço do produto (R$)</label>
			<input type="number" name="preco" id="preco" value="<?=$precoInicial?>">
			<label for="reajuste">Qual será o percentual de reajuste? <strong><span id="valor"></span>%</strong></label>
			<input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" value="<?=$reajuste?>">
			<input type="submit" value="Reajustar">
		</form>
	</main>
	<section>
		<h3>Resultado do reajuste</h3>
		<?php
			$precoFinal = $precoInicial * (1 + ($reajuste/100));
			$precoInicial = number_format($precoInicial, 2, ".", ",");
			$precoFinal = number_format($precoFinal, 2, ".", ",");
			echo "<p>O produto que custava R$ $precoInicial, com <strong>$reajuste% de aumento</strong>, ";
			echo "vai passa a custar <strong>R$ $precoFinal</strong> a partir de agora</p>"
		?>
	</section>
	<script src="script.js"></script>
</body>
</html>
