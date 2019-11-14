<?php 
class loginController extends controller {

	public function index() {
		$data = array();

		if(isset($_POST['email']) && !empty($_POST['email'])){
			$email = addslashes($_POST['email']);
			$pass = addslashes($_POST['password']);

			$u = new Users();
			if($u->doLogin($email, $pass)) {
				header("Location: ".BASE_URL);
				exit;
			} else { //Carrega a pagina novamente mas coloca o error no $data
				$data['error'] = 'Usuário ou senha errada.';
			}
		}

		$this->loadView('login', $data);

	}

	public function logout(){
		$u = new Users();
		$u->setLoggedUser();
// usado para testar se o usua'rio sem permissao de logout poderia fazer logout.
//		if($u->hasPermission('logout')) {
			$u->logout();
			header("Location: ".BASE_URL);		
//		} else {
//			echo "Você não pode fazer logout!!!";
//			exit;
//		}


	}
}


 ?>