<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	public function GetLogin($username,$password)
	{
		return $this->db->get_where('admin',array('username' => $username,'password' => $password));;
	}
}

/* End of file adminModel.php */
/* Location: ./application/models/adminModel.php */