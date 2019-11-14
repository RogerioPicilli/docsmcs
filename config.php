<?php 
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'development' ) {
	// define("BASE_URL", "http://localhost/docscms");
	$config['dbname'] = 'docscms';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://www.meusite.com.br");
	$config['dbname'] = 'aws_estrutura_mvc';
	$config['host'] = 'aws_localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}

// global $db;
// try {
// 	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
// } catch (PDOException $e) {
// 	echo "ERRO: ".$e->getMessage();
// }

?>