# PetFinder

PetFinder es una sitio web dedicado a ayudar a las personas que desean adoptar una mascota o perdieron la suya y requieren ayuda para encontrarlas.

Ademas de mostrar veterinarias cerca de la persona que lo necesite.

## Como correr de forma local el sitio Web.

### Instala lo siguiente:
- [XAMP](https://www.apachefriends.org/es/index.html)
- [Node.js](https://nodejs.org/en)
- [Composer](https://getcomposer.org/download/)

```
Manten encendido el servidor de MySQL en XAMP.
```

### Despues de clonar el repositorio se deben ejecutar los siguientes comandos en la terminal:
```
composer install

npm install

# Usa uno de estos
php artisan migrate
php artisan migrate --seed


php artisan storage:link
```
Para poder iniciar el servidor ejecutar los siguientes comandos:
```
php artisan serve
npm run dev
```
