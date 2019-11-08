<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', 'C:\\xampp' . DS . 'htdocs' . DS . 'blogoop');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');
defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT.DS.'admin'.DS.'img');

/*php pagina's*/
require_once("functions.php");
require_once("config.php");
/*Objecten*/
require_once("Database.php");
require_once("Db_object.php");
require_once("User.php");
require_once("Photo.php");
require_once("Session.php");
require_once ("Comment.php");
require_once ("Paginate.php");
?>

