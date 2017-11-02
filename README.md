# laravel-docker

docker-compose.yml configurado para o framework Laravel com nginx + php + mysql + phpmyadmin

## Começando...

Seguindo as instruções abaixo você será capaz de subir containers do docker configurados para rodar o Laravel, que também já se encontra instalado e configurado dentro do diretório 'code'.

### Pré-requisitos

Para utilizar este docker-compose.yml você precisará ter instalado:

```
1. Sistema operacional com o docker instalado e rodando (docker-machine ou docker-engine)
2. Docker Compose
3. Git
```

### Instalando e subindo os containers

Crie uma entrada no arquivos HOSTS do sistema conforme abaixo:

```
127.0.0.1	laravel.local
```


Faça um clone deste repositório para o diretório desejado com o comando

```
git clone https://github.com/lamasbr/laravel-docker.git
```

Suba os containers com o comando

```
docker-compose up -d
```

Quando terminar de baixar e subir os containers, restaure o banco de dados utilizando o phpMyAdmin. Para acessar o phpMyAdmin, acesse:

```
http://localhost:8080/
```

Se não modificou o arquivo docker-compose.yml, o host do MySQL é db, o usuário e senha é laravel

## Testando

Para acessar o Laravel que acabou de subir, acesse

```
http://laravel.local/
```
