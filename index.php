 <?php
define('BASE_DIR', getcwd());
spl_autoload_register(function($class)
{
	 $path = str_replace('\\', '/', $class.'.php');
	 if (file_exists($path)) {
	 	require $path;

	 }else{}});
require 'settings.php';
require BASE_DIR.'/framework/core/moduls/rb.php';
require BASE_DIR.'/framework/core/moduls/urls.php';
require BASE_DIR . '/framework/core/moduls/xcrud/xcrud.php';
?>