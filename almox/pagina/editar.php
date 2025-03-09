<?php 
    include("email.php");
    
    $ordem = filter_input(INPUT_GET, 'ordem', FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT * FROM produto WHERE ordem = '$ordem'";
    $resultado_produto = mysqli_query($conexao, $sql);
    $row_produto = mysqli_fetch_assoc($resultado_produto);
?>
<html>
	<head>
		<title>Editar Cadastro</title>
	</head>
	<body class="body2" background= "img/almox.jpg">
	<center>
		<form name="form" method="post" action="editarproduto.php">
			<input type="hidden" name="ordem" value="<?php echo $row_produto['ordem'];?>">	
			
			<label for="codigo">Código:</label>
			 <input type="number" name="codigo" size="4" value="<?php echo $row_produto['codigo'];?>" required><br>
			
			<label for="nome">Nome do Produto:</label>
			<input type="text" name="nome" value="<?php echo $row_produto['nome'];?>" required><br>
			
			<label for="marca">Marca:</label>
			<input type="text" name="marca" value="<?php echo $row_produto['marca'];?>" required><br>
			
			<label for="fabricante">Fabricante:</label>
			<input type="text" name="fabricante" value="<?php echo $row_produto['fabricante'];?>" required><br>
			
			<label for="unidade">Unidade de Medida:</label>
			<input type="text" name="unidade" size="17" value="<?php echo $row_produto['unidade'];?>" required><br>
			
			<label for="valor">Valor (R$):</label>
			<input type="text" name="valor" size="8" value="<?php echo $row_produto['valor'];?>" required><br>
			
			<label for="quantidade">Quantidade:</label>
			<input type="number" name="quantidade" size="4" value="<?php echo $row_produto['quantidade'];?>" required><br>
			
			<label for="localizacao">Localização:</label>
			<input type="text" name="localizacao" value="<?php echo $row_produto['localizacao'];?>" required><br>
			
			<label for="observacao">Observação:</label>
			<input type="text" name="observacao" cols="80" value="<?php echo $row_produto['observacao'];?>" required>
			<br><br>
			<input type="submit" value="Salvar edição">
		</form>
		</center>
	</body>
</html>