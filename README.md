### Solo la primera vez
    1.- Descargar composer 
	curl -s http://getcomposer.org/installer | php
	php composer.phar install

### Comandos Github
    1.- Configurar
    	git config --global user.name  "user_name"
	git config --global user.email "mail_your_account"
    2.- Clonar 
    	Clonar donde tengamos el XAMP,WAMP... etc, en caso Linux en /var/www/
    	git clone https://github.com/projectdev/web.git
    3.- Actualizar cambios
    	Antes de subir algo siempre hacer importante 
    	git pull 
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
### Step 4: Configure Database

Now that you have the environment configured, you need to create a database configuration for it. Copy the file ***app/config/database.php*** in ***app/config/local*** and edit it to match your local database settings. You can remove all the parts that you have not changed as this configuration file will be loaded over the initial one.
Edit ***app/config/databse.php***, search line  
	
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
