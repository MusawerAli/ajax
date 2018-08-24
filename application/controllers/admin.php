<?php
class Admin extends CI_Controller{


    function dashboard(){
       
        $this->load->view('dashboard');
        
    }
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('user_id')){
            redirect('login');
        }
    }
    
}?>
