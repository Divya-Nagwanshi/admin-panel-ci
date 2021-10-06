<?php
class Dynamic_dependent_model extends CI_Model
{
 function fetch_type()
 {
  $this->db->order_by("prod_type", "ASC");
  $query = $this->db->get("type");
  return $query->result();
 }

 function fetch_subtype($ty_id)
 {
  $this->db->where('ty_id', $ty_id);
  $this->db->order_by('sub_name', 'ASC');
  $query = $this->db->get('subtype');
  $output = '<option value="">Select SubType</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->sub_id.'">'.$row->sub_name.'</option>';
  }
  return $output;
 }


}

