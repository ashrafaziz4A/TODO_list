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
	public function select_single($list)
	{
		$data = $this->db->prepare("SELECT * FROM ".$this->table." WHERE id = :id");
		$data->execute(array(
			':id' => $list['id']
		));
		return $data->fetch();
	}
	public function update_single($list)
	{
		$check = $this->select_single($list);
		if ($check != null){
			$data = $this->db->prepare("UPDATE ".$this->table." SET title = :title,text = :text WHERE id = :id");
			$data->execute(array(
				':id'    => $list['id'],
				':title' => $list['title'],
				':text'  => $list['text']
			));
			$data->fetch();
			return 'updated';
		}else{
			$data = $this->db->prepare("INSERT INTO ".$this->table." (`title`,`text`) VALUES (:title,:text)");
			$data->execute(array(
				':title' => $list['title'],
				':text'  => $list['text']
			));
			return 'created';
		}
	}
	public function delete_single($id)
	{
		if ($id == ''){
			return 'no data';
		}
		$data = $this->db->prepare("DELETE FROM ".$this->table." WHERE id = :id");
		$data->execute(array(
			':id' => $id
		));
		$data->fetch();
		return 'deleted';
	}


}?>