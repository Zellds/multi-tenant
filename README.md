# Multi Tenant

## Introdução

O Multi Tenant é um conceito de arquitetura de software onde uma única instância de aplicação é capaz de atender a
múltiplos clientes, chamados de "tenants" (inquilinos), de forma isolada. Cada tenant pode representar uma organização,
empresa, usuário ou qualquer unidade que requeira um ambiente de dados separado e privacidade em uma aplicação.

## Objetivo do Projeto

O objetivo deste projeto de estudo é implementar uma pequena página de posts, permitindo criar, editar e visualizar
postagens. Foram criados 5 usuários (E-mail: user1@example.com, Senha: password). Cada usuário possui acesso a um ou
mais tenants, onde podem ver os posts e seus autores dentro desse tenant específico. No entanto, eles não têm permissão
para visualizar as postagens em tenants aos quais não pertencem.

O estudo foi conduzido através de pesquisas e palestras, estabelecendo um cenário no framework Laravel para a
implementação. Foram utilizadas rotas, modelos (models), migrações (migrations) e um banco de dados PostgreSQL como
base. A ferramenta DBeaver foi empregada para conectar, manipular e testar o banco de dados, permitindo a observação da
estrutura.

## Estrutura de Banco de Dados

### Tabela `tenants`

A tabela `tenants` é composta por colunas como `id, name` "representando a empresa à qual o tenant pertence"
e `description`.

Exemplo:

| id  | name      | descrição           |
|-----|-----------|---------------------|
| 1   | Empresa A | Tenant da Empresa A |
| 2   | Empresa B | Tenant da Empresa B |
| 3   | Empresa C | Tenant da Empresa C |
| ... | ...       | ...                 |

### Tabela `users`

A tabela `users` é definida por colunas como (id, name, email e password).

### Tabela `user_tenants`

A relação entre usuários e tenants é estabelecida em uma tabela separada chamada `user_tenants`, onde a primeira coluna
é `user_id` e a segunda coluna é `tenant_id`. Isso serve como chave primária, evitando que um usuário tenha o mesmo
tenant múltiplas vezes.

Exemplo:

| user_id | tenant_id |
|---------|-----------|
| 1       | 1         |
| 1       | 2         |
| 2       | 2         |
| 3       | 1         |
| 3       | 3         |
| ...     | ...       |

### Tabela `posts`

A tabela `posts` é definida por colunas como `id, user_id, tenant_id` e `content`, facilitando a busca para qual tenant
a postagem pertence e qual usuário é responsável pela criação.

Exemplo:

| id  | user_id | tenant_id | conteúdo           |
|-----|---------|-----------|--------------------|
| 1   | 1       | 1         | Conteúdo do Post 1 |
| 2   | 2       | 2         | Conteúdo do Post 2 |
| 3   | 1       | 2         | Conteúdo do Post 3 |
| 4   | 3       | 1         | Conteúdo do Post 4 |
| ... | ...     | ...       | ...                |
