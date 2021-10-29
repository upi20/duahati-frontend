<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends Render_Controller
{

    public function index()
    {
        // Page Settings
        $this->title = 'News';
        $this->content = 'news/page';

        // Send data to view
        $this->render();
    }

    public function detail($id = null)
    {
        // Page Settings
        $this->title = 'News Detail';
        $this->content = 'news/detail';
        $this->data['news_id'] = $id;
        // Send data to view
        $this->render();
    }

    function __construct()
    {
        parent::__construct();
        $this->menu = 'news';
        $this->default_template = 'templates/header/home';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
