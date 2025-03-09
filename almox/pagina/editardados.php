<?php 
    include("email.php");
    
    $ID = filter_input(INPUT_GET, 'ID', FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT * FROM usuario WHERE ID = '$ID'";
    $resultado_usuario = mysqli_query($conexao, $sql);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<html>
	<head>
		<title>Editar Dados</title>
	</head>
	<body class="body2" background= "img/almox.jpg">
	<center>
		<form name="form" method="post" action="editarusuario.php">
			<input type="hidden" name="ID" value="<?php echo $row_usuario['ID'];?>">	
			
			<label for="nome_login">Nome:</label>
			<input type="text" name="novonome_login" value="<?php echo $row_usuario['NOME'];?>" required="required"><br>
            
            <label for="email_login">Email:</label>
			<input type="email" name="novoemail_login" value="<?php echo $row_usuario['EMAIL'];?>" required="required"><br>

			<label for="senha_login">Nova Senha:</label>
			<input type="password" name="novasenha_login" value="<?php echo $row_usuario['SENHA'];?>" required="required"><br>

			<br><br>
			<input type="submit" value="Alterar Dados">
			<h3>Atenção! Ao alterar seu email, vocé será desconectado da sessão e será necessário efetuar login com o novo email!</h3>
		</form>
		</center>
	</body>
</html>