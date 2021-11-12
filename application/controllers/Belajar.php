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
        $this->data['kelas_id'] = $id;

        // Send data to view
        $this->render();
    }

    public function detail($id = null, $kelas_id = null)
    {
        // Page Settings
        $this->title = 'Belajar';
        $this->content = 'belajar/detail';
        $this->data['materi_id'] = $id;
        $this->data['kelas_id'] = $kelas_id;
        $this->data['submateri'] = 0;
        // Send data to view
        $this->render();
    }

    // submateri
    public function detail_sub($materi_id = null, $kelas_id = null)
    {
        // Page Settings
        $this->title = 'Belajar';
        $this->content = 'belajar/sub';
        $this->data['materi_id'] = $materi_id;

        // Send data to view
        $this->render();
    }

    public function detail_materi_sub($materi_sub_id = null, $materi_id = null)
    {
        // Page Settings
        $this->title = 'Belajar';
        $this->content = 'belajar/detail';
        $this->data['materi_id'] = $materi_id;
        $this->data['materi_sub_id'] = $materi_sub_id;
        $this->data['submateri'] = 1;

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
