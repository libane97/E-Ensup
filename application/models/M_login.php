<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class M_login extends CI_model
   {
       public function validate()
       {
        $arr['Email']=$this->input->post('Email');
       	//$_SESSION['NomC']=$this->input->post('Email');
     	  $arr['password']=$this->input->post('password');
     	  return $this->db->get_where('utilisateur',$arr)->row();
       }

       public function user()
       {
       	   return $this->db->select('NomC')->from('utilisateur')->get()->row();
       }
   }

 ?>