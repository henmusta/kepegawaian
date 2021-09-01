<?php
/**
 * @var user_id [seharusnya diambil dari session] 
 */
class User_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }

    public function get_last_notif() {
    	$this->db->select('last_notification_id AS last');
        $query = $this->db->get_where('tb_admin', ['id', 1]);
        return $query->row();
    }

    public function update_last_notif($new_notif_id) {
        $this->db->update('tb_admin', ['last_notification_id' => $new_notif_id], [
            'id' => 1
        ]);
    }
    
}