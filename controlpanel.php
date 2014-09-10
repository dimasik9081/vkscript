<?php
@session_start();
@ob_start();
@ob_implicit_flush(0);

@error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);

define('MOZG', true);
define('ROOT_DIR', dirname (__FILE__));
define('ENGINE_DIR', ROOT_DIR.'/system');
define('ADMIN_DIR', ROOT_DIR.'/system/inc');

@include ENGINE_DIR.'/data/config.php';

if(!$config['home_url']) die("TOEngine not installed. Please run install.php");

$admin_link = $config['home_url'].'controlpanel.php';

include ENGINE_DIR.'/classes/mysql.php';
include ENGINE_DIR.'/data/db.php';
include ADMIN_DIR.'/functions.php';
include ADMIN_DIR.'/login.php';

$db->close();
?>
