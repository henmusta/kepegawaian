<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_riwayat extends CI_Model
{

	public function save($params){
		$result = array(
			'status'	=> 'error',
			'message'	=> 'Lengkapi form.',
			// 'redirect'	=> $this->module['url']
		);
		$data_is_valid = TRUE;
		extract($params);
		if($data_is_valid === TRUE){
			$this->db->trans_begin();
            $deleted = $this->delete($params);
            $id_user = $pk;	
            if($jenis == 'pangkat'){
                foreach( $kepangkatan AS $index => $pangkat ){		
                    $this->db->query("
                        INSERT INTO `tb_kepangkatan` (`id_user`,`pangkat`,`gol_ruang`,`Tmt_pangkat`,`keterangan`) 
                            VALUES ('".$id_user."','".$pangkat['pangkat']."','".$pangkat['gol']."','".$pangkat['tmt']."','".$pangkat['ket']."');
                    ");
                }

               $tgl_notif =  date('Y-m-d', strtotime('+4 year', strtotime($pangkat['tmt'])));
                
                $ref = [
                    'tmt' 		=>  $pangkat['tmt'],
                    'tmt_notif' => $tgl_notif,
                    'ket'		=>  $pangkat['ket']
                ];

                $this->db->query("
                        INSERT INTO `tb_log_notif` (`id_user`,`tmt_pangkat`,`tmt_notif`,`keterangan`) 
                            VALUES ('".$id_user."','".$ref['tmt']."','".$ref['tmt_notif']."','".$ref['ket']."');
                    ");
            }elseif($jenis == 'jabatan'){
                foreach( $jabatan AS $index => $jabat ){		
                    $this->db->query("
                        INSERT INTO `tb_jabatan` (`id_user`,`jabatan`,`eselon`,`tmt_jabatan`) 
                            VALUES ('".$id_user."','".$jabat['jabatan']."','".$jabat['eselon']."','".$jabat['tmt']."');
                    ");
                }
                
            }elseif($jenis == 'pendidikan'){
                foreach( $pendidikan AS $index => $didikan ){		
                    $this->db->query("
                        INSERT INTO `tb_pendidikan` (`id_user`,`tingkat_pendidikan`,`jurusan`,`nama_sekolah`, tgl_lulus) 
                            VALUES ('".$id_user."','".$didikan['tingkat']."','".$didikan['jurusan']."','".$didikan['nama']."','".$didikan['tgl']."');
                    ");
                }
            }elseif($jenis == 'STRUKTURAL' || $jenis == 'FUNGSIONAL' || $jenis == 'TEKNIS'){
                foreach( $struktural AS $index => $struktur ){		
                    $this->db->query("
                        INSERT INTO `tb_diklat` (`id_user`,`nama_diklat`,`tahun_lulus`,tempat_diklat, penyelenggara, jenis) 
                            VALUES ('".$id_user."','".$struktur['nama_diklat']."','".$struktur['tahun_lulus']."','".$struktur['tempat_diklat']."','".$struktur['penyelenggara']."','".$jenis."');
                    ");
                }
            }elseif($jenis == 'penghargaan'){
                foreach( $penghargaan AS $index => $jasa ){		
                    $this->db->query("
                        INSERT INTO `tb_penghargaan` (`id_user`,`nama_jasa`,`asal_perolehan`, tahun) 
                            VALUES ('".$id_user."','".$jasa['nama']."','".$jasa['asal']."','".$jasa['tahun']."');
                    ");
                }
            }elseif($jenis == 'hukuman'){
                foreach( $hukuman AS $index => $huk ){		
                    $this->db->query("
                        INSERT INTO `tb_huk_disiplin` (`id_user`,`jenis_huk`,`nama_huk`, Tmt) 
                            VALUES ('".$id_user."','".$huk['jenis']."','".$huk['nama']."','".$huk['tmt']."');
                    ");
                }
            }elseif($jenis == 'prestasi'){
                foreach( $prestasi AS $index => $pres ){		
                    $this->db->query("
                        INSERT INTO `tb_prestasi` (`id_user`,`tahun`,`nilai_skp`, nilai_perilaku, nilai_prestasi) 
                            VALUES ('".$id_user."','".$pres['tahun']."','".$pres['skp']."','".$pres['perilaku']."','".$pres['prestasi']."');
                    ");
                }
            }elseif($jenis == 'keluarga'){
                foreach( $ibu AS $index => $val ){		
                    $this->db->query("
                        INSERT INTO `tb_keluarga` (`id_user`,`nama`,`tgl_lahir`, pekerjaan, status) 
                            VALUES ('".$id_user."','".$val['nama']."','".$val['tgl']."','".$val['pekerjaan']."','Ibu');
                    ");
                    
                }

                foreach( $ayah AS $index => $val ){		
                    $this->db->query("
                        INSERT INTO `tb_keluarga` (`id_user`,`nama`,`tgl_lahir`, pekerjaan, status) 
                            VALUES ('".$id_user."','".$val['nama']."','".$val['tgl']."','".$val['pekerjaan']."', 'Ayah');
                    ");    
                }
                foreach( $pasutri AS $index => $val ){		
                    $this->db->query("
                        INSERT INTO `tb_keluarga` (`id_user`,`nama`,`tgl_lahir`, tgl_pernikahan, pekerjaan, status) 
                            VALUES ('".$id_user."','".$val['nama']."','".$val['tgl_lahir']."','".$val['tgl_pernikahan']."','".$val['pekerjaan']."', 'Pasutri');
                    ");    
                }
                foreach( $anak AS $index => $val ){		
                    $this->db->query("
                        INSERT INTO `tb_keluarga` (`id_user`,`nama`,`tgl_lahir`, jenis_kelamin, pekerjaan, status) 
                            VALUES ('".$id_user."','".$val['nama']."','".$val['tgl']."','".$val['gender']."','".$val['pekerjaan']."', 'Anak');
                    ");    
                }


            }


                  	
				

            

			if ($this->db->trans_status() === FALSE){
				$result['message'] 	= $this->db->error();
				$this->db->trans_rollback();
			} else {
				$this->db->trans_commit();
				$result['status'] 	= TRUE;
				$result['message'] 	= 'Data telah disimpan.';
			}
		}
		return $result;
		unset($result);
	}

    public function single($pk){
		$pegawai = (object)[];
		$pegawai = $this->db->from('tb_user')
        ->where(['tb_user.id'=>$pk])->get()->row();
		$pegawai->rincian_pangkat = $this->db->select('pangkat as pangkat, gol_ruang as gol, Tmt_pangkat as tmt, keterangan as ket')->from('tb_kepangkatan')
			->join('tb_user','tb_user.id=tb_kepangkatan.id_user','left')
			->where(array('tb_kepangkatan.id_user'=>$pegawai->id))->get()->result();
        $pegawai->rincian_jabatan = $this->db->select('*')->from('tb_jabatan')
			->join('tb_user','tb_user.id=tb_jabatan.id_user','left')
			->where(array('tb_jabatan.id_user'=>$pegawai->id))->get()->result();
        $pegawai->rincian_pendidikan = $this->db->select('*')->from('tb_pendidikan')
			->join('tb_user','tb_user.id=tb_pendidikan.id_user','left')
			->where(array('tb_pendidikan.id_user'=>$pegawai->id))->get()->result();
        $pegawai->rincian_diklat_struktural = $this->db->select('*')->from('tb_diklat')
			->join('tb_user','tb_user.id=tb_diklat.id_user','left')
			->where(array('tb_diklat.id_user'=>$pegawai->id, 'tb_diklat.jenis' => 'STRUKTURAL'))->get()->result();
        $pegawai->rincian_diklat_fungsional = $this->db->select('*')->from('tb_diklat')
			->join('tb_user','tb_user.id=tb_diklat.id_user','left')
			->where(array('tb_diklat.id_user'=>$pegawai->id, 'tb_diklat.jenis' => 'FUNGSIONAL'))->get()->result();
        $pegawai->rincian_diklat_teknis = $this->db->select('*')->from('tb_diklat')
			->join('tb_user','tb_user.id=tb_diklat.id_user','left')
			->where(array('tb_diklat.id_user'=>$pegawai->id, 'tb_diklat.jenis' => 'TEKNIS'))->get()->result();
        $pegawai->rincian_penghargaan = $this->db->select('*')->from('tb_penghargaan')
			->join('tb_user','tb_user.id=tb_penghargaan.id_user','left')
			->where(array('tb_penghargaan.id_user'=>$pegawai->id))->get()->result();
        $pegawai->rincian_hukuman = $this->db->select('*')->from('tb_huk_disiplin')
			->join('tb_user','tb_user.id=tb_huk_disiplin.id_user','left')
			->where(array('tb_huk_disiplin.id_user'=>$pegawai->id))->get()->result();
        $pegawai->rincian_prestasi = $this->db->select('*')->from('tb_prestasi')
			->join('tb_user','tb_user.id=tb_prestasi.id_user','left')
			->where(array('tb_prestasi.id_user'=>$pegawai->id))->get()->result();
        $pegawai->rincian_keluarga_ibu = $this->db->select('*')->from('tb_keluarga')
			->join('tb_user','tb_user.id=tb_keluarga.id_user','left')
			->where(array('tb_keluarga.id_user'=>$pegawai->id, 'tb_keluarga.status' => 'Ibu'))->get()->result();
        $pegawai->rincian_keluarga_ayah = $this->db->select('*')->from('tb_keluarga')
			->join('tb_user','tb_user.id=tb_keluarga.id_user','left')
			->where(array('tb_keluarga.id_user'=>$pegawai->id, 'tb_keluarga.status' => 'Ayah'))->get()->result();
        $pegawai->rincian_keluarga_pasutri = $this->db->select('*')->from('tb_keluarga')
			->join('tb_user','tb_user.id=tb_keluarga.id_user','left')
			->where(array('tb_keluarga.id_user'=>$pegawai->id, 'tb_keluarga.status' => 'Pasutri'))->get()->result();
        $pegawai->rincian_keluarga_anak = $this->db->select('*')->from('tb_keluarga')
			->join('tb_user','tb_user.id=tb_keluarga.id_user','left')
			->where(array('tb_keluarga.id_user'=>$pegawai->id, 'tb_keluarga.status' => 'Anak'))->get()->result();
		return $pegawai;
	}

    public function delete($params = array()){

		extract($params);

		$result = array(
			'status'	=> 'error',
			'message'	=> 'Please complete data field requirements.'
		);

		if( isset($pk) ){
			$result['message'] 	= "Data couldnt delete.";
			$this->db->trans_begin();

            if($jenis == 'pangkat'){
                $this->db->query("DELETE FROM `tb_kepangkatan`  WHERE id_user ='". $pk ."';");
            }elseif($jenis == 'jabatan'){
                $this->db->query("DELETE FROM `tb_jabatan`  WHERE id_user ='". $pk ."';");
            }elseif($jenis == 'pendidikan'){
                $this->db->query("DELETE FROM `tb_pendidikan`  WHERE id_user ='". $pk ."';");
            }elseif($jenis == 'STRUKTURAL' || $jenis == 'FUNGSIONAL' || $jenis == 'TEKNIS'){
                $this->db->query("DELETE FROM `tb_diklat`  WHERE id_user ='". $pk ."' AND jenis='". $jenis ."';");
            }elseif($jenis == 'penghargaan'){
                $this->db->query("DELETE FROM `tb_penghargaan`  WHERE id_user ='". $pk ."';");
            }elseif($jenis == 'hukuman'){
                $this->db->query("DELETE FROM `tb_huk_disiplin`  WHERE id_user ='". $pk ."';");
            }elseif($jenis == 'prestasi'){
                $this->db->query("DELETE FROM `tb_prestasi`  WHERE id_user ='". $pk ."';");
            }elseif($jenis == 'keluarga'){
                $this->db->query("DELETE FROM `tb_keluarga`  WHERE id_user ='". $pk ."';");
            }

			if ($this->db->trans_status() === FALSE){
				$result['message'] 	= $this->db->error();
				$this->db->trans_rollback();
			} else {
				$this->db->trans_commit();
				$result['status'] 	= TRUE;
				$result['message'] 	= 'Data telah disimpan.';
			}

		}
		return $result;
		unset($result);
	}
}