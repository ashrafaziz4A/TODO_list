<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		$this->view->css = 'template';

	}
	
	public function index() {
		$this->view->render('index/index');
		
	}
	
	
}