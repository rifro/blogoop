<?php
defined ('DS') ? null : define ('DS', DIRECTORY_SEPARATOR);
define ('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS . 'blogoop');
defined ('INCLUDES_PATH') ? null : define ('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');
defined('IMAGES_PATH') ? null : define ('IMAGES_PATH', SITE_ROOT.DS.'admin'.DS.'img');
/**
 * deze pagina zal alle includes bevatten
 */
/*php pagina's*/
require_once(INCLUDES_PATH.DS."functions.php");
require_once(INCLUDES_PATH.DS."config.php");
/*objecten*/
require_once(INCLUDES_PATH.DS."Database.php");
require_once (INCLUDES_PATH.DS."Db_object.php");
require_once(INCLUDES_PATH.DS."User.php");
require_once (INCLUDES_PATH.DS."Photo.php");
require_once (INCLUDES_PATH.DS."Session.php");
require_once (INCLUDES_PATH.DS."Comment.php");
require_once (INCLUDES_PATH.DS."Paginate.php");
/*locatie naar de images map en includes map vastleggen*/

?>