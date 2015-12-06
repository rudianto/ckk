<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('mdl');
		
	}

	public function index()
	{
		
	}

	public function info()
	{
		phpinfo();
	}

	public function tampil()
	{
		$data['select']=$this->mdl->all();
		$this->load->view('layout/header');
		$this->load->view('layout/menu_atas');
		$this->load->view('template/view_data',$data);
	}

	public function insert()
	{
		
		$tambah=$this->input->post();
		if ($tambah) {
			$tambah['waktu']=date('Y-m-d H:i:s');
			$this->mdl->insert($tambah);
			redirect('ctrl/tampil');
		}
		$this->load->view('template/tambah');

	}

	public function update($id)
	{
		$data['value']=$this->mdl->find($id);
		$ubah=$this->input->post();
		if ($ubah) {
			
			$this->mdl->update($id,$ubah);
			redirect('ctrl/tampil');
		}
		//print_r($ubah);
		$this->load->view('template/ubah',$data);
	}

	public function delete($id)
	{
		$this->mdl->delete($id);
		redirect('ctrl/tampil','refresh');
	}



	#========================K.A.T.E.G.O.R.I================================>

	public function kt_select()
	{
		$data['kt']=$this->mdl-kt_select();
		$this->load->view('template/view_kategori', $data);
	}
	
	public function kt_insert()
	{
		$kinsert=$this->input-post();
		if ($kinsert) {
			$this->mdl->kt_insert($kinsert);
			redirect('ctrl/kt_select','refresh');

		}
	}

	public function kt_update()
	{

	}

	public function kt_delete()
	{

	}


}

/* End of file ctrl.php */
/* Location: ./application/controllers/ctrl.php */