<h1 align="center">WINX UNIVERSE - Software House</h1>
<h3 align="center">Api para Captação de Orçamentos</h3>

- 📫 Email **feliperfariasdev@gmail.com**

- 📄 Protótipo em PDF [Clique Aqui](https://github.com/FelipeRfariasDev/winx/blob/v1/prototipo/winx.io.pdf)

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

![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/prototipo/Cliente.png?raw=true)

## Ao selecionar uma das opções exibira os outros campos para realizar o orçamento 
 

![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/prototipo/Web.png?raw=true)
![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/prototipo/Mobile.png?raw=true)
![alt text](https://github.com/FelipeRfariasDev/winx/blob/v1/prototipo/Desktop.png?raw=true)
