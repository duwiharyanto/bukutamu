<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Crud');	//LOAD MODEL
		if(($this->session->userdata('login')!=true) || ($this->session->userdata('login')!=1) ){
			redirect(site_url('login/logout'));
		}
	}
	private $master_tabel="registrasi";				//TABEL MASTER
	private $default_url="backend/laporan";	//PATH URL CONTROLLER
	private $default_view="backend/laporan/";	//FOLDER VIEW REGISTRASI
	private $view="backend";

	private function global_set($data){	//PARAMETER GLOBAL UNTUK VIEW NANTI
		$data=array(
			'menu'=>'laporan',						//MENU 
			'submenu'=>false,							//SUBMENU AKTIF JIKA MEMILIKI SUBMENU
			'headline'=>$data['headline'],				//TEXT UNTUK DITAMPILAN MENU
			'url'=>$data['url'],						//URL YANG DIAKSES UNTUK DITAMPILKAN DI VIEW
			'ikon'=>"fa fa-file",						//IKON MENU 	
			'base_uri'=>"backend/",						//PATH UNTUK GLOBAL CONTROLLER BACKEND
			'view'=>"views/backend/laporan/",//PATH UNTUK VIEW
		);
		return (object)$data;
	}	
	private function notifiaksi($param){ //FUNGSI UNTUK MENAMPILKAN NOTIFIKASI
		if($param==1){
			$this->session->set_flashdata('success','proses berhasil');
		}else{
			$this->session->set_flashdata('error',$param);
		}		
	}
	private function uploadgambar($file,$path){
		$config=array(
			'upload_path'=>$path,
			'allowed_types'=>'jpg|jpeg',
			'max_size'=>5000, //5Mb
			'encrypt_name'=>true,
		);
		$this->load->library('upload',$config,$file);
		return $this->$file->do_upload($file);
	} 
	public function index()
	{
		$global_set=array(
			'submenu'=>false,
			'headline'=>'laporan',
			'url'=>'backend/laporan/',
		);
		$global=$this->global_set($global_set);
		$query=array(
			'tabel'=>$this->master_tabel,
			'order'=>array('kolom'=>'registrasi_id','orderby'=>'ASC'),
			);
		$data=array(
			'global'=>$global,
			'data'=>$this->Crud->read($query)->result(),
		);
		$this->load->view($this->view,$data);
	}
}
