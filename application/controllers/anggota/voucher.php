<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller {


	public function index()
	{
		

		$isi['content'] 		= 'anggota/v_lihatDaftarVoucher';
		$isi['judul'] 			= 'Daftar Voucher';
		$isi['sub_judul'] 		= '';
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
           	
       
		$this->load->view('anggota/v_homeAnggota',$isi);
    }


}

