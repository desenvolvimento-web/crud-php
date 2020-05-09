# CRUD PHP

> ⚠ _A ideia do repositório **não** é advogar pelo não-uso de bibliotecas e frameworks, mas servir como uma prova de conceito e uma forma de instruir melhor os iniciantes na linguagem._

Exemplo de aplicação CRUD usando PHP _puro_, sem bibliotecas ou frameworks.

## O que posso encontrar aqui?

- O uso do Composer.
- Separação de: acesso aos dados, apresentação/visualização (HTML) e controle de entrada HTTP _(opa, lembrou de um tal de MVC?)_.
- O uso do filtro de _input_ de usuário.
- O uso de _prepared statements_ ao invés de concatenar ou interpolar _input_ de usuário em strings para envitar [SQL Injection](https://www.php.net/manual/en/security.database.sql-injection.php).
- O uso de Ajax _puro_, **sem** jQuery, com recursos modernos do JavaScript como `async`/`await` e `fetch`.
