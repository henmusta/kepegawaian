<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_kepegawaian extends CI_Model
{

    var $table = 'kepegawaian';
	var $column_search = array('nama','tmt_pangkat','pangkat'); 
	var $column_order = array('nama','tmt_pangkat','pangkat'); 
	var $order = array('tb_user.id' => 'desc'); 
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

		private function _get_datatables_query()
	{
		
		$this->db->select('*, tb_user.id as pk')->from('tb_user')->join('tb_log_notif','tb_user.id = tb_log_notif.id_user','left')->group_by('tb_user.id');
		$i = 0;

	foreach ($this->column_search as $item)
	{
	if($_POST['search']['value']) 
	{

	if($i===0)
	{
	$this->db->group_start();
	$this->db->like($item, $_POST['search']['value']);
	}
	else
	{
		$this->db->or_like($item, $_POST['search']['value']);
	}

		if(count($this->column_search) - 1 == $i) 
		$this->db->group_end(); //close bracket
	}
	$i++;
	}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}


	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all()
	{
        $this->db->from('tb_user');
		return $this->db->count_all_results();
	}

	
    function cek_nip($nik)
    {
        $this->db->where("nik",$nik);
        return $this->db->get("tb_user");
    }



	function save($id,$save)
    {
		$result = array(
			'status'	=> 'error',
			'message'	=> 'Lengkapi form.'
		);
		$this->db->trans_begin();

		if ($id != "") {
			$this->db->where('id', $id);
			$this->db->update('tb_user', $save);
		  } else {
			$this->db->insert('tb_user', $save);
		  }

	

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

	public function single($pk){
		$pegawai = (object)[];
		$pegawai = $this->db->from('tb_user')
        ->where(['tb_user.id'=>$pk])->get()->row();
		return $pegawai;
	}

}