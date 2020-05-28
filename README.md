  # Problemas a resolver
 
no hay jajajaaj


## Agradeciendo ante todo a https://github.com/thedevdojo
repositorio 
https://github.com/thedevdojo/chatter

# foro

Bienvenidos al proyecto "Foro - Club de Programadores". 

Esta es una iniciativa que tiene sus origenes en un grupo de WhatsApp formado por múltiples programadores que dominan diferentes lenguajes y paradigmas tan diversos como sus nacionalidades.

## Laravel 

Para poder utilizar este proyecto, debes tener los siguientes requisitos:

1. Debes tener la versión de PHP 7.2.5 o superior. 

### Para más información visita la documentación oficial de Laravel: https://laravel.com/docs/7.x


2. Debes tener instalado composer en tu equipo: https://getcomposer.org/


3. Si utilizas windows, puedes descargar el programa git desde la página oficial: https://gitforwindows.org/

Si cumples con estos prerequisitos, entonces podrás instalar este proyecto.


# Pasos para instalar este proyecto correctamente:

1. Descarga este proyecto o clónalo con este comando: 

git clone https://github.com/club-de-programadores/foro.git

2. Ejecutar linea por linea 

* php artisan vendor:publish --tag=chatter_assets --force

* php artisan vendor:publish --tag=chatter_config --force

* php artisan vendor:publish --tag=chatter_migrations --force


3. Debemos generar una nueva llave de laravel con el siguiente comando:

* php artisan key:generate


4. Configura la nueva base de datos modificando el archivo ".env": aunque por defecto ya viene prescrita

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=foro
DB_USERNAME=root
DB_PASSWORD=

5. Este comando es para hacer la migración de las tablas  

* php artisan migrate

6. npm son las siglas de node package manager y básicamente es el manejador de paquetes de JavaScript, así como lo es Composer para PHP, es decir, nos permite instalar paquetes que se ejecutan del lado del cliente (frontend).

* npm install && npm run dev

7. Si tiene PHP instalado localmente y desea utilizar el servidor de desarrollo incorporado de PHP para servir su aplicación, puede usar el php artisan serve. Este comando iniciará un servidor de desarrollo en:

http://localhost:8000/forums

 * php artisan serve 

### Una vez realizado todo lo anterior, el proyecto estará listo para su uso.
