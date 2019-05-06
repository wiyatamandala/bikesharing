<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model('m_login');
		if($this->session->userdata('id_pengguna')&&$this->session->userdata('level')=='admin')
        {
            redirect('admin/homeAdmin');
        }
		else if($this->session->userdata('id_pengguna')&&$this->session->userdata('level')=='petugas')
        {
            redirect('petugas/homePetugas');
        }
		
	}

	function index()
	{
		$this->load->view('v_login');
	}

	function proses()
	{        
        $username=$this->input->post('username');
        $password=md5($this->input->post('password'));
        $check=$this->m_login->check($username,$password);
       	if($check->num_rows()>0){
       		foreach($check->result() as $data){
				$sess_data['id_pengguna'] = $data->id_pengguna;
				$sess_data['nama_pengguna'] = $data->nama_pengguna;
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['no_hp'] = $data->no_hp;
				$sess_data['level'] = $data->level;
				$sess_data['jabatan'] = $data->jabatan;
				$sess_data['ttd'] = $data->ttd;
				$sess_data['profil'] = $data->profil;
				$this->session->set_userdata($sess_data);
			}
            if($this->session->userdata('level') == 'admin')
			{
				redirect('admin/homeAdmin');
			}
			else if($this->session->userdata('level') == 'petugas')
			{
				redirect('petugas/homePetugas');
			}
        }else{
            //login gagal
            $this->session->set_flashdata('info', '<font size="1" color="red">*maaf Username atau Password salah</font>');
			redirect('login');
        }
	}
}
