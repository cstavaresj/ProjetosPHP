<?php
    include("email.php");
    include("mensagens.php");
    
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $fabricante = $_POST['fabricante'];
    $unidade = $_POST['unidade'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $localizacao = $_POST['localizacao'];
    $observacao = $_POST['observacao'];
    
    $sql = "INSERT INTO produto (codigo, nome, marca, fabricante, unidade, valor, quantidade, localizacao, observacao) VALUES('$codigo','$nome','$marca','$fabricante','$unidade','$valor','$quantidade','$localizacao','$observacao')";
    $resultado_produto = mysqli_query($conexao,$sql);
    
    echo "<center><h1>";
    if (!$conexao) {
        echo "<script>alert('Erro ao tentar cadastrar o produto $nome! Tente novamente!');</script>";
    }
    echo "</h1></center>";
    mysqli_close($conexao);
?>

<html>
    <center>
    <h2>Escolha o que deseja fazer:</h2>
	<body class="body2" background= "img/almox.jpg"><table>
		<tr>
			<td>
				<figure>
					<a href="cadastro.php" target="tela2">
						<img src="img/cadastrar.png" width="200" height="200">
						<figcaption>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Novo Cadastro</figcaption>
					</a>
				</figure>
			</td>
			<td>
				<figure>
			 		<a href="consulta.php" target="tela2">
						<img src="img/consultar.png" width="200" height="200">
						<figcaption>&nbsp;&nbsp;&nbsp;Consultar Estoque</figcaption>
					</a>
				</figure>
			</td>
		</tr>
	</table>
	</center>
	</body>
</html>
