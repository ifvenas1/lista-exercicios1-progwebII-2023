<?php

	/*2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.
	Entrada: 7
	Saída: 
	Tabuada do número 7:
	7 x 1 = 7
	7 x 2 = 14
	7 x 3 = 21
	7 x 4 = 28
	*/

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1>Formulário de Calcular a Tabuada</h1>
	</header>

	<div class="container">
		<div class="box formulario">

		<h2>Tabuada</h2>

			<form action="resposta.php" method="post">

				<label>Número:
					<input type="number" name="n" required>
				</label>

				<button name="enviar"> Enviar </button>

			</form>

		</div>		
	</div>

</body>
</html>