<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ads extends Render_Controller
{

  public function index($id)
  {
    // Page Settings
    $this->title = 'LEARDBOARD';
    $this->content = 'ads/page';
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
