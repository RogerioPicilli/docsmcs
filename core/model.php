<?php 
class model {

	protected $db;  //cria uma variavel protegida e outra classe com o extends pode usa-la

	public function __construct() {
		global $config;                       //puxo o $db do config
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']); // $db;
	}

}

?>