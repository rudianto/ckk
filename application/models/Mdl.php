<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl extends CI_Model {

	// fungsi select data database
	public function all()
	{

		$query=$this->db->get('t_transaksi');
		if ($query->num_rows()>0) {
			return $query->result();
		}
		else{
			
			return array();
		}
	}

	//fungsi insert data database
	public function insert($tambah)
	{
		$this->db->insert('t_transaksi', $tambah);
	}

	public function find($id)
	{
		$query=$this->db->get_where('t_transaksi', array('id_transaksi'=>$id));
		return $query->row();
	}

	public function update($id,$ubah)
	{
		$this->db->update('t_transaksi',$ubah,array('id_transaksi'=>$id));
	}

	public function delete($id)
	{
		$this->db->delete('t_transaksi',array('id_transaksi'=>$id));
	}



	#========================K.A.T.E.G.O.R.I================================>

	public function kt_select()
	{

	}

	public function kt_find()
	{
		
	}
	
	public function kt_insert()
	{

	}

	public function kt_update()
	{

	}

	public function kt_delete()
	{

	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */