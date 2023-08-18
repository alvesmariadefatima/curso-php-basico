<html>
	<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="_css/estilo.css">
	<title>Aula 04 - Curso de PHP para Iniciantes</title>
	<body>
	<style>
		html {
		font: 15pt Arial;
		}
		body {
			background: url("wallpaper-php.jpg") no-repeat top center fixed;
			background-size: cover;
		}

		div::before {
			content: " Curso de PHP para Iniciantes - by Gustavo Guanabara ";
			font: 10pt Arial;
			font-weight: bold;
			color: white;
			background-color: #273747;
			padding: 5px;
			display: block;
			position: relative;
			top: -10px;
			left: -10px;
			width: 560px;
		}

		div {
			background-color: rgba(255,255,255,.8);
			margin: 100px auto 100px auto;
			padding: 10px;
			width: 550px;
			min-height:300px;
		}

		a {
			color: #273747;
			text-decoration: none;
			font-weight: bold;
			font: 11pt Helvetica;
		}

		a:hover {
			text-decoration: underline;
		}

		span.foco {
			font-weight: bold;
			color: #7e050c;
		}

		.botao {
			background-color: #273747;
			color: white;
			padding: 8px;
			box-shadow: 2px 2px 1px #aaaaaa;
		}
	</style>
	<div>
		<?php
			$nome = "Maria de Fátima";
			$idade = 22;
			
			echo "$nome tem $idade anos!";
		?>
	</div>
	</body>
	</head>
</html>