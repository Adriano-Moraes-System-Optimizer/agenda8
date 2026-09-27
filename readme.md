# 📂 Projeto Agenda 8 - Sistema Web PHP/MySQL (CRUD + Autenticação)

Repositório desenvolvido para a entrega da **Agenda 8** da disciplina de Programação Web II / Desenvolvimento de Sistemas (Centro Paula Souza).

## 🚀 Sobre o Projeto
O sistema consiste em uma aplicação web modularizada em **PHP** e **MySQLi**, focada em boas práticas de desenvolvimento backend, segurança de rotas e experiência do usuário utilizando o framework visual **W3.CSS**.

## 🛠️ Funcionalidades e Módulos
* **Sistema de Autenticação:** Tela de login protegida por sessões HTTP (`$_SESSION`) para controle de acesso restrito.
* **Segurança de Rotas:** Arquivos de guarda (`verificarAcesso.php`) que impedem o acesso direto às páginas administrativas sem autenticação prévia.
* **Modularização:** Reaproveitamento de código através de `require_once` (`conexaoBD.php`, `cabecalho.php`, `rodape.php`).
* **CRUD Completo de Amigos:**
  * **Create:** Cadastro de novos registros via formulário POST.
  * **Read:** Listagem dinâmica dos registros em tabela estilizada.
  * **Update:** Edição de dados via passagem de parâmetros `GET`.
  * **Delete:** Exclusão segura com tela de confirmação.

## 🗄️ Estrutura do Banco de Dados (`pwii`)
O sistema utiliza duas tabelas principais:
1. **`usuario`**: Armazena as credenciais de acesso ao sistema (ex: usuário `gabi`, senha `gabi123`).
2. **`amigo`**: Armazena os dados do CRUD (`idamigo`, `nome`, `apelido`, `email`).

## 📊 Apresentação e Demonstração em Vídeo
A apresentação completa do projeto, documentando o passo a passo técnico e os testes práticos de todas as rotinas, pode ser acessada através do link abaixo:
👉 [Link para a Apresentação no Youtube]([INSIRA_O_LINK_DA_SUA_APRESENTACAO_AQUI](https://youtu.be/00WTOjFUq6c))

## 💻 Como Executar Localmente
1. Certifique-se de ter o **XAMPP** (ou ambiente compatível com Apache e MySQL) instalado e rodando.
2. Clone ou copie a pasta `agenda8` para dentro do diretório `htdocs` do seu servidor local.
3. Importe o banco de dados `pwii` e as tabelas necessárias via phpMyAdmin.
4. Acesse no navegador: `http://localhost/agenda8/index.php`