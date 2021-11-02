<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Render_Controller
{

    public function index()
    {
        // Page Settings
        $this->title = 'Home';
        $this->content = 'home';

        // Send data to view
        $this->render();
    }

    function tes()
    {
        // Page Settings
        $this->title = 'tes';
        $this->content = 'tes';

        // Send data to view
        $this->render();
    }

    function __construct()
    {
        parent::__construct();
        $this->default_template = 'templates/header/home';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
