<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{
	
	public function loginAction(){
		echo "Login";

	}


	public function registerAction(){
		echo "Registration";
		var_dump($this->route);
	}
}

?>