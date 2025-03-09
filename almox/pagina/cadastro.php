<html>
	<head>
		<title>Cadastro</title>
		<?php
		  include("email.php");
        ?>
		
	</head>
	<body class="body2" background= "img/almox.jpg">
	<center>
        <h1>Cadastro de Produto</h1>
		<form name="form" method="post" action="addproduto.php?msg=4">
			<label for="codigo">Código:</label>
			<input type="number" name="codigo" size="4" placeholder="Ex.: 001" required><br>
			
			<label for="nome">Nome do Produto:</label>
			<input type="text" name="nome" placeholder="Ex.: Folha A4" required><br>
			
			<label for="marca">Marca:</label>
			<input type="text" name="marca" placeholder="Ex.: Chamex" required><br>
			
			<label for="fabricante">Fabricante:</label>
			<input type="text" name="fabricante" required placeholder="Ex.:  International Paper do Brasil" required><br>
			
			<label for="unidade">Unidade de Medida:</label>
			<input type="text" name="unidade" size="17" placeholder="Ex.: Pacote com 500" required><br>
			
			<label for="valor">Valor (R$):</label>
			<input type="text" name="valor" size="8" placeholder="Ex.: 27,90" required><br>
			
			<label for="quantidade">Quantidade:</label>
			<input type="number" name="quantidade" size="4" placeholder="Ex.: 35" required><br>
			
			<label for="localizacao">Localização:</label>
			<input type="text" name="localizacao" placeholder="Ex.: Prateleira C5" required><br>
			
			<label for="observacao">Observação:</label>
			<input type="text" name="observacao" cols="80" placeholder="Ex.: Cor branca" required>
			
			<br><br>
			<input type="submit" value="Cadastrar">
			<input type="reset" value="Limpar">
		</form>
		</center>
	</body>
</html>