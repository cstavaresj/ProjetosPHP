# 📘 ProjetosPHP

Este repositório contém um projeto desenvolvido em **PHP** com integração ao banco de dados **MySQL**, utilizando **HTML** e **CSS** para a interface web. O projeto, chamado "Almox", é um sistema integrado web para gerenciar um almoxarifado fictício, permitindo cadastrar, consultar e editar produtos. Ele também possui um sistema de login com funcionalidades para criar novos usuários e recuperar senhas perdidas.

---

## 🛠️ Requisitos

- **PHP** (versão 7.x ou superior) instalado.
- **MySQL Server** instalado e configurado.
- Servidor web como **Apache** (recomenda-se usar XAMPP ou WAMP para facilitar a configuração).
- Navegador web (Chrome, Firefox, etc.) para acessar o sistema.

---

## 📂 Estrutura do Repositório

O repositório contém uma pasta chamada `almox`. Dentro dela, estão os arquivos do projeto, incluindo os scripts PHP para a lógica do sistema, arquivos HTML e CSS para a interface web. Não há um script SQL pronto para criar o banco de dados, então será necessário criar as tabelas manualmente com base na lógica do sistema.

---

## ▶️ Como Executar os Códigos

1. **Configurar o Ambiente:**
   - Instale o XAMPP (ou outro servidor com Apache e MySQL).
   - Inicie o Apache e o MySQL no painel de controle do XAMPP.

2. **Configurar o Banco de Dados:**
   - Acesse o phpMyAdmin (geralmente em `http://localhost/phpmyadmin`).
   - Crie um novo banco de dados para o projeto.
   - Crie as tabelas necessárias (ex.: tabelas para produtos, usuários e senhas) com base na lógica do sistema. Verifique os scripts PHP para entender a estrutura esperada do banco.

3. **Copiar o Projeto:**
   - Clone ou baixe este repositório (veja "Como baixar o repositório" abaixo).
   - Copie a pasta `almox` para a pasta `htdocs` do XAMPP (ex.: `C:\xampp\htdocs`).

4. **Configurar a Conexão:**
   - Abra o arquivo de configuração do projeto (geralmente `config.php` ou similar) e ajuste os dados de conexão com o MySQL (usuário, senha, host, nome do banco).

5. **Acessar o Sistema:**
   - Abra o navegador e acesse `http://localhost/almox`.
   - Faça login ou crie um novo usuário para começar a usar o sistema.

---

## 📥 Como Baixar o Repositório

1. Clique no botão verde "Code" no topo da página do GitHub.
2. Selecione "Download ZIP" e extraia o arquivo no seu computador.
3. Ou use o Git: `git clone https://github.com/cstavaresj/ProjetosPHP.git`
