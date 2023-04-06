<h1 align="center">WINX UNIVERSE - Software House</h1>
<h3 align="center">Api para Captação de Orçamentos</h3>

- 📫 Email **feliperfariasdev@gmail.com**

- 📄 Protótipo em PDF [Clique Aqui](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/prototipo/winx.io.pdf)
- 📄 Postman [Clique Aqui](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/postman/WINX%20UNIVERSE%20-%20Software%20House%20(Or%C3%A7amentos).postman_collection.json)
<h3 align="left">Conecte-se comigo :</h3>

<img align="center" src="https://static.licdn.com/sc/h/8s162nmbcnfkg7a0k8nq9wwqo">[Clique Aqui](https://www.linkedin.com/in/desenvolvedor/)

<img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/youtube.svg" height="30" width="40">[Clique Aqui]()

# Para instalação padrão exexutar siga as instruções

CREATE SCHEMA `winx` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

git clone https://github.com/FelipeRfariasDev/winx.git

cd winx

composer install

cp .env.example .env

php artisan migrate 

php artisan key:generate

php artisan db:seed

php artisan serve

# Para instalação via docker utilizei o Laravel Sail

docker-compose up -d ou ./vendor/bin/sail up

Para mais detalhes Laravel Sail [Clique Aqui](https://laravel.com/docs/10.x/sail)

# Protótipo

![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/prototipo/Cliente.png?raw=true)

## Ao selecionar uma das opções exibira os outros campos para realizar o orçamento 
 

![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/prototipo/Web.png?raw=true)
![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/prototipo/?raw=true)
![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/prototipo/Desktop.png?raw=true)

<h3 align="left">Ao realizar o orçamento enviamos um email para LEAD(Cliente) que solicitou o orçamento</h3>

![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/img_email/EmailCliente.PNG?raw=true)

<h3 align="left">Emprea WINX UNIVERSE - Software House recebe a notificação para enviar em contato com o cliente que solicitou o orçamento</h3>

![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/img_email/EmailEmpresa.PNG?raw=true)

# PhpUnit

CREATE SCHEMA `winx_phpunit` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

vendor/bin/phpunit --testdox

![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/storage/img_test/teste_phpunit.PNG?raw=true)
