<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends Render_Controller
{

	public function index()
	{
		$this->title = 'Registrasi';
		$this->content = 'registrasi';
		$this->render();
	}

	public function invoice()
	{
		$this->title = 'Detail Invoice';
		$this->content = 'invoice';
		$this->data['token'] = $this->input->get('token');
		$this->data['email'] = $this->input->get('email');
		$this->data['nama'] = $this->input->get('nama');
		$this->data['telepon'] = $this->input->get('telepon');
		$this->render();
	}

	public function konfirmasi()
	{
		$this->data['token'] = $this->input->get('token');
		$this->title = 'Konfirmasi Pembayaran';
		$this->content = 'konfirmasi';
		$this->render();
	}

	function __construct()
	{
		parent::__construct();
		$this->default_template = 'templates/login';
		$this->load->library('plugin');
		$this->load->helper('url');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */