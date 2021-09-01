<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_dashboard');
        // backButtonHandle();
    }

    function index()
    {
        $data = array(
			'title' => "Dashboard",
            'cards' 	=> $this->Mod_dashboard->cards()
		);
        $this->template->load('template','dashboard', $data);
    }

    

}
/* End of file Controllername.php */
 