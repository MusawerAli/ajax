<?php

    class Loginmodel extends CI_Model{

        function validate_login($email,$password){


          $query= $this->db
                    ->where(['email'=>$email,'password'=>$password])
                    ->get('login');
                    if($query->num_rows()){
                        
                      return $query->row();
                        
                    }else{
                       
                        return FALSE;
                        
                    }


        }

    }

?>