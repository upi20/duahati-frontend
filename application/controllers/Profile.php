<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends Render_Controller
{

    public function index()
    {
        // Page Settings
        $this->title = 'Profile';
        $this->content = 'profile/page';
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
