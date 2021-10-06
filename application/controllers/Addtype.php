<?php

class Addtype extends CI_Controller {
    
    public function index(){
       
        $type['type'] = $this->ProductModel-> pdata();
        $this->load->view("addproducttype", $type);
    }
    public function addptype(){
        $data = array(
            "prod_type" => $this->input->post('prod_type'),
        );
        // dd($data);
        $this->ProductModel-> pro_type($data);
        redirect(base_url()."Addproduct");
    }
    public function deletedata()
    {

        $Id = $this->input->get('Id');

        $res = $this->ProductModel->deletedata( $Id);

        if ($res) {
            redirect(base_url('Addtype'));
        } else {
            $this->session->set_flashdata('error', 'this  data can not be delete');
            redirect(base_url('Addtype'));
        }
    }
  
    public function fetch_typeid($Id)
    {
        $id = $this->db->query("select Id from type where Id = '$Id';");
        return $id->result_array()[0]['type_id'] ;
    }
}

    ?>