<?php
class Home extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->load->view('common/header');
        $this->load->view('index');
        $this->load->view('common/footer');
    }
}
