<?php

class Notification_model extends CI_Model {
	public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function getAll() {
        $query = $this->db->get('notification');
        return $query->result();
    }

    public function getByUserID( $last_notification_id=0, $limit=true) {
    	$today = date("Y-m-d");
        // $today = '2025-04-30';
        $tgl_notif =  date('Y-m-d', strtotime('+6 month', strtotime($today)));
        $this->db->order_by('tmt_notif', 'DESC');
        if ($limit) {
            $this->db->select('*, tb_user.id as pk');
            $this->db->from('tb_log_notif');
            $this->db->join('tb_user','tb_user.id = tb_log_notif.id_user','left');
            $this->db->where('tmt_notif <=',  $tgl_notif);
            $this->db->where('status =',  0);
            $this->db->group_by('tb_user.id');
            $this->db->limit(8);
            $query = $this->db->get();
        } else {
            $query = $this->db->get_where('notification', ['user_id' => $id]);
        }

        $result = $query->result_array();
        foreach ($result as $key => $row) {
            $sel = 0;
            $today = date("Y-m-d");
            $datetime1 = new DateTime($today);
            $datetime2 = new DateTime($row['tmt_notif']);
            $difference = $datetime1->diff($datetime2);
			$sel =  $difference->y. ' Tahun ' . $difference->m. ' Bulan ' . $difference->d . ' hari ' ;
            $result[$key]['waw'] = $sel;
		}
        return $result;
    }


    function save($params)
    {
        extract($params);
		$result = array(
			'status'	=> 'error',
			'message'	=> 'Lengkapi form.'
		);

        $this->db->trans_begin();

        $this->db->where('id_notif', $pk_notif);
        $this->db->update('tb_log_notif', array('status' => '1'));

        $tgl_notif =  date('Y-m-d', strtotime('+4 year', strtotime($tmt)));
        $notif  = array(
            'id_user'   => $pk,
            'tmt_pangkat' 		=>  date('Y-m-d', strtotime($tmt)),
            'tmt_notif' => date('Y-m-d', strtotime($tgl_notif)),
            'keterangan'		=>  $ket
        );
        
        $this->db->insert('tb_log_notif',  $notif);


        $pangkat  = array(
            'id_user' => $pk,
            'pangkat' => $pangkat,
            'gol_ruang'  => $gol,
            'Tmt_pangkat'  => date('Y-m-d', strtotime($tmt)),
            'keterangan' => $ket
        );

        $this->db->insert('tb_kepangkatan', $pangkat);
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