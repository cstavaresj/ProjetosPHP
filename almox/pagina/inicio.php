<html>
	<head>
		<title>Página Inicial</title>
		 <?php include("email.php"); ?>
	</head>
	<body class="body2" background= "img/almox.jpg">
        <center>
		<h1>Olá, <?php echo "$NOME" ?>! Bem vindo a página de cadastro e consulta de produtos do Almoxarifado!</h1>
		<h2>Escolha o que deseja fazer:</h2>
		<table>
			<tr>
				<td>
					<figure>
						<a href="cadastro.php" target="tela2">
							<img src="img/cadastrar.png" title="Cadastrar Produto" width="200" height="200">
							<figcaption> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cadastrar</figcaption>
						</a>
					</figure>
				</td>
			 	<td>
			 		<figure>
			 			<a href="consulta.php" target="tela2">
							<img src="img/consultar.png" title="Consultar Produto" width="200" height="200">
							<figcaption>&nbsp;&nbsp;&nbsp;Consultar</figcaption>
						</a>
					</figure>
				</td>
			 </tr>
		 </table>
		 </center>
	</body>
</html>
