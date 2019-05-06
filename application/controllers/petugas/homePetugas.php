<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePetugas extends CI_Controller {

 
	public function index()
	{
		$isi['content'] 		= 'petugas/v_content';
		$isi['judul'] 			= 'Dashboard';
		$isi['sub_judul'] 		= '';
		$isi['sub_sub_judul'] 	= '';
		$this->load->view('petugas/v_homePetugas',$isi);
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
