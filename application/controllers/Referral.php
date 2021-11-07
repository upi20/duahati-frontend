<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Referral extends Render_Controller
{

    public function index()
    {
        // Page Settings
        $this->title = 'Referral';
        $this->content = 'referral/page';
        $this->plugins = ['datatables'];
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
