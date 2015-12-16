<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function cek($u,$p)
	{
		$this->db->where('username', $u)
				 ->where('pass' ,$p)
				 ->limit(1);
		
		return $query=$this->db->get('t_user');
	}
}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */