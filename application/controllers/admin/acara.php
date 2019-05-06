<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acara extends CI_Controller {

 // 	function __construct(){
	// 	parent::__construct();
	// 	if($this->session->userdata('level') != 'admin'){
	// 		redirect('login');
	// 	}
	// }

	public function index()
	{
		//$this->load->model('m_kuliah');

		$isi['content'] 		= 'admin/acara/v_lihatDaftarAcara';
		$isi['judul'] 			= 'Acara';
		$isi['sub_judul'] 		= 'Daftar Acara';
		$isi['sub_sub_judul'] 	= '';

		if($this->uri->segment(4)=="delete_success"){
            $isi['message']='<div class="alert alert-success fade in">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									Data sukses dihapus
							</div>';
		}
        else if($this->uri->segment(4)=="simpan_success"){
            $isi['message']='<div class="alert alert-success fade in">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									Data sukses disimpan
							</div>';
        }
        else{
            $isi['message']='';
        }
           	
        //$isi['data']		= $this->m_kuliah->tampildata();
		$this->load->view('admin/v_homeAdmin',$isi);
    }



	public function tambah()
	{
		$isi['content'] 		= 'admin/acara/v_tambahAcara';
		$isi['judul'] 			= 'Acara';
		$isi['sub_judul'] 		= 'Tambah Acara';
		$isi['sub_sub_judul'] 	= '';
		#$isi['auto_id']		= $this->m_peminjaman->auto_id();
		#$isi['id_ruangan1'] 	= $this->m_peminjaman->getRuangan();
		
		$this->load->view('admin/v_homeAdmin',$isi);
	}


}

