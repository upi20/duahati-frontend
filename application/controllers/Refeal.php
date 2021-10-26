<?php
defined('BASEPATH') or exit('No direct script access allowed');

class referral extends Render_Controller
{

    public function index()
    {
        // Page Settings
        $this->title = 'referral';
        $this->content = 'referral/page';

        // Send data to view
        $this->render();
    }

    function __construct()
    {
        parent::__construct();
        $this->menu = 'referral';
        $this->default_template = 'templates/header/home';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
