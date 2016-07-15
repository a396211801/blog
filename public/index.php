<?php
/**
 * User: Administrator
 */
ini_set('yaf.name_suffix',0);
ini_set('yaf.name_separator','_');
//ini_set('memory_limit',500);
define('DEVELOPMENT',true);
define('BASE_PATH',__DIR__.'/..');
define('APP_PATH',BASE_PATH.'/application');

if(isset($_POST['PHPSESSID']) && $_POST['PHPSESSID'])
{
    session_id($_POST['PHPSESSID']);
}
$app = new Yaf_Application(APP_PATH."/conf/config.ini");
$app->bootstrap()->run();