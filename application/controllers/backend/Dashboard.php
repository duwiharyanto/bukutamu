<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Crud');
		if(($this->session->userdata('login')!=true) || ($this->session->userdata('login')!=1) ){
			redirect(site_url('login/logout'));
		}
	}
	private $master_tabel="user";
	private $default_url="dashboard/dashboard";
	private $default_view="backend/dashboard/";
	private $view="backend";

	private function global_set($data){
		$data=array(
			'menu'=>'dashboard',
			'submenu'=>$data['submenu'],
			'headline'=>$data['headline'],
			'url'=>$data['url'],
			'ikon'=>"fa fa-database",
			'base_uri'=>"backend/",
			'view'=>"views/backend/dashboard/",
		);
		return (object)$data;
	}	
	private function notifiaksi($param){
		if($param==1){
			$this->session->set_flashdata('success','proses berhasil');
		}else{
			$this->session->set_flashdata('error',$param);
		}		
	}
	public function index()
	{
		$global_set=array(
			'submenu'=>false,
			'headline'=>'dashboard',
			'url'=>'dashboard/dashboard/',
		);
		$global=$this->global_set($global_set);
		if($this->input->post('submit')){
			$data=array(
				'user_username'=>$this->input->post('user_username'),
				'user_password'=>$this->input->post('user_password'),
				'user_level'=>$this->input->post('user_level')
			);
			$query=array(
				'data'=>$data,
				'tabel'=>$this->master_tabel,
			);
			$insert=$this->Crud->insert($query);
			$this->notifiaksi($insert);
			redirect(site_url($this->default_url));
		}else{
			$query=array(
				'tabel'=>$this->master_tabel,
				'order'=>array('kolom'=>'user_id','orderby'=>'ASC'),
				);
			$grafik=array(
				'select'=>"kegiatan_tersimpan,COUNT(kegiatan_id) AS jumlah",
				'tabel'=>"kegiatan",
				'group_by'=>'kegiatan_tersimpan',
				'order'=>array('kolom'=>'kegiatan_tersimpan','orderby'=>'ASC'),
				'limit'=>10
			);
			$grafik=$this->db->query("SELECT a.kegiatan_tersimpan, a.jumlah FROM (SELECT kegiatan_tersimpan,COUNT(kegiatan_id) AS jumlah FROM kegiatan GROUP BY kegiatan_tersimpan ORDER BY kegiatan_tersimpan DESC limit 10) a ORDER BY a.kegiatan_tersimpan ASC");
			$data=array(
				'global'=>$global,
				'data'=>$this->Crud->read($query)->result(),
				'user'=>$this->Crud->count('user'),
				'grafik'=>$grafik->result(),
				'kegiatan'=>$this->Crud->count('kegiatan'),
			);
			$this->load->view($this->view,$data);
			//print_r($data['grafik']);
		}
	}
}
