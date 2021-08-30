<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Notif_all extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_notif');
        
	}

	public function index()
	{
        $data = array(
			'title' => "Notification"
		);
        $this->template->load('template','notification', $data);
	}

	public function ajax_list()
    {
        ini_set('memory_limit','512M');
        set_time_limit(3600);
        $list = $this->Mod_notif->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $apl) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $apl->image;
            $row[] = $apl->nama;
            // $row[] = $apl->tmt_notif;
            if($tmt = $apl->tmt_notif)
			{
			$today = date("Y-m-d");
            $datetime1 = new DateTime($today);
            $datetime2 = new DateTime($tmt);
            $difference = $datetime1->diff($datetime2);
			$row[] =  $difference->y. ' Tahun ' . $difference->m. ' Bulan ' . $difference->d . ' hari ' ;
			}else{
            $row[] =  '';
            }
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Mod_notif->count_all(),
                        "recordsFiltered" => $this->Mod_notif->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    } 
}