<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KursiBerhadiah extends Render_Controller
{

    public function index($id)
    {
        // Page Settings
        $this->title = 'Kursi Berhadiah';
        $this->content = 'kursi_berhadiah/list';
        $this->data['id_pertandingan'] = $id;
        // Send data to view
        $this->render();
    }

    public function detail($id_p, $id)
    {
        // Page Settings
        $this->title = 'Kursi Berhadiah';
        $this->content = 'kursi_berhadiah/detail';
        $this->data['id_pertandingan'] = $id_p;
        $this->data['id_kategori'] = $id;

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
