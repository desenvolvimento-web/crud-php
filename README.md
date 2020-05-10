# CRUD PHP

> ⚠ _A ideia do repositório **não** é advogar pelo não-uso de bibliotecas e frameworks, mas servir como uma prova de conceito e uma forma de instruir melhor os iniciantes na linguagem._

Exemplo de aplicação CRUD usando PHP _puro_, sem bibliotecas ou frameworks.

## O que posso encontrar aqui?

- O uso do Composer.
- Separação de: acesso aos dados, apresentação/visualização (HTML) e controle de entrada HTTP _(opa, lembrou de um tal de MVC?)_.
- O uso do filtro de _input_ de usuário.
- O uso de _prepared statements_ ao invés de concatenar ou interpolar _input_ de usuário em strings para evitar [SQL Injection](https://www.php.net/manual/en/security.database.sql-injection.php).
- O uso de Ajax _puro_, **sem** jQuery, com recursos modernos do JavaScript como `async`/`await` e `fetch`.

## Como rodar o projeto?

Assumindo que você já tenha o [PHP](https://www.php.net/manual/pt_BR/install.php) e o [Composer](https://getcomposer.org/download/) instalados, execute os comandos:
```bash
composer install
php -S localhost:8000 -t public/
```

## A estrutura de diretórios

- `public/` se refere a pasta pública da aplicação, aquela que será servida pelo web-server, onde ficam seus arquivos estáticos como JavaScript, CSS, imagens, fontes etc.
  - **`public/index.php` é o ponto de entrada da aplicação, é onde tudo começa.**
- `src/` é onde fica o código-fonte da nossa aplicação é uma abreviação de _source_.
  - `src/lib.php` é onde fica o código que é genérico o suficiente para ser utilizado em outras aplicações, sem modificações, `lib` é uma abreviação para _library_ (biblioteca).
  - `src/dbal.php` é onde ficam as funções de acesso ao banco de dados, `dbal` é uma abreviação para _database abstraction layer_.
  - **`src/main.php` é onde fica nosso código principal.**
- E finalmente `templates/` é onde ficam os arquivos relacionados à renderização de HTML pela aplicação, também é muito conhecido como **views**.
  - _`templates/_layout.phtml` é a base para os outros templates/views e tem coisas comuns à todo o site/aplicação como **header** e o **footer**, assim você não precisa repeti-los em cada página_.

## Quero contribuir

- Se você for iniciante, fique à vontade para criar issues dizendo os pontos apresentados que você não entendeu.
- E se você for experiente, fique à vontade para criar PRs ajustando os pontos que poderiam ficar melhores.
  - _(lembrando que a ideia aqui é manter simples e fácil, é ser um exemplo, não um boilerplate pra uma aplicação maior)_
