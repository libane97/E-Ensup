<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
  class C_Inscriptions extends CI_Controller
  {
   
     function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url','file'));
            $this->load->model('M_Inscription');
            $this->load->library('mailer');
     }


     public function inscrit()
     {
     	$data_vue['titre'] = 'Inscriptions gratuit';
        $data['vuecharge'] = 'V_Inscriptions';
        $data['data_vue'] = $data_vue;
       $this->load->view('template',$data);
     }


      public function ajout() 
      {

        $this->M_Inscription->NomC=htmlspecialchars($this->input->post('NomC'));
        $this->M_Inscription->Email=htmlspecialchars($this->input->post('Email'));
        $this->M_Inscription->Telephone=htmlspecialchars($this->input->post('Telephone'));
        $this->M_Inscription->password=htmlspecialchars($this->input->post('password'));
        $reponse=$this->M_Inscription->addmy();
            if ($reponse==true) {
               redirect(site_url('C_acceuille/acceuille'));
            }
      /*  foreach ($list as $NomC => $Email){  
        $this->email->clear();
        $this->email->to($Email);
        $this->email->from('libanehassan23@gmail.com','E-SENPUB');
        $this->email->subject('Service de publication de E-SENPUB'.$NomC);
        $this->email->message('Bonjour Mr'.$NomC.'les information sont utils pour vous parce que notre boutique en ligne donne des promotion');
        $this->email->send();
        }*/
        /*$email='htmlspecialchars($this->input->post("Email"));';*/

// Use user or any information to load in email template
      /*$templateData=['name' => 'NomC']; 
      $this->mailer->to($email)->subject("Enter your email subject")
                  ->send("your_email_template.php", compact('templateData'));*/
                  
      }
      
       

  }


 ?>