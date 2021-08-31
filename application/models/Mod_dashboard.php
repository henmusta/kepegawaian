

<?php

class Mod_dashboard extends CI_Model {
	public function __construct() {
        parent::__construct();
      
    }

    public function cards(){

        // $today = '2025-04-30';
        $today = date("Y-m-d");
        $tgl_notif =  date('Y-m-d', strtotime('+4 month', strtotime($today)));

        $query = "
        SELECT 
        (SELECT 
          COUNT(`id`) 
        FROM
          `tb_user`) AS `user_all`,
        (SELECT 
          COUNT(`id`) 
        FROM
          `tb_user` 
          LEFT JOIN tb_log_notif 
          ON tb_log_notif.id_user = tb_user.id
        WHERE tmt_notif <= '$tgl_notif' 
        GROUP BY tb_user.id) AS `user_notif` 
        ";
        return $this->db->query($query)->row();
        
        }

}


