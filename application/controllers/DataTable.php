<?php
class DataTable extends CI_Controller
{
    public function index()
    {

        if ($this->input->is_ajax_request()) {
            $start = $this->input->get('start');
            $legnth = $this->input->get('length');
            $coulmn = $this->input->get('order')[0]['column'];
            $ascc = $this->input->get('order')[0]['dir'];;
            $search =  $this->input->get('search')['value'];
            $users = $this->db->select('users.*')->from('users');

            if (!empty($search)) {
                $where = "( name LIKE '%" . $search . "%' or email  LIKE '%" . $search . "%')";
                $users->where($where);
                //$usersCount->where($where);
            }
            //$selected_count = $users->get('users')->num_rows();

            if ($coulmn == 1) {
                $users->order_by('user_id', $ascc);
            } elseif ($coulmn == 2) {
                $users->order_by('name', $ascc);
            } elseif ($coulmn == 3) {
                $users->order_by('email', $ascc);
            }

            $list = $users->limit($legnth, $start)->get()->result();

            $count = $this->db->query('select * from users')->num_rows();
            $usersCount = $this->db->select('users.*')->from('users');



            if (!empty($search)) {
                $where = "( name LIKE '%" . $search . "%' or email  LIKE '%" . $search . "%')";

                $usersCount->where($where);
            }

            $selected_count = $usersCount->get()->num_rows();
            if (count($list) > 0) {
                // assigned.edit
                foreach ($list as $key => $value) {
                    $nestedData[0] = $start + $key + 1;
                    $nestedData[1] = $value->name;
                    $nestedData[2] = $value->email;

                    $data[] = $nestedData;
                }

                $json_data = array(
                    "recordsTotal"    => $count,
                    "recordsFiltered" => $selected_count,
                    "data"            => $data
                );
                // dd( $json_data);


            } else {
                $json_data = array(
                    "recordsTotal"    => 0,
                    "recordsFiltered" => 0,
                    "data"            => []
                );
            }
            echo json_encode($json_data);
            exit;
        }

        $this->load->view("Datatable");
    }
}
?>
