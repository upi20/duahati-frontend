<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vip extends Render_Controller
{

    public function index()
    {
        // Page Settings
        $this->title = 'Vip';
        $this->content = 'belajar/page';
        $this->data['vip'] = 1;

        // Send data to view
        $this->render();
    }

    function __construct()
    {
        parent::__construct();
        $this->menu = 'vip';
        $this->default_template = 'templates/header/home';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
