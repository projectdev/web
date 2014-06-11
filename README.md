### Primer paso Comandos Github
    1.- Configurar
    	git config --global user.name  "user_name"
	    git config --global user.email "mail_your_account"
    2.- Clonar 
    	Clonar donde tengamos el XAMP,WAMP... etc, en caso Linux en /var/www/
    	git clone https://github.com/projectdev/web.git
    3.- Actualizar cambios
    	Antes de subir algo siempre hacer importante 
    	git pull 
        si no da prbar con 
        git pull origin master 
    3.- subir 
    	Si modificaste algo 
    	git add nomber archivo ó 
    	git add .  para agregar el directorio actual
    	git commit -m 'agrega comentario a lo q subas'
    	git push origin master        // Para subir las  modificaciones
    4.- Para ver como anda todo
	    git status
Dentro de .gitignore se pone lo q no quieran q se suba al github
Mas comandos http://www.maefloresta.com/portal/es/git.es

### Para el ejemplo usar lo siguiente
    1.- Descargar composer 
        curl -s http://getcomposer.org/installer | php
        php composer.phar install
    2.- Alternativa el siguiente link solo es 4mb https://db.tt/BoObzyot
        Descomprimirlo /var/www/laravel en caso linux 

mysql -h localhost -utu_usuario -p
create database laravel;
use laravel;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `created_at`, `updated_at`) VALUES
(1, 'sam', 'loza', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'zam', 'zas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'skarlet', 'kar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'samsung', 'sung', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
Modificar la BD segun sus datos, mas abajo hay una descripcion.
Si no pueden hacer esto mediante phpmyadmin sudo apt-get install phpmyadmin

### Step 4: Configure Database
Now that you have the environment configured, you need to create a database configuration for it. Copy the file ***app/config/database.php*** in ***app/config/local*** and edit it to match your local database settings. You can remove all the parts that you have not changed as this configuration file will be loaded over the initial one.
	'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'laravel',
			'username'  => 'root',
			'password'  => ' ',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
		
### Step 8: Make sure app/storage is writable by your web server.

If permissions are set correctly:

    chmod -R 775 app/storage

Should work, if not try

    chmod -R 777 app/storage

## Additional information

Inspired by and based on [laravel4-starter-kit](https://github.com/brunogaspar/laravel4-starter-kit)
