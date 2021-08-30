<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_login extends CI_Model {
    function Aplikasi()
    {
        return $this->db->get('tb_aplikasi');
    }

    function Auth($username, $password)
    {

        //menggunakan active record . untuk menghindari sql injection
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $this->db->where("is_active", 'Y');
        return $this->db->get("tb_user");    
    }

    function check_db($username)
    {
        return $this->db->get_where('tb_admin', array('username' => $username));
    }

    function save($data)
    {
		$result = array(
			'status'	=> 'error',
			'message'	=> 'Lengkapi form.'
		);
		$this->db->trans_begin();
        $insert = $this->db->insert($table, $data);
		if ($this->db->trans_status() === FALSE){
			$result['message'] 	= $this->db->error();
			$this->db->trans_rollback();
		} else {
			$this->db->trans_commit();
			$result['status'] 	= TRUE;
			$result['message'] 	= 'Data telah disimpan.';
		}	
		return $result;
		unset($result);
    }



}

/* End of file Mod_login.php */
