<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_riwayat');
        // backButtonHandle();
    }

    function update($pk)
    {
        $data = array(
			'title' => "Data Riwayat Kepegawaian",
            'data'	=> $this->Mod_riwayat->single($pk),
            'pk'    => $pk
		);
        $this->template->load('template','kepegawaian/Riwayat', $data);
    }

    public function save(){
        $params 	= $this->input->post(NULL, TRUE);
        $response 	= $this->Mod_riwayat->save($params);
        $response['status'] = isset($response['status']) && is_bool($response['status']) && $response['status'] === TRUE ? 'success' : 'error';
        $this->output
			->set_status_header(200)
			->set_content_type('Application/json')
			->set_output(json_encode($response));
	}


}

 