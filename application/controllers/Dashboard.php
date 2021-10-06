<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    //Show admin dashboard
    public function index()
    {

        $data = $this->ProductModel->total();
        //  print_r($data);
        // exit;
        $this->load->view('home', $data);
    }
}