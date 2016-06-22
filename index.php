   <?php
    // If you installed via composer, just use this code to requrie autoloader on the top of your projects.
    require 'vendor/autoload.php';
     
    // Initialize
    $database = new medoo([
        'database_type' => 'mysql',
        'database_name' => 'test_git',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8'
    ]);
     
    try 
    {
    	$database->insert('account', [
	        'user_name' => 'foo',
	        'email' => 'foo@bar.com',
	        'age' => 25,
	        'lang' => ['en', 'fr', 'jp', 'cn']
    	]);

    	echo 'Data inserted';
    }
    catch(Exception $e)
    {
    	echo 'Exception reçue : ', $e->getMessage(), "\n";
    }
    