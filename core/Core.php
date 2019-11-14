<?php 
class Core {
	public function run() {
		// $url = explode('index.php', $_SERVER['PHP_SELF']);
		// $url = end($url);

		$url = '/';
		if(isset($_GET['url'])){
			$url .= $_GET['url'];
		}

		$params = array();
		if(!empty($url) && $url != '/') {
 			$url = explode('/', $url);
 			array_shift($url);  		//remove o primeiro registro do array porque era a barra que foi retirada
 			$currentController = $url[0].'Controller';
 			array_shift($url);  		//remove MAIS uma vez o primeiro registro do array pq ja usamos ele
 			if(isset($url[0]) && !empty($url[0])){
 				$currentAction = $url[0]; //entao foi enviado uma action
 				array_shift($url);  		//remove MAIS uma vez o primeiro registro do array pq ja usamos ele
 			} else {
 				$currentAction = 'index';
 			}
 			if(count($url) > 0) {	//se ainda tiver algo 'e parametro'
 				$params = $url;
 			}
		} else {
			//significa que nada foi enviado Vamos para o home
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		$c = new $currentController();  //É equivalente a digitar $controller = new homeController(); neste exemplo supondo que o conteúdo da variavel $currentController seja homeController.
		call_user_func_array(array($c, $currentAction), $params);  //chama a action que está em $currentAction


		// echo '<hr>';
		// echo "CONTROLLER: ".$currentController."<br/>";
		// echo "ACTION: ".$currentAction."<br/>";
		// echo "PARAMETROS: ".print_r($params, true)."<br>";

	}

}

 ?>