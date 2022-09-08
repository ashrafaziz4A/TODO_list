
<?php
ob_start();
require 'config/paths.php';
require 'config/database.php';
require 'config/constants.php';

// Also spl_autoload_register (Take a look at it if you like)
spl_autoload_register(function ($class) {
	@require LIBS . $class .".php";
});



$app = new Bootstrap();
?>