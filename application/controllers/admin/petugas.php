<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {


	public function index()
	{
		

		$isi['content'] 		= 'admin/petugas/v_lihatDaftarPenugasan';
		$isi['judul'] 			= 'Petugas';
		$isi['sub_judul'] 		= 'Daftar Penugasan';
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
           	
       
		$this->load->view('admin/v_homeAdmin',$isi);
    }



	public function tambah()
	{
		$isi['content'] 		= 'admin/petugas/v_tambahPenugasan';
		$isi['judul'] 			= 'Petugas';
		$isi['sub_judul'] 		= 'Tambah Penugasan';
		$isi['sub_sub_judul'] 	= '';
		

		
		$this->load->view('admin/v_homeAdmin',$isi);
	}


}

