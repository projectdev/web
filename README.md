### Comandos Github
    1.- Configurar
    2.- Clonar 
    3.- subir 
    4.-
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
