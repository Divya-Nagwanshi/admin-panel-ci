<?php 
class EmailController extends CI_Controller{
    public function index(){
        $this->load->view('SendMail');
    }
    public function sendEmail(){
        
        if(($this->input->post()) > 0)
        {   
            $to = $this->input->post('to');
            $subject = $this->input->post('subject');
            $body = $this->input->post('body');
            $this->load->library('email');
            // dd($to);
            // exit;
            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.mailtrap.io';
            $config['smtp_user'] = '11c2c08aa3cb33';
            $config['smtp_pass'] = '77d7054d76898c';
            $config['mailtype'] = 'html';
            $config['smtp_port'] = 25;
            $config['crlf'] = "\r\n";
            $config['newline'] = "\r\n";
            
            $this->email->initialize($config);
            
            $this->email->from('nagwanshidivya49@gmail.com', 'Divya Nagwanshi ');
            $this->email->to($to);
        
            $this->email->subject($subject);
           
            $this->email->attach(base_url('uploads/product1.png'));        
            
            
         
            $this->email->send();
         
           dd('mail sended successfully');
           redirect(base_url('Email'));
           
         }

            else{
                dd($this->email->print_debugger());
               }
            }
               
    
        
}
?>