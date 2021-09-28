<?php

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH",dirname(PRIVATE_PATH));
define("PUBLIC_PATH",PROJECT_PATH.'/public');
define("SHARED_PATH",PRIVATE_PATH.'/shared');
//Assign the root URL to a php constant
//Do not needto include the domain
//Use same document root as web server;
//Can set a hard coded value;
//define("WWW_ROOT",'/phplearning/globe_bank/public/');
//define("WWW_ROOT","");
//can dynamically find everything in the url upto '/public'
$public_end=strpos($_SERVER['SCRIPT_NAME'],'/public')+7;
$doc_root=substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT",$doc_root);


require_once('functions.php');
?>