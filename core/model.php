<?php 
class model {

	protected $db;  //cria uma variavel protegida e outra classe com o extends pode usa-la

	public function __construct() {
		global $db;                       //puxo o $db do config
		$this->db = $db;
	}

}

?>