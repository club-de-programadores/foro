  # Problemas a resolver
  
 Boton Nueva discusión 
 https://drive.google.com/open?id=1-Z4t_VxdZsNFJmhL37Lc9AottLEulTjl

video Proyecto
https://drive.google.com/file/d/1hjF_H_dQrNXzzx3vXWecuUvgCr5oZFcu/view

# Agradeciendo ante todo a https://github.com/thedevdojo
repositorio 
https://github.com/thedevdojo/chatter

# foro

Bienvenidos al proyecto "Foro - Club de Programadores". 

Esta es una iniciativa que tiene sus origenes en un grupo de WhatsApp formado por múltiples programadores que dominan diferentes lenguajes y paradigmas tan diversos como sus nacionalidades.

Para poder utilizar este proyecto, debes tener los siguientes requisitos:

1) debes tener la versión de PHP mayor o igual a la 7.2.5. 

para mas información visita la documentación oficial de Laravel: https://laravel.com/docs/7.x


2) debes tener instalado composer en tu equipo: https://getcomposer.org/


3) si utilizas windows, puedes descargar el programa git desde la página oficial: https://gitforwindows.org/

Si cumples con estos prerequisitos, entonces podrás instalar este proyecto.

Pasos para instalar este proyecto correctamente:

1) descarga este proyecto o clónalo con el comando: 

git clone git://github.com/schacon/grit.git

2) ejecutar el comando: 

composer install

3) copiar el archivo ".env.example" y pegarlo con el nombre: ".env". Si estas con el sistema gitforwindows, o en linux o mac, puedes ejecutar el siguiente comando: 

cp .env.example .env

4) debemos generar una nueva llave de laravel con el siguiente comando:

php artisan key:generate

5) Configura la nueva base de datos modificando el archivo ".env":

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=foro
DB_USERNAME=root
DB_PASSWORD=

6)
este comando es para hacer la migración de las tablas  
 ejecuta php artisan migrate

7) 
npm son las siglas de node package manager y básicamente es el manejador de paquetes de JavaScript, así como lo es Composer para PHP, es decir, nos permite instalar paquetes que se ejecutan del lado del cliente (frontend).

 ejecuta npm install && npm run dev

8)
Si tiene PHP instalado localmente y desea utilizar el servidor de desarrollo incorporado de PHP para servir su aplicación, puede usar el  php artisan serve. Este comando iniciará un servidor de desarrollo en :
http://localhost:8000

 ejecuta php artisan serve .


prueba el proyecto que debe funcionar.

Un saludo y Dios les bendiga a todos. 



# Instalación del backend python/django

1. Debes tener instalados los requisitos para ejecutar django.

::::Requisitos
:::::::Python 3.8.0
:::::::django 3.0.4

1.1 ¿Cómo instalar django?
Consulta este post: https://tutorial.djangogirls.org/es/python_installation/

1.2 ¿Cómo instalar django?

1.2.1 Abra un linea de comandos (CMD O BASH)

1.2.2 ejecute el siguiente comando: pip install django 

También puedes visitar el sitio oficial de django :  https://docs.djangoproject.com/es/3.0/intro/install/


2. Ejecutar el proyecto

2.1 Abra una linea de comandos (CMD O BASH) dentro de la carpeta backend_django (Al nivel del archivo manage.py)

2.2.1 Luego, ejecute el comando: python manage.py runserver


3. Abra el navegador de su preferencia y en la barra de direcciones url coloque lo siguiente: 127.0.0.1:8000


4. Sí todo ha ido bien, verá un coete en su pantalla.

