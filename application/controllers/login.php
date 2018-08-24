<?php

    class Login extends CI_Controller{

        function index(){
            if($this->session->userdata('user_id')){
                return redirect('admin/dashboard');
            }
            $this->load->helper('url');
            $this->load->helper('html');
            $this->load->helper('form');
           $this->load->view('login/login');

        }

        function admin_login(){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','UserName or Email:','required|');
            $this->form_validation->set_rules('password','Password','required|min_length[6]');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

            if($this->form_validation->run()==TRUE){
                
                $email=     $this->input->post('email');
                $password=  $this->input->post('password');
                
                $this->load->model('login/loginmodel');
                $login_id= $this->loginmodel->validate_login($email,$password);

                if($login_id){
                   $this->session->set_userdata('user_id',$login_id);
                   //$session_id=$this->session->userdata($login_id->id);
                   
                   return redirect('admin/dashboard',$login_id);
                }else{
                    $this->session->set_flashdata('login_failed','Email or Password not matched');
                    return redirect('login');
                }

            }else{
                $this->load->view('login/login.php');
            }

            


        }

        function logout(){
            $this->session->unset_userdata('user_id');
            return redirect('login');
        }

        
    }