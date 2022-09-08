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
	public function update() {
		$single = $this->model->update_single(Post::get()['list']);
		echo json_encode($single,JSON_PRETTY_PRINT);
		// $arr = array('data_set' => $data_set,'status' => 'success');
		//echo json_encode($arr,JSON_PRETTY_PRINT);
	}
	public function delete() {
		$single = $this->model->delete_single(Post::get()['id']);
		echo json_encode($single,JSON_PRETTY_PRINT);
	}
}

?>