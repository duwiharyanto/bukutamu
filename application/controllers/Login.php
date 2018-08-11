<?php

	class Login extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->model('Crud');
		}
		private $master_tabel='user';
		private $id='user_id';

		function index(){
			if($this->session->userdata('login')==true AND $this->session->userdata('level')==1 ){
				redirect(site_url('admin/dashboard'));
			}elseif($this->session->userdata('login')==true AND $this->session->userdata('level')!=1 ){
				redirect(site_url('user/dashboard'));
			}
			$this->load->view('login');
		}
		function daftar(){
			$this->load->view('daftar');
		}
		function prosesdaftar(){
			$data=array(
				'user_username'=>$this->input->post('user_username'),
				'user_password'=>md5($this->input->post('user_password')),
				'user_levelid'=>2,
				'user_email'=>$this->input->post('user_email'),
				'user_terdaftar'=>date('Y-m-d')
			);
			$query=array(
				'tabel'=>'user',
				'data'=>$data,
			);
			$insert=$this->Crud->insert($query);
			if($insert){
				$this->session->set_flashdata('success','Pendaftaran berhasil');
			}else{
				$this->session->set_flashdata('error','Pendaftaran gagal');
			}			
			redirect(site_url());
		}
		function aksi_login(){
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));
			$query=array(
				'tabel'=>$this->master_tabel,
				'where'=>array('user_username'=>$username),
				'where_'=>array('user_password'=>$password),
				//'or_where'=>array('user_email'=>$username)
			);
			$cek_user=$this->Crud->read($query);
			if($cek_user->num_rows()==1){
				$user=$cek_user->row();
				$dt_session=array(
						'user_id'=>$user->user_id,
						'username'=>$user->user_username,
						'level'=>$user->user_levelid,
						'login'=>true,
						'email'=>$user->user_email,
						'terdaftar'=>$user->user_terdaftar
						);
				$this->session->set_userdata($dt_session);				
				if($this->session->userdata('level')==1){
				  redirect(site_url("backend/dashboard"));
				}else{
				  redirect(site_url("user/dashboard"));	
				}
			}else{
				$this->session->set_flashdata('error','username tidak ditemukan');
				redirect(base_url('Login'));
			}
		}
		function logout(){
			$this->session->sess_destroy();
			redirect(base_url('Login'));
		}	
	
	}
?>