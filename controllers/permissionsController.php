<?php 
class permissionsController extends controller {
	//O codigo abaixo tem que estar em todos os controller para ver se o usuário está logado
	public function __construct() {
		//parent::__construct();
		$u = new Users();
		if($u->isLogged() == false) {
			header("Location: ".BASE_URL."login");
			exit;
		}
	}

	public function index(){
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		if($u->hasPermission('permission_view')){
			$this->loadTemplate('permissions',  $data);
		} else {
			header("Location: ".BASE_URL);
		} 

	}

 }
