<?php 

   class C_acceuille extends CI_Controller
   {
     function __construct()
     {
       parent::__construct();
       if (!$this->session->userdata('M_login')) {
              redirect('C_login/authen');
       }
       $this->load->model('M_ajout');
       $this->load->model('M_login');
       $this->load->library('cart');
     }
      public function acceuille()
    {
        $resulte = $this->M_login->validate();
        $data_vue['donnees'] =$resulte;
        $resul = $this->M_ajout->affiche();
        $data_vue['donne'] = $resul;
        $data['vuecharge'] = 'V_acceuille';
        $data['data_vue'] = $data_vue;
       $this->load->view('template',$data);
    }

   }


 ?>