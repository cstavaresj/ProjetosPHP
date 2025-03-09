<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Recuperar Senha</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="css/estilo_login.css" />
        <?php include("valida_campos.php");?>
    </head>
    <body background= "img/almox.jpg">
	<h1><a href="index.php"><img src="img/logo.png" title="Logo"></a></h1>
    	<?php
    	   if(empty($_GET['utilizador']) || empty($_GET['confirmacao']))
    	       die('<p>Não é possível alterar a password: dados em falta</p>');
    	   
            mysql_connect('localhost', 'root', '');
            mysql_select_db('almox');
            
            $user = mysql_real_escape_string($_GET['utilizador']);
            $hash = mysql_real_escape_string($_GET['confirmacao']);
            
            $q = mysql_query("SELECT COUNT(*) FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
            
            if( mysql_result($q, 0, 0) == "1" ){
                // Se os dados estão corretos: eliminar o pedido e permitir alterar a password
                
                echo '   
                    <div class="container" >
                        <div class="content">
                            <div id="cadastro">
                                <form method="post" action="alterarsenha.php">
                                    <h1>Alterar senha</h1>
                                    <p>
                                        <input id="email" name="email" required="required" type="hidden" value ="'.$user.'" placeholder="Ex.: teste@teste.com"/>
                                    </p>
                        
                                    <p>
                                        <label for="senha_new">Digite sua nova senha:</label>
                                        <input id="senha_new" name="senha_new" required="required" type="password" placeholder="Ex.: 1234"/>
                                    </p>
           
                                    <p>
                                        <input type="submit" value="Salvar senha"/> 
                                    </p>

                                </form>
                            </div>
                        </div>
                </div>';   
            }
            else {
                echo '<h2>Não é possível alterar a senha: dados incorretos</h2>';
 
            }
            mysql_query("DELETE FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
?>            
    </body>
</html>
