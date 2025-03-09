<html>
	<head>
		<title>Área do Usuário</title>
		<?php 
		       include_once("email.php");
		       include("mensagens.php");
        ?>
	</head>
	<body class="body2" background= "img/almox.jpg">
    	<center>
			<h1>Área do Usuário </h1>
			<h2>Olá, <?php echo "$NOME"; ?>! Bem vindo a Área do Usuário. Aqui você pode editar seus dados ou excluir sua conta. Escolha o que deseja fazer:</h2>
			<table>
				<tr>
					<td>
						<figure>
						<?php
                            echo "<a href='editardados.php?ID=$ID' target='tela2'>
                                    <img src='img/editar.png' title='Alterar Dados' width='200' height='200'>
                                    <figcaption> &nbsp; Alterar Dados</figcaption></a>";
                        ?>
						</figure>
					</td>
			 		<td>
			 			<figure>
                        <?php
                            echo "<a href='apagarusuario.php?ID=$ID' target='tela2'>
                                    <img src='img/apagar.png' title='ATENÇÃO! AO CLICAR EM (EXCLUIR CONTA), SUA CONTA SERÁ APAGADA E NÃO PODERÁ SER RECUPERADA!' width='200' height='200'>
                                    <figcaption> &nbsp; &nbsp; Excluir Conta</figcaption></a>";			 			
                        ?>
						</figure>
					</td>
			 	</tr>
			</table>
			<h3>Cuidado! Ao clicar em "Excluir Conta" sua conta será apagada e não poderá ser recuperada!</h3>
		</center>
	</body>
</html>