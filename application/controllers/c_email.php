<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
  class c_email extends CI_Controller
  {
   
     function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url','file'));
            $this->load->model('M_Inscription');
            $this->load->library('mailer');
     }

     public function envoimail()
     {
        $this->load->view('email');
     }


       

  }


 ?>