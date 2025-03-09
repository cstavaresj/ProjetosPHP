<?php include_once("email.php");
      include("mensagens.php");?>
<html>
	<head>
		<title>Consulta de Estoque</title>
	</head>
	<body class="body2" background= "img/almox.jpg">
		<center>
			<h1>Estoque de Produtos</h1>
			<?php 
			 echo "<table class='comBordaSimples' border=1>";
			 echo "<tr>";
			 echo "<th>ORDEM</th>";
			 echo "<th>CÓDIGO</th>";
			 echo "<th>NOME</th>";
			 echo "<th>MARCA</th>";
			 echo "<th>FABRICANTE</th>";
			 echo "<th>UNIDADE DE MEDIDA</th>";
			 echo "<th>VALOR</th>";
			 echo "<th>QUANTIDADE</th>";
			 echo "<th>LOCALIZAÇÃO</th>";
			 echo "<th>OBSERVAÇÃO</th>";
			 echo "<th>EDITAR</th>";
			 echo "<th>APAGAR</th>";
			 
			 $sql = "SELECT * FROM produto";
			 $resultado_produto = mysqli_query($conexao, $sql);

			 print "<br><br>";
			 while($row_produto = mysqli_fetch_array($resultado_produto)){
			     $ordem = $row_produto['ordem'];
			     $codigo = $row_produto['codigo'];
			     $nome = $row_produto['nome'];
			     $marca = $row_produto['marca'];
			     $fabricante = $row_produto['fabricante'];
			     $unidade = $row_produto['unidade'];
			     $valor = $row_produto['valor'];
			     $quantidade = $row_produto['quantidade'];
			     $localizacao = $row_produto['localizacao'];
			     $observacao = $row_produto['observacao'];
			     
			     echo "<tr>";
			         echo "<td>$ordem</td>";
			         echo "<td>".$codigo."</td>";
			         echo "<td>".$nome."</td>";
			         echo "<td>".$marca."</td>";
			         echo "<td>".$fabricante."</td>";
			         echo "<td>".$unidade."</td>";
			         echo "<td>".$valor."</td>";
			         echo "<td>".$quantidade."</td>";
			         echo "<td>".$localizacao."</td>";
			         echo "<td>".$observacao."</td>";
			         echo "<td><a href='editar.php?ordem=" . $row_produto['ordem'] . "'><img src='img/editar.png' width='20' height='20'></a></td>";
			         echo "<td><a href='apagar.php?ordem=" . $row_produto['ordem'] . "'><img src='img/apagar.png' width='20' height='20'></a></td>";
			     echo "</tr>";
			 }
			 mysqli_close($conexao);
			 echo "</table>";
			?>
		</center>
	</body>
</htm>