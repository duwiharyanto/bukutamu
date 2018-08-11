<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Crud');	//LOAD MODEL
		if(($this->session->userdata('login')!=true) || ($this->session->userdata('login')!=1) ){
			redirect(site_url('login/logout'));
		}
	}
	private $master_tabel="registrasi";				//TABEL MASTER
	private $default_url="backend/registrasi";	//PATH URL CONTROLLER
	private $default_view="backend/registrasi/";	//FOLDER VIEW REGISTRASI
	private $view="backend";

	private function global_set($data){	//PARAMETER GLOBAL UNTUK VIEW NANTI
		$data=array(
			'menu'=>'registrasi',						//MENU 
			'submenu'=>false,							//SUBMENU AKTIF JIKA MEMILIKI SUBMENU
			'headline'=>$data['headline'],				//TEXT UNTUK DITAMPILAN MENU
			'url'=>$data['url'],						//URL YANG DIAKSES UNTUK DITAMPILKAN DI VIEW
			'ikon'=>"fa fa-tasks",						//IKON MENU 	
			'base_uri'=>"backend/",						//PATH UNTUK GLOBAL CONTROLLER BACKEND
			'view'=>"views/backend/registrasi/",//PATH UNTUK VIEW
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
			'headline'=>'registrasi',
			'url'=>'backend/registrasi/',
		);
		$global=$this->global_set($global_set);
		if($this->input->post('submit')){
			$path="./upload/foto/";
			$file='registrasi_foto';
			$upload=$this->uploadgambar($file,$path);
			if($upload){
			$data=array(
				'registrasi_nama'=>$this->input->post('registrasi_nama'),
				'registrasi_tempatlahir'=>$this->input->post('registrasi_tempatlahir'),
				'registrasi_tgllahir'=>date('Y-m-d',strtotime($this->input->post('registrasi_tgllahir'))),
				'registrasi_alamat'=>$this->input->post('registrasi_alamat'),
				'registrasi_kota'=>$this->input->post('registrasi_kota'),
				'registrasi_negara'=>$this->input->post('registrasi_negara'),
				'registrasi_kodepos'=>$this->input->post('registrasi_kodepos'),
				'registrasi_nohp'=>$this->input->post('registrasi_nohp'),
				'registrasi_email'=>$this->input->post('registrasi_email'),
				'registrasi_tinggibadan'=>$this->input->post('registrasi_tinggibadan'),
				'registrasi_beratbadan'=>$this->input->post('registrasi_beratbadan'),
				'registrasi_foto'=>$this->$file->data('file_name'),												
			);
			$query=array(
				'data'=>$data,
				'tabel'=>$this->master_tabel,
			);
			$insert=$this->Crud->insert($query);
			$this->notifiaksi($insert);
			// print_r($upload);
			}else{
				$error_upload=$this->$file->display_errors();
				$this->session->set_flashdata('error',$error_upload);
			}
			redirect(site_url($this->default_url));
		}else{
			$query=array(
				'tabel'=>$this->master_tabel,
				'order'=>array('kolom'=>'registrasi_id','orderby'=>'ASC'),
				);
			$data=array(
				'global'=>$global,
				'data'=>$this->Crud->read($query)->result(),
			);
			$this->load->view($this->view,$data);
			//print_r($data['grafik']);
		}
	}
	public function hapus($id){
		$query=array(
			'where'=>array('registrasi_id'=>$id),
			'tabel'=>$this->master_tabel,
		);
		$delete=$this->Crud->delete($query);
		$this->notifiaksi($delete);
		redirect(site_url($this->default_url));
	}
	public function edit(){
		$global_set=array(
			'submenu'=>false,
			'headline'=>'registrasi',
			'url'=>'backend/registrasi/edit',
		);
		$global=$this->global_set($global_set);		
		$id=$this->input->post('id');
		if($this->input->post('submit')){
			$data=array(
				'registrasi_nama'=>$this->input->post('registrasi_nama'),
				'registrasi_tempatlahir'=>$this->input->post('registrasi_tempatlahir'),
				'registrasi_tgllahir'=>date('Y-m-d',strtotime($this->input->post('registrasi_tgllahir'))),
				'registrasi_alamat'=>$this->input->post('registrasi_alamat'),
				'registrasi_kota'=>$this->input->post('registrasi_kota'),
				'registrasi_negara'=>$this->input->post('registrasi_negara'),
				'registrasi_kodepos'=>$this->input->post('registrasi_kodepos'),
				'registrasi_nohp'=>$this->input->post('registrasi_nohp'),
				'registrasi_email'=>$this->input->post('registrasi_email'),
				'registrasi_tinggibadan'=>$this->input->post('registrasi_tinggibadan'),
				'registrasi_beratbadan'=>$this->input->post('registrasi_beratbadan'),												
			);
			$path="./upload/foto/";
			$file='registrasi_foto';
			$upload=$this->uploadgambar($file,$path);
			if($_FILES[$file]['name']){
				if($upload){
					$data['registrasi_foto']=$this->$file->data('file_name');
				}else{
					$error_upload=$this->$file->display_errors();
					$this->session->set_flashdata('error',$error_upload);
					redirect(site_url($this->default_url));				
				}				
			}			
			$query=array(
				'data'=>$data,
				'tabel'=>$this->master_tabel,
				'where'=>array('registrasi_id'=>$id),
			);
			$update=$this->Crud->update($query);
			$this->notifiaksi($update);
			redirect(site_url($this->default_url));
		}else{
			$query=array(
				'tabel'=>$this->master_tabel,
				'where'=>array('registrasi_id'=>$id),
			);
			$data=array(
				'global'=>$global,
				'data'=>$this->Crud->read($query)->row(),
			);
			$this->load->view($this->default_view.'edit',$data);

		}
	}
	public function detail(){
		$global_set=array(
			'submenu'=>false,
			'headline'=>'detail registrasi',
			'url'=>'backend/registrasi/detail',
		);
		$global=$this->global_set($global_set);		
		$id=$this->input->post('id');
		$query=array(
			'tabel'=>$this->master_tabel,
			'where'=>array('registrasi_id'=>$id),
		);
		$data=array(
			'global'=>$global,
			'data'=>$this->Crud->read($query)->row(),
		);
		$this->load->view($this->default_view.'detail',$data);
	}	
	public function add(){
		$global_set=array(
			'submenu'=>false,
			'headline'=>'registrasi',
			'url'=>'backend/registrasi/',
		);
		$global=$this->global_set($global_set);
		$data=array(
			'global'=>$global,
			);		
		$this->load->view($this->default_view.'add',$data);
	}
}
