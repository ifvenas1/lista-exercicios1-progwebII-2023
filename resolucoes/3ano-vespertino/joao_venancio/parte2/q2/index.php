<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h2>Formulário para medidor de energia</h1>
		
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Indique seu consumo:</h2>
			<form action="receber.php" method="post">
				<label>Informe o valor em quilowatts-hora:
					<input type="number" id="kwh" name="kwh" step="0.1"  value="10" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
