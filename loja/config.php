<?php 
/** O nome do banco de dados*/
define('DB_NAME', 'varoavalorosa');

/** Usuário de banco de dados Mysql*/
define('DB_USER', 'root');

/** Senha do banco de dados Mysql*/
define('DB_PASSWORD', 'usbw');

/** Nome do host do Mysql*/
define('DB_HOST', 'LOCALHOST:3307' );

/** caminho absoluto para a pasta de sistema*/
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__).'/');

/* caminho dos server para o sistema*/
if (!defined('BASEURL'))
	define('BASEURL', '/loja/');

/** caminho do arquivo de banco de dados*/
if (!defined('DBAPI'))
	define('DBAPI', ABSPATH . 'inc/database.php');

define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

date_default_timezone_set('America/Sao_Paulo');

 ?>