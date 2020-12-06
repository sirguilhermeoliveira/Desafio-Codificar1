# Desafio-Codificar

> Tarefas[Desafios]

##1.0[done]
#Criar um repositório no Github e compartilhar o link com a equipe da Codificar

##2.0[done]
#Utilizando preferencialmente a linguagem PHP e o framework Laravel, criar a tela de cadastro de orçamento.

##2.1[done]
#Os campos de cadastro serão: id, cliente, data e hora do orçamento, vendedor, descrição, valor orçado. A tela deve permitir também a edição.

##2.2[done]
#Armazená-los em um banco de dados que julgar mais adequado (SQL, NoSQL, search server, etc).

##3.0[done]
#Criar uma tela de pesquisa de orçamento

##3.1[done]
#A tela de pesquisa deverá ter filtro por intervalo de datas, nome do cliente e nome do vendedor. 

##3.2[done]
#A tela deverá conter uma tabela com os dados já filtrados e listados por ordem decrescente da data de cadastro do orçamento

##3.3[done]
#A tela deverá conter as ações de editar e remover os orçamentos realizados

> Respostas Desafios

##Controller: /Form/OficinaController
#Contém os controllers da Oficina(CRUD+Search).

##Model: Oficina
#Contém a Model da Oficina.

##Migrations: oficinas_table
#Contém as Migrations da Oficina.

##Rotas: web.php
#Contém as rotas da Oficina.

##Views: views/
#Contém as views de acesso a Oficina.

##Login: Controllers/Auth/ + views/auth/ + views/layout/ + views/home
#Contém o Login feito para a Oficina.

> Instalação

``` bash
# Instala as dependências e abre o servidor
composer install
php artisan serve
