<?php

class Updateproduct extends CI_Controller {
    
    public function index(){
        if (!is_authenticated()){
            redirect(base_url()."login");
        }
        $id = $this->input->get('product_id');
// dd($id);       
        $data['products'] = $this->ProductModel->showprodid($id);
        
        $data['type'] = $this->ProductModel-> pdata();
        $data['subtype'] = $this->ProductModel->psdata();
        $this->load->view("updatepro", $data);
       
    }
    
    public function updatepr(){
        $id = $this->input->get('product_id');
         //dd($id);
        if(count($this->input->post()) > 0){
            
            // Config for images
          
            // Validate Form data
            
            $this->form_validation->set_rules('product_name','Product Name','required|is_unique[products.product_name]');
            $this->form_validation->set_rules('product_desc','Product Description','required');
            
            $this->form_validation->set_rules('product_cost','Product Cost','required|numeric|greater_than[0]');
            if($this->form_validation->run() == false){
                $this->session->set_flashdata("error",validation_errors());
                redirect(base_url()."updateprouct");
              //  dd($id);
            }
           

            //update product detail to model
           
            $data['product_name'] = $this->input->post('product_name');
            $data['product_desc'] = $this->input->post('product_desc');
          //  $data['product_image'] = $this->input->post('product_image');
            $data['product_name'] = $this->input->post('product_name');
            $data['user_id'] = $this->UserModel->fetch_userid($this->session->userdata('email'));
            $id = $this->input->get('product_id');
            // dd($data);
            $res = $this->ProductModel-> updateProduct($id,$data);
            if(!$res){
                $this->session->set_flashdata("error","Something went wrong !!");
                redirect(base_url()."updateprouct");
            }
            $product_id = $this->ProductModel->fetch_product_id($data['product_name']);
            
          
            //Product and images updated successfully
            $this->session->set_flashdata("success","Product updated Successfully");
            redirect(base_url()."productGallery"); 
            
        
        }
    }
}
?>