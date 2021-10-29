<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends Render_Controller
{

	public function index()
	{
		$this->content = 'login';
		$this->data['alert_konfirmasi'] = $this->input->get('konfirmasi');
		$this->render();
	}

	public function demo()
	{
		$this->content = 'demo';
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