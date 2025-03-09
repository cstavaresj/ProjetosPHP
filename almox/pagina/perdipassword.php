<div id="recuperar">
	<form name="form" method="post">
<?php
        if( !empty($_POST) ){
        // processar o pedido
            mysql_connect('localhost', 'root', '');  // ligar à base de dados
            mysql_select_db('almox');  // escolher a base de dados pretendida
 
            $user = mysql_real_escape_string($_POST['EMAIL']);
            $q = mysql_query("SELECT * FROM usuario WHERE EMAIL = '$user'");
 
            if( mysql_num_rows($q) == 1 ){
            // o utilizador existe, vamos gerar um link único e enviá-lo para o e-mail
 
                // gerar a chave
                $chave = sha1(uniqid( mt_rand(), true));
 
                // guardar este par de valores na tabela para confirmar mais tarde
                $conf = mysql_query("INSERT INTO recuperacao VALUES ('$user', '$chave')");
	   
                if( mysql_affected_rows() == 1 ){
 
                    $link = "http://localhost/almox/pagina/recuperar.php?utilizador=$user&confirmacao=$chave";
                    
                    if(mail($user, 'Recuperação de senha', 'Olá '.$user.', visite este link '.$link) ){
                        echo '<p>Foi enviado para o email '.$user.' um link para recuperaçao da sua senha! Verifique sua caixa de entrada ou spam.</p>';
                        
                    }
                    else {
                        echo '<p>Houve um erro ao enviar o email! Talvez o seu servidor não esteja configurado ou não tenha permissão para enviar emails.</p>';
                    }
 
                    // Apenas para testar o link, essa linha mostra o email que o usuário receberia
                    echo '<p><h3><br><br><br>(Como este é um servidor local, não será enviado email ao usuário, apenas para fins de demonstrar que o link de recuperar senha está funcionando, segue o email que o usuário receberia)<h3>
                        <br><br>Olá '.$user.', para recuperar sua senha, entre neste link: '.$link.'</p>' ;
 
                }
                else {
                    echo '<p>Não foi possível gerar o endereço único</p>';
                }
            }
            else {
                echo "<script type='text/javascript'>
                        alert('Este email não está cadastrado em nosso banco de dados!');
                        window.location='http://localhost/almox/pagina/#paracadastro';
                    </script>";
            }
        }
        else {
            // mostrar formulário de recuperação
?>
			<h1>Recuperar Senha</h1>
			<p>
    			<label for="EMAIL">Informe seu E-mail:</label>
    			<input name="EMAIL" id="EMAIL" required="required" type="email" placeholder="Ex.: joaodasilva@gmail.com"  />
			</p>
		
			<p>
				<input type="submit" value="Recuperar" />
			</p>
		
			<p class="link">  
        		Voltar
            	<a href="#paralogin"> Ir para Login </a>
			</p>
			<br><br><br><br>
		
			<p class="link">
        		Ainda não tem conta?
        		<a href="#paracadastro">Cadastre-se</a>
			</p>  
	
<?php
        } //fecha o ultimo else
?>
	</form>
</div>