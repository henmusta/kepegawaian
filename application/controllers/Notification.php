<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notification extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Notification_model');
    }
    public function index() {
        $last_notification_id = $this->User_model->get_last_notif()->last;
        $data = $this->Notification_model->getByUserID(
            $last_notification_id
        );
        echo json_encode($data);
    } 
    public function save(){
        $params 	= $this->input->post(NULL, TRUE);
        $response 	= $this->Notification_model->save($params);
        $response['status'] = isset($response['status']) && is_bool($response['status']) && $response['status'] === TRUE ? 'success' : 'error';
        $this->output
			->set_status_header(200)
			->set_content_type('Application/json')
			->set_output(json_encode($response));
	}
}