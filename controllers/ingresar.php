<?php
class ingresar extends controller {
	function __construct() {
		parent::__construct();
		
	}
	
	function index() {
		$this->vista->render("ingresar/index");
		
	}
	
	function ingresar() {
		$this->modelo->ingresar();
	}
	
}
?>