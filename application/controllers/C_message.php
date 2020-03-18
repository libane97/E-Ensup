<?php 

  class C_message extends CI_Controller
  {
     function __construct()
     {
       parent::__construct();
       $this->load->model('M_Contact','con');
     }
      public function index()
     {
     	$data_vue['titre'] = 'Laisse-Nous un message';
        $data['vuecharge'] = 'Contact';
        $data['data_vue'] = $data_vue;
       $this->load->view('template',$data);
     }

     public function contacts()
     {
        $this->con->nom = $this->input->post('nom');
        $this->con->email = $this->input->post('email');
        $this->con->suject = $this->input->post('suject');
        $this->con->message = $this->input->post('message');

         $rethiss=$this->con->saves();
                    if ($rethiss==true) {
                          redirect(site_url('C_produit/index'));
                    }
     }
  }

 ?>