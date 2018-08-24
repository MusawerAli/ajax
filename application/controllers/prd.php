<?php
    class Prd extends CI_Controller{

       
        function load_prd_view(){
            $this->load->helper('form');
            $this->load->view('add_prd');
        }
        function add_prd(){
           $post= $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="text-danger" style="font-family:Bookman Old Style">', '</div>');
            if ($this->form_validation->run('add_prd') == TRUE)
		{

           $this->load->model('prd/addprd');
            $data=$this->addprd->add_prd($post);
            if($data){
                $this->session->set_flashdata('feedback','Article Added Successfully');
                $this->session->set_flashdata('feedback_msg','alert-success');
            }
            else{
                $this->session->set_flashdata('feedback','Failed add articles,"Try again Later ***SOme System Error***"');
                $this->session->set_flashdata('feedback_msg','alert-danger');
           }
           return redirect('admin/dashboard');
         
        }else{
            $this->load->view('add_prd');

        }
     }
            function stock_list(){
                $this->load->helper('form');
                $this->load->model('prd/addprd');
               $query= $this->addprd->stock_list();
             $this->load->view('stock_list',['query'=>$query]);
                

            }

            function prd_sales(){
                $this->load->helper('form');
                $this->load->model('prd/addprd');
                $items=$this->addprd->sales();
                $prd_name = array_column($items, 'item_name');
                $prd_code = array_column($items, 'item_code') ;
                 $combine= array_merge($prd_name,$prd_code);
                            
                $this->load->view("prdsales",['combine'=>$combine]);
                

            }

            function assets(){

                $this->load->model('prd/addprd');
               $assets=$this->addprd->assets();
               
            //   foreach($assets as $query){
            //     $SUM= $SUM + $query->prd_price;
                
                
                    
            //   }
            //   $sumqty=$SUM + $query->prd_qty;
            //   echo $SUM."Product  ".$sumqty;
                
            
            
             $this->load->view('assets',['assets'=>$assets]);
                
            }

            function updatesale(){

               $upd_sales= $this->input->post();

                $this->load->model('prd/addprd');
              if($this->addprd->upd_sales($upd_sales)){
                $this->session->set_flashdata('feedback','*** Sales Added Successfully ***');
                $this->session->set_flashdata('feedback_msg','alert-success');
              }else{
                $this->session->set_flashdata('feedback','*** SOme System Error*** ! Contact To Developer :(');
                $this->session->set_flashdata('feedback_msg','alert-success');
                 
              }
               return redirect('prd/prd_sales');
               
            
            }

            function vendors(){
                
                $this->load->model('prd/addprd');
               $vendors= $this->addprd->vendors();
               $this->load->view('vendors',['vendors'=>$vendors]);

            }

            function search_prd(){
                $this->load->helper('form');
                $query=$this->input->post('query');
                $this->load->model('prd/addprd');
               $prd_search=$this->addprd->prd_search($query);
               
               $this->load->view('prd_search',['prd_search'=>$prd_search]);
            }
    }  
    
    


?>