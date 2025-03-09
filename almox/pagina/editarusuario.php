<?php
    include("email.php");
    
    $ID = filter_input(INPUT_POST,'ID',FILTER_SANITIZE_NUMBER_INT);
    $NOVONOME = filter_input(INPUT_POST,'novonome_login',FILTER_SANITIZE_STRING);
    $NOVOEMAIL = filter_input(INPUT_POST,'novoemail_login',FILTER_SANITIZE_STRING);
    $NOVASENHA = filter_input(INPUT_POST,'novasenha_login',FILTER_SANITIZE_STRING);
    
    $sql = "UPDATE usuario SET NOME='$NOVONOME', EMAIL='$NOVOEMAIL', SENHA='$NOVASENHA' WHERE ID='$ID'";
    $resultado_usuario = mysqli_query($conexao,$sql);
    
    echo "<center><h1>";
    if ($conexao) {
    	if($NOVOEMAIL!=$EMAIL){
    		$_SESSION = array();
			if (ini_get("session.use_cookies"))
    		{
        		$params = session_get_cookie_params();
        		setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    		}
			session_destroy();
	        echo "<script>top.window.location = 'index.php?msg=8';</script>";
         }
        else{
       header('Location: areadousuario.php?msg=7');}
    }else{
        echo "<script>alert('Erro ao alterar seus dados!');
              window.location='areadousuario.php?ID=$ID';</script>";
    }
    echo "</h1></center>";
    mysqli_close($conexao);
?>