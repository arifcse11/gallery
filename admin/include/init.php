<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 8/25/2016
 * Time: 5:06 PM
 */


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT',  'F:' . DS . 'xampp' . DS . 'htdocs' . DS . 'gallery');

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'include');


require_once 'functions.php';

require_once 'database.php';

require_once 'db_object.php';

require_once 'user.php';

require_once 'photo.php';

require_once 'comment.php';

require_once 'config.php';

require_once 'session.php';

require_once 'paginate.php';