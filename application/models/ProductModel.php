<?php
    class ProductModel extends CI_Model {

        
            
        public function addProduct($data)
        {
            if($this->db->insert('products',$data)){
                return true;
            }
            else{
                return false;
            }
        }
        public function delProduct( $id)
     
        {    //dd($id);
            $d=  $this->db->where('product_id', $id);
           
            $res =  $this->db->delete('products');
            //dd($res);
            return $res;
             
        }
       

        public function fetch_product_id($name)
        {
            $id = $this->db->query("select product_id from products where product_name = '$name';");
        return $id->result_array()[0]['product_id'] ;
        }

        public function get_total_products($user_id){
            $count = $this->db->query("select count(product_name) from products where user_id = '$user_id';")->result_array();
            return $count[0]['count(product_name)'];
        }

        public function get_products($user_id,$first,$last){
            $products = $this->db->query("select * from products where user_id = '$user_id' limit $first , $last;")->result_array();
            if(!empty($products)){
                return $products;
            }
        }
        public function pro_type($data)
        {
            $this->db->insert('type',$data);
          
            return true;
               
        }public function pro_subtype($sdata)
        {    
          //if ( $sdata != null)
         // $this->set($sdata);
          //   dd($sdata);
            // $this->db->query("select pro_subtype from subtype where id = '$id'")->result();
      $this->db->where('ty_id',$sdata);
      $query = $this->db->get('subtype');
return $query->result();
          
        
               
        }
    //     public function fetch_id($data)
    // {
    //     $id = $this->db->query("select id from type where id= '$id';");
    //     return $id->result()[0]['id'] ;
    // }


     //  get data from type data 
    public function pdata(){
        $dtaa = $this->db->get('type')->result();
        return $dtaa;
    }   


    // get data from subtype data
    public function psdata(){
        $data= $this->db->get('subtype')->result();
       
        return $data;

        }

        public function deletedata($Id)
        {
            $this->db->where('Id', $Id);
            $res =  $this->db->delete('type');
          
            return $res;
        }
        public function deletesdata($sub_id)
        {
            $this->db->where('sub_id', $sub_id);
            $res =  $this->db->delete('subtype');
          //  redirect(base_url('addstype'));
           dd("  Product Subtype Deleted Successfully");  

            return $res;
            redirect(base_url('addstype'));
        }
    
public function addsub($data){
    
    return $res=$this->db->insert('subtype',$data); 
    return $res;
}
public function total()
{
    $total['products'] = $this->db->get('products')->num_rows();
    $total['type'] = $this->db->get('type')->num_rows();
    $total['subtype'] = $this->db->get('subtype')->num_rows();
    $total['users'] = $this->db->get('users')->num_rows();
    return $total;
}
public function showprod()
{
    $this->db->select("products.'product_id'", "products.'product_name'", "products.'product_cost'","products.'product_desc';");
    $this->db->from("products");

    
}
public function updateProduct( $id,$data)

{    //dd($id);
    // $id = $this->input->get('product_id');
     $this->db->where('product_id', $id);
   
    $res =  $this->db->update('products',$data);
    //dd($res);
    return $res;
     
}
public function showprodid($id)
{ 
    // dd($id);
    $this->db->where('product_id',$id);
   
    $this->db->select("products.product_id ,products.product_name, products.product_cost , products.product_desc");
    $this->db->from("products");
    $data = $this->db->get()->row();
  //dd($data);
    return $data;
}

}
?>

  