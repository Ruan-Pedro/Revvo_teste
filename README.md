# Revvo_teste
Teste Técnico para a vaga de desenvolvedor na Revvo

# Funcionalidades
-Listar cursos cadastrados
- Inserir novos cursos
- Atualizar informações de cursos existentes
- Excluir cursos do banco de dados

# Tecnologias Utilizadas
- PHP
- MySQL
- HTML
- CSS
- JavaScript

# Requisitos
Para executar a aplicação localmente, é necessário ter instalado:

- PHP (versão 8 ou superior)
- MySQL (ou outro banco de dados compatível)
- Servidor web (por exemplo, Apache ou Nginx)

# Instalação
## Clonar o repositório com a função:
git clone https://github.com/Ruan-Pedro/Revvo_teste.git

## Criar um banco de dados
- Criar um novo banco de dados no MySQL com base nos comando que estão no arquivo: src/models/revvo.sql"

## configurar o arquivo config/config.php
- fazer as alterações necessárias do arquivo 
- este arquivo foi enviado ao git pois tem apenas dados locais e senha de baixa segurança, o que não é recomendado em produção, foi enviado apenas para o teste

## Iniciar o servidor
- utilize o comando: php -S localhost.47:8080 (ou ou seu IP ou porta desejada)

## Acessar a aplicação
- abrir o navegador com a url: http://localhost:8080/index.php

# Como Usar
- Na página inicial, há uma lista de cursos cadastrados no banco de dados
- Clique no botão "VER CURSO" para exibir os dados do curso em um modal e para editar/excluir o curso
- Para adicionar um novo curso, clique no botão "ADICIONAR CURSO" no ultimo card da lista de cursos