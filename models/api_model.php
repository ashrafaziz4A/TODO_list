<?php


class Api_Model extends Model
{
	public function __construct(){
		parent::__construct();
		$this->table = 'data_list';
	}
	public function index()
	{
		$data = $this->db->prepare("SELECT * FROM ".$this->table);
		$data->execute();
		return $data->fetchAll();
	}

	public function updateStock($id , $operation){
		$data = $this->db->prepare("SELECT * FROM ".$this->table." WHERE id = :id");
		$data->execute(array(
			':id' => $id
		));
		$item = $data->fetch();
		$stock = $item['count'] + $operation;
		$update = $this->db->prepare("UPDATE ".$this->table." SET count = :count WHERE id = :id");
		$update->execute(array(
			':id'    => $id,
			':count' => $stock
		));
		$update->fetch();
		return 'updated';
	}
	public function resetAll()
	{
		$data = $this->db->prepare("UPDATE `".$this->table."` SET `count` = '10'");
		$data->execute();
		$data->fetch();
		return 'updated';
	}


}?>