<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('fungsi');
        $this->load->library('user_agent');
        $this->load->helper('myfunction_helper');
        // backButtonHandle();
    }

    function index()
    {
        $data = array(
			'title' => "Dashboard"
		);
        $this->template->load('template','dashboard', $data);
    }

    

}
/* End of file Controllername.php */
 