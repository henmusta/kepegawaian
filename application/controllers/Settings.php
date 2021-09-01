<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_settings');
    }

    function index()
    {
        $data = array(
			'title' => "settings"
		);
        $this->template->load('template','kepegawaian/settings', $data);
    }

    public function ajax_list()
    {
        ini_set('memory_limit','512M');
        set_time_limit(3600);
        $list = $this->Mod_settings->get_datatables();
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $settings) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $settings->nama_kepala;
            $row[] = $settings->nip_kepala;
            $row[] = $settings->jabatan_kepala;
            $row[] = $settings->mengetahui;
            $row[] = $settings->nip_saksi;
            $row[] = $settings->jabatan_saksi;
            $row[] = $settings->id;
            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Mod_settings->count_all(),
                        "recordsFiltered" => $this->Mod_settings->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    public function edit_settings($id)
    {   
            $data = $this->Mod_settings->getsettings($id);
            echo json_encode($data);   
    }
    public function update(){
        $params 	= $this->input->post(NULL, TRUE);
        $response 	= $this->Mod_settings->updatesettings($params);
        $response['status'] = isset($response['status']) && is_bool($response['status']) && $response['status'] === TRUE ? 'success' : 'error';
        $this->output
			->set_status_header(200)
			->set_content_type('Application/json')
			->set_output(json_encode($response));
	}


 

}

 