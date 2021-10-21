<?php
defined('BASEPATH') or exit('No direct script access allowed');

class result extends Render_Controller
{

  public function index($id)
  {
    // Page Settings
    $this->title = 'Result Quiz Berhadiah';
    $this->content = 'result/page';
    $this->data['id_pertandingan'] = $id;

    // Send data to view
    $this->render();
  }

  function __construct()
  {
    parent::__construct();
    $this->default_template = 'templates/header/pertandingan';
    $this->load->library('plugin');
    $this->load->helper('url');
  }
}
