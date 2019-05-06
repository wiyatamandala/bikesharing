<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAnggota extends CI_Controller {

 
	public function index()
	{
		$isi['content'] 		= 'anggota/v_content';
		$isi['judul'] 			= 'Dashboard';
		$isi['sub_judul'] 		= '';
		$isi['sub_sub_judul'] 	= '';
		$this->load->view('anggota/v_homeAnggota',$isi);
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
