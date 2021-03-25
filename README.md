# Wordpress
## _Proyecto para prueba_

Se realiza este proyecto como un blog para wordpress, tema perzonalizado

## Características

- home page que contiene la información principal de la plataforma y muestra los últimos 3 contenidos subidos al blog.
- El blog contiene 10 entradas.
- Cada entrada del blog debe tiene una categoría asociada, para que, en caso de ser necesario, a futuro se pueda crear un template para esa categoría en especial. 
- Cada entrada del blog tiene metadatos como:
    -Etiquetas
    -Autor
    -Fecha de publicación
    -Categoría de la entrada
- Contiene 4 usuarios creados con roles distintos ya sean administrador, suscriptor, autor, etc.

## Lenguajes

Los lenguajes de programación usados:

- [PHP]
- [JavaScript]
- [CSS]
- [SCSS] 

## Instalación en servidor local

Requiere la instalacion de apache, PHP 7.0 o superior, Mysql

Instalación de apache, actualizar sistema
```sh
sudo apt update
sudo apt install apache2
```
Instalación de mysql
```sh
sudo apt install mysql-server
sudo mysql_secure_installation
```
Instalación de PHP
```sh
apt-cache search php
apt get install php7.2 libapache2-mod-php7.2 php7.2-mysql
```
Recargar el servidor
```sh
sudo systemctl restart apache2
sudo systemctl status apache2
```
Clonación del repositorio
```sh
git clone https://github.com/juandavidcamargo99/wordpress.git
```
Estas son las configuraciones iniciales para el proyecto dentro del codigo wp-config.php
```sh
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '###' );

/** MySQL database username */
define( 'DB_USER', '####' );

/** MySQL database password */
define( 'DB_PASSWORD', '####' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
```
Verificación de el servidor localhost
```sh
127.0.0.1:8000
```
## License

MIT
**Free Software**
