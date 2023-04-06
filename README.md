<h1 align="center">WINX UNIVERSE - Software House</h1>
<h3 align="center">Api para Captação de Orçamentos</h3>

- 📫 Email **feliperfariasdev@gmail.com**

- 📄 Protótipo em PDF [Clique Aqui](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/prototipo/winx.io.pdf)
- 📄 Postman [Clique Aqui](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/postman/WINX%20UNIVERSE%20-%20Software%20House%20(Or%C3%A7amentos).postman_collection.json)
<h3 align="left">Conecte-se comigo :</h3>

<img align="center" src="https://static.licdn.com/sc/h/8s162nmbcnfkg7a0k8nq9wwqo">[Clique Aqui](https://www.linkedin.com/in/desenvolvedor/)

<img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/youtube.svg" height="30" width="40">[Clique Aqui]()

# Para instalação siga as instruções

CREATE SCHEMA `winx` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

git clone https://github.com/FelipeRfariasDev/winx.git

cd winx

composer install

cp .env.example .env

### no arquivo .env ajuste as variáveis

MAIL_ORCAMENTO é o email da empresa que irá receber quando acontecer um orçamento
NAME_ORCAMENTO é o nome da pessoa que corresponde ao email da empresa que irá receber quando acontecer um orçamento

### as variáveis MAIL_* são para realizar a configuração para recebimento de email, em meu caso para testar utilizei https://mailtrap.io/ 

php artisan migrate 

php artisan key:generate

### Ao executar o comando a baixo serão inseridos (30 Orçamentos Desktop, 90 Mobile, 30 Web) com isso teremos 150 registros da tabela de orcamentos
php artisan db:seed

php artisan serve

# Também existe a opção de testar via docker-compose com as configurações docker-compose.yml do php sail

docker-compose up -d ou ./vendor/bin/sail up

Para mais detalhes Laravel Sail [Clique Aqui](https://laravel.com/docs/10.x/sail)

# Iniciei realizando um Protótipo do frontend para elucidar como iria construir a api

![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/prototipo/Cliente.png?raw=true)

## Ao selecionar uma das opções (Web,Mobile,Desktop) será considerado a próxima etapa solicitando mais informações para o orçamento
 
# Web
![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/prototipo/Web.png?raw=true)
# Mobile
![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/prototipo/Mobile.png?raw=true)
# Desktop
![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/prototipo/Desktop.png?raw=true)

<h3 align="left">Ao realizar o orçamento enviamos um email para LEAD(Cliente) que solicitou o orçamento</h3>

![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/img_email/EmailCliente.PNG?raw=true)

<h3 align="left">Empresa WINX UNIVERSE - Software House também recebe um email para entrar contato com o LEAD(Cliente) que solicitou o orçamento</h3>

![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/img_email/EmailEmpresa.PNG?raw=true)

# Para realizar os testes com PhpUnit definir no arquivo phpunit.xml DB_DATABASE=winx_phpunit que seria o banco de dados para realizar os testes

CREATE SCHEMA `winx_phpunit` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

vendor/bin/phpunit --testdox

![alt text](https://github.com/FelipeRfariasDev/winx/blob/main/storage/img_test/teste_phpunit.PNG?raw=true)
