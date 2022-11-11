# PHP (Hypertext Preprocessor)
Uma linguagem server-side, roda do lado do servidor. É uma linguagem de programação back-end, pois ela realiza comunicação com banco de dados.

Ela é processado no servidor e o resultado do processamento é enviado ao cliente(quem requisitou). Exemplo:

Arquivo PHP: 2+2

Resposta para o cliente: 4

Todo arquivo PHP terá a extensão .php

## aula 01
- Introdução ao PHP
- Infraestrutura necessária
- Onde colocar nossos arquivos
- Variáveis
- Operadores aritméticos

### Introdução dao PHP
DOcumentação oficial http://php.net/
- Ele brilha na WEB, 79% da web usa PHP (https://kinsta.com/php-market-share/)
 - PHP pode ser utilizado para projetos de IoT (Internet das coisas), funciona para criar aplicações de comando (modo texto (parecido com linha de comando (cmd)))
 - PHP é uma linguagem interpretada

 ## Infraestrutura necessária
 -Servidor é um computador que fornece serviços a clientes. Exemplo: Serviço de DHCP: O servidor fica responsável por distribuir números IP (internet Protocol) para os clientes (hostes (computador/celular e etc)) na rede.
 - Nossos sites ficam em servidore web, um servidor web é responsavel por exibir um site quando for solicitado (requisição). Iremos utilizar o servidor web chamado APACHE (existem outros como IIS, NGINX) juntamente com um banco de dados chamado MariaDB(mesma coisa que MySQL).
 - Vamos instalar o  XAMPP, esse programa já instala o APACHE, o PHP e o MariaDB https://www.apachefriends.org/pt_br/index.html

### Onde colocar nossos arquivos
- Os arquivos PHP precisam ser executados à partir do servidor, como se você estivesse acessando peça internet.
- Para o XAMPP, o local aonde devemos colocar os arquivos é em `c:\xamppz\htdocs`. Exemplo: `c:\xamppz\htdocs\site\index.php`
- Para executar os arquivos php, precisamos requisita-los à partir do navegador digitando `http://localhost/`. Exemplo:`http://localhost//site/index.php`