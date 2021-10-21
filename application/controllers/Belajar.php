<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belajar extends Render_Controller
{

    public function index()
    {
        // Page Settings
        $this->title = 'Belajar';
        $this->content = 'belajar/page';

        // Send data to view
        $this->render();
    }

    public function kelas($id = null)
    {
        // Page Settings
        $this->title = 'Belajar';
        $this->content = 'belajar/kelas';

        // Send data to view
        $this->render();
    }

    public function detail($id = null)
    {
        // Page Settings
        $this->title = 'Belajar';
        $this->content = 'belajar/detail';

        // Send data to view
        $this->render();
    }

    function __construct()
    {
        parent::__construct();
        $this->menu = 'belajar';
        $this->default_template = 'templates/header/home';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
