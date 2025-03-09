<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Almox</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="css/estilo_login.css" />
        <?php include("valida_campos.php");?>
    </head>
    <body background= "img/almox.jpg">
    <h1><a href="index.php"><img src="img/logo.png" title="Logo"></a></h1>
        <div class="container" >
            <a class="links" id="paralogin"></a>
            <a class="links" id="pararecuperar"></a>
            <a class="links" id="paracadastro"></a>
			<div class="content"> 
				
				<!--FORMULÁRIO DE RECUPERAR-->
				<?php include("perdipassword.php");?>

                <!--FORMULÁRIO DE CADASTRO-->
                <div id="cadastro">
                    <form method="post" action="addusuario.php"> 
                        <h1>Cadastro</h1> 
          
                        <p> 
                            <label for="nome_cad">Nome</label>
                            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Ex.: João da Silva" />
                        </p>
                        <p> 
                            <label for="email_cad">Email</label>
                            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="Ex.: joaodasilva@gmail.com" />
                        </p>
           
                        <p> 
                            <label for="senha_cad">Sua senha</label>
                            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Ex.: 123456"/>
                        </p>
           
                        <p> 
                            <input type="submit" value="Cadastrar"/> 
                        </p>

                        <p class="link">  
                            Já tem conta?
                            <a href="#paralogin"> Ir para Login </a>
                        </p>
                    </form>
                </div>

		<!--FORMULÁRIO DE LOGIN-->
                <div id="login">
                    <form method="post" action="login.php" id="formlogin" name="formlogin"> 
                        <h1>Login</h1> 
						<?php include("mensagens.php");?>
                        <p> 
                            <label for="email_login">Email</label>
                            <input id="email_login" name="email_login" required="required" type="email" placeholder="Ex.: joaodasilva@gmail.com" />
                        </p>
           
                        <p>
                            <label for="senha_login">Senha</label>
                            <input type="password" name="senha_login" id="senha_login" required="required" placeholder="Ex.: 123456" /> 
                        </p>

                        <p> 
                            <input type="submit" value="LOGAR" /> 
                        </p>

                        <p class="link">
                            Esqueceu sua senha?
							<a href="#pararecuperar">Clique Aqui</a>
                        </p>
						<br><br><br><br>
                                           
                        <p class="link">
                            Ainda não tem conta?
                            <a href="#paracadastro">Cadastre-se</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>  
    </body>
</html>