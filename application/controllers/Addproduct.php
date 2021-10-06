<?php

class Addproduct extends CI_Controller {
    
    public function index(){
        $subtype['subtype'] = $this->ProductModel-> psdata('subtype');
        $subtype['type'] = $this->ProductModel-> pdata('type');

        //$this->load->view('addproducttype', $type);
        // $this->load->view("addproducttype");
        $this->load->view("addprosubtype",$subtype);
    }
   
    public function addpstype(){
       // $this->load->view("addprosubtype");
       header('Content-Type: application/json');
    //    header('Content-Type : application/json');
        $sdata = $this->input->post('id');
        // dd($sdata);
        // $sdata['id'] = $this->ProductModel->fetch_id($prod_type));

        // unset($sdata['submit']); 
        // dd($sdata);
       $datr =  $this->ProductModel->pro_subtype($sdata);
 
       echo json_encode($datr);
        //$this->set($sdata);
        // redirect(base_url()."addProduct");
      }
      public function deletesdata()
      {

  
          $sub_id = $this->input->get('sub_id');
       // dd($sub_id);
          $res = $this->ProductModel->deletesdata( $sub_id);
          dd($res);
          if ($res) {
              redirect(base_url('addstype'));
          } else {
              $this->session->set_flashdata('error', 'this  data can not be delete');
              redirect(base_url('addstype'));
          }
      }
      public function addstype(){
    
$data = $this->input->post();
// dd($data);
unset($data['submit']);
$q = $this->ProductModel->addsub($data);  
redirect(base_url('Addproduct'));
// unset($sdata['submit']); 
      }
}

    ?>