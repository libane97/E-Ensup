<?php 

   
   class C_detailpro extends CI_Controller
   {
   	 function __construct()
   	 {
   	 	parent::__construct();
   	 	$this->load->model('M_detailpro','detail');
   	 }
   	
   	 public function affichepro()
   	 {
   	 	 $this->detail->idp=$_GET['idp']; 
   	 	 $resul=$this->detail->affichedetail();
            /*var_dump($resul);
               die();*/
   	 	 $data_vue['donne'] = $resul;
   	 	 $data_vue['titre'] = 'Bienvenue chez de votre panier';
   	 	 $data['vuecharge'] = 'V_affichepro';
   	 	 $data['data_vue'] = $data_vue;
   	 	 $this->load->view('template',$data);
   	 }

   }

 ?>