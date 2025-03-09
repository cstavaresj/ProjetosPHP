<html>
	<head>
		<title>Página de Menu</title>
		<?php 
            include("cabecalho.php");
            include("validalogin.php");
        ?>
	</head>
	<body bgcolor="#333"> 
        <ul>
            <li><a class="active" href="inicio.php" target="tela2">Home</a></li>
            <li><a href="cadastro.php" target="tela2">Cadastrar Produto</a></li>
            <li><a href="consulta.php" target="tela2">Consultar Estoque </a></li>
            <li><a href="sobre.php" target="tela2">Sobre </a></li>
            <li style="float:right; border-left:1px solid #bbb"><a href="logout.php" target="_top">Sair</a></li>
            <li style="float:right; border-left:1px solid #bbb"><a href="areadousuario.php" target="tela2">Área do Usuário</a></li>
        </ul>
	</body>
</html>
