<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

 class C_login extends CI_Controller
 {
 	 function __construct()
 	 { 
 	 	parent::__construct();
        $this->load->model('M_login');
        $this->load->helper('cookie');
 	 	if ($this->session->userdata('C_acceuille')) {
 	 		 redirect('C_acceuille/acceuille');
 	 	}
 	 }

   public function authen()
     {
        $resulte=$this->M_login->validate();
        $data_vue['donnees'] =$resulte;
     	$data_vue['titre'] = 'Connect-Vous';
     	$data_vue['error'] = 'Login ou mot de passe incorrect';
        $data['vuecharge'] = 'V_login';
        $data['data_vue'] = $data_vue;
       $this->load->view('template',$data);
     }
     public function deconnexion()
     {
         $this->session->sess_destroy();
         redirect('C_produit/index');
     }

     public function connexion()
     {
     	 $this->load->model('M_login');
     	  $check = $this->M_login->validate();
     	   if ($check) {
                $this->session->set_userdata('M_login','id');
                  var_dump($check);
                $this->session->set_userdata('NomC',$check->NomC);
     	   	    $this->session->set_userdata('Email',$check->Email);

                $cookie = array( 
                        'NomC'   => $_SESSION['NomC'],
                        'expire' => time()+86500,
                        'domain' => base_url(),
                        'path'   => '/',
                        'prefix' => $_SESSION['Email']
                 );
                /* var_dump($cookie);
                   die();*/
                 /*get_cookie($cookie['NomC']);*/
                   /*  die();*/
                if ($check->user_admin=='0'){
                     redirect(site_url('C_acceuille/acceuille'));
                }elseif ($check->user_admin=='1') {
                      redirect(site_url('C_ajoutpro/ajoutproduit'));
                }     	    
     	   }
     	   else{
              /*  $data['erreur'] = "login ou Mot de passe est incorrect";
                $this->load->view('V_login',$data);*/
               header('location:'.site_url('C_login/authen?erreur=1')); 
     	   	 
     	   }
     }


 }


 ?>