<?php

class Api extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$data_set = $this->model->index();
		if (count($data_set) == 0){
			$data_set = [['id' => '','title' => '','text' => '']];
		}
		$arr = array('data_set' => $data_set,'status' => 'success');
		echo json_encode($arr,JSON_PRETTY_PRINT);
	}
	public function stockIn() {
		$random = rand(1,5);
		$single = $this->model->updateStock($random, 1);
		$random = rand(1,5);
		$single = $this->model->updateStock($random, 1);
		$random = rand(1,5);
		$single = $this->model->updateStock($random, 1);
	}
	public function stockOut() {
		$random = rand(1,5);
		$single = $this->model->updateStock($random, -1);
		$random = rand(1,5);
		$single = $this->model->updateStock($random, -1);
		$random = rand(1,5);
		$single = $this->model->updateStock($random, -1);
	}
	public function resetAll() {
		$this->model->resetAll();
	}
}

?>