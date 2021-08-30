<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_kepegawaian');
        $this->load->model('Mod_riwayat');
        // backButtonHandle();
    }

    function index()
    {
        $data = array(
			'title' => "Pegawai"
		);
        $this->template->load('template','kepegawaian/kepegawaian', $data);
    }

    function form($pk=null)
    {
        $data = array(
			'title' => "form Pegawai",
            'data' => $this->Mod_kepegawaian->single($pk)
		);
        $this->template->load('template','kepegawaian/form', $data);
    }

    function print($pk)
    {
        $data = array(
			'title' => "BIODATA",
            'data'	=> $this->Mod_riwayat->single($pk),
		);
        $this->load->view('print', $data);
    }

    public function ajax_list()
    {
        ini_set('memory_limit','512M');
        set_time_limit(3600);
        $list = $this->Mod_kepegawaian->get_datatables();
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $pegawai) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $pegawai->nik;
            $row[] = $pegawai->nama;
            if(isset($pegawai->tmt_notif))
			{  
            $row[] = $pegawai->tmt_notif; 
            }else{
                $row[] =  'Lengkapi Data Kepangkatan';
            }
            if($tmt = $pegawai->tmt_notif)
			{
			$today = date("Y-m-d");
            $datetime1 = new DateTime($today);
            $datetime2 = new DateTime($tmt);
            $difference = $datetime1->diff($datetime2);
			$row[] =  $difference->y. ' Tahun ' . $difference->m. ' Bulan ' . $difference->d . ' hari ' ;
			}else{
            $row[] =  'Lengkapi Data Kepangkatan';
            }
            $row[] = $pegawai->pk;
            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Mod_kepegawaian->count_all(),
                        "recordsFiltered" => $this->Mod_kepegawaian->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }
 

    public function save()
    {
        $params 	= $this->input->post(NULL, TRUE);
        extract($params);
        $cek = $this->Mod_kepegawaian->cek_nip($user['nik']);
        if($cek->num_rows() > 0){
            echo json_encode(array("error" => "NIK Sudah Ada!!"));
        }else{
            $nama = slug($user['nik']);
            $config['upload_path']   = './assets/foto/pegawai/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png'; //mencegah upload backdor
            $config['max_size']      = '1000';
            $config['max_width']     = '2000';
            $config['max_height']    = '1024';
            $config['file_name']     = $nama; 
            
            $this->upload->initialize($config);
            
            if ($this->upload->do_upload('imagefile')){
            $gambar = $this->upload->data();
            $save  = array(
                'nama' => $user['nama'],
                'nik' =>  $user['nik'],
                'ttl' =>  $user['ttl'],
                'nik' =>  $user['nik'],
                'agama'  => $user['agama'],
                'jenis_kelamin'  => $user['gender'],
                'status_nikah' => $user['status'],
                'alamat' =>$user['alamat'],
                'tempat_lahir'  => $user['tempat_lahir'],
                'no_hp' =>$user['no_hp'],
                'image' => $gambar['file_name']
            );
            }else{//Apabila tidak ada gambar yang di upload
                $save  = array('nama' => $user['nama'],
                    'nik' =>  $user['nik'],
                    'ttl' =>  $user['ttl'],
                    'nik' =>  $user['nik'],
                    'tempat_lahir'  => $user['tempat_lahir'],
                    'agama'  => $user['agama'],
                    'jenis_kelamin'  => $user['gender'],
                    'status_nikah' => $user['status'],
                    'alamat' =>$user['alamat'],
                    'no_hp' =>$user['no_hp']
            );
            
            }
            $id = $user['id'];
            $response = $this->Mod_kepegawaian->save($id, $save);
            $response['status'] = isset($response['status']) && is_bool($response['status']) && $response['status'] === TRUE ? 'success' : 'error';
            $this->output
                ->set_status_header(200)
                ->set_content_type('Application/json')
                ->set_output(json_encode($response));
            }
    }



}
/* End of file Controllername.php */
 