<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require_once(dirname(__FILE__) ,'/assets/vendor/autoload.php')
require_once(dirname(__DIR__) . '/vendor/autoload.php');

use Dompdf\Dompdf;

class Invoice extends CI_Controller
{
    
    public function index()

    {
        echo 'hi';
        $id = $this->input->get('product_id');
        // dd($id);
       $data= $data['user_id'] = $this->UserModel->fetch_userid($this->session->userdata('email'));
    
     //dd($data);
        $dompdf = new Dompdf();
     // dd($data);
       // $product_name = $data->product_name;
        //$product_cost = $data->product_cost;
       // $Prod_type = $data->Prod_type;
        //$sub_name = $data->sub_name;
       // $product_desc = $data->product_desc;
       
        $html =
            "<h3>invoice</h3></br>
        <h4>Product Id:  $id</h4></br>
        <h4>User_id  : $data</h4></br>";
      
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream($data);
        redirect(base_url('ProductGallery'));
    }
}