<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud extends CI_Model
{
	function __construct(){
		parent::__construct();
	}

	public function read($data){
		if(isset($data['select'])){
			$this->db->select($data['select']);
		}		
		if(isset($data['where'])){
			$this->db->where($data['where']);
		}
		if(isset($data['where_'])){
			$this->db->where($data['where_']);
		}		
		if(isset($data['or_where'])){
			$this->db->where($data['or_where']);
		}
		if(isset($data['limit'])){
			$this->db->limit($data['limit']);
		}		
		if(isset($data['order'])){
			$this->db->order_by($data['order']['kolom'],$data['order']['orderby']);
		}
		if(isset($data['group_by'])){
			$this->db->group_by($data['group_by']);	
		}		
		return $this->db->get($data['tabel']);
	}
	public function delete($data){
		$this->db->where($data['where']);
		if($this->db->delete($data['tabel'])){
			return true;
		}else{
			$error=$this->db->error();
			return $error['message'];
		}
	}
	public function insert($data){
		if($this->db->insert($data['tabel'],$data['data'])){
			return true;
		}else{
			$error=$this->db->error();
			return $error['message'];
		}
	}
	public function update($data){
		$this->db->where($data['where']);
		if($this->db->update($data['tabel'],$data['data'])){
			return true;
		}else{
			$error=$this->db->error();
			return $error['message'];
		}
	}
	public function join($data){
		$this->db->select($data['select']);
		$this->db->from($data['tabel']);
		foreach ($data['join'] as $row) {
			$this->db->join($row['tabel'],$row['ON'],$row['jenis']);
		}
		if(isset($data['order'])){
			$this->db->order_by($data['order']['kolom'],$data['order']['orderby']);
		}
		if(isset($data['where'])){
			$this->db->where($data['where']);
		}				
		return $this->db->get();
	}
	public function count($tabel){
		return $this->db->count_all($tabel);
	}
}
?>