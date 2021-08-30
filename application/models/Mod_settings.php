<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Create By ARYO
 */
class Mod_settings extends CI_Model
{
	var $table = 'tb_settings';
    var $column_order = array('nama_kepala','nip_kepala','jabatan_kepala','mengetahui','jabatan_saksi','nip_saksi');
    var $column_search = array('nama_kepala','nip_kepala','jabatan_kepala','mengetahui','jabatan_saksi','nip_saksi');
    var $order = array('id' => 'desc'); // default order 
	function __construct()
	{
		parent::__construct();
        $this->load->database();
	}

	private function _get_datatables_query()
    {
        $this->db->from($this->table);
        $i = 0;
    
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                
                if($i===0) 
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
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

    public function count_all()
    {
        
        $this->db->from('tb_settings');
        return $this->db->count_all_results();
    }

    function getAll()
    {
        return $this->db->get("tb_settings");
    }
    function getsettings($id)
    {   
        $this->db->where("id", $id);
        return $this->db->get("tb_settings")->row();
    }

    // function ($id, $data)
    // {
    //     $this->db->where('id', $id);
	// 	$this->db->update('tb_settings', $data);
    // }

    
    function updatesettings($params)
    {
        extract($params);
		$result = array(
			'status'	=> 'error',
			'message'	=> 'Lengkapi form.'
		);

        $update  = array(
            'nama_kepala' => $nama_kepala,
            'nip_kepala' => $nip_kepala,
            'jabatan_kepala'  => $jabatan_kepala,
            'mengetahui'  => $saksi,
            'nip_saksi' => $nip_saksi,
            'jabatan_saksi' => $jabatan_saksi
        );

        
		$this->db->trans_begin();
        $this->db->where('id', $id_set);
        $this->db->update('tb_settings', $update);
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
