<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('form_login');
	}

	public function getlogin()
	{
		$u=$this->input->post('username');
		$p=$this->input->post('password');
		$cek=$this->M_login->cek($u,$p);

		if ($cek->num_rows() == 1)
		{
		
			foreach($cek->result() as $dt)
			 {

				$sess_data['id_user']=$dt->id_user;
				$sess_data['username']=$dt->username;
				$sess_data['email']=$dt->email;

			}
			redirect('ctrl/tampil');
		}
		else
		{
			$this->session->set_flashdata('Pesan', 'Maaf Username/password yang anda masukan kurang tepat..!!');
			redirect('login');
		}
	}

}


/* End of file login.php */
/* Location: ./application/controllers/login.php */