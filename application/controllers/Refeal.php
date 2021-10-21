<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Refeal extends Render_Controller
{

    public function index()
    {
        // Page Settings
        $this->title = 'Refeal';
        $this->content = 'refeal/page';

        // Send data to view
        $this->render();
    }

    function __construct()
    {
        parent::__construct();
        $this->menu = 'refeal';
        $this->default_template = 'templates/header/home';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
