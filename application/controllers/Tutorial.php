<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutorial extends Render_Controller
{

    public function index()
    {
        // Page Settings
        $this->title = 'tutorial';
        $this->content = 'tutorial/page';

        // Send data to view
        $this->render();
    }

    public function detail($id = null)
    {
        // Page Settings
        $this->title = 'Tutorial Detail';
        $this->content = 'tutorial/detail';

        // Send data to view
        $this->render();
    }

    function __construct()
    {
        parent::__construct();
        $this->menu = 'tutorial';
        $this->default_template = 'templates/header/home';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
