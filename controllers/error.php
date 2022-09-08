<?php
class Errora extends Controller {

	public function __construct() {
		parent::__construct();
	}
	 public function index() {
		$this->view->msg = 'login';

		
		$this->view->render('error/index');
		/* This will give an error. Note the output
 * above, which is before the header() call */
	}
}