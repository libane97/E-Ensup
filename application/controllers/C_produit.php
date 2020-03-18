<?php 
 
 class C_produit extends CI_Controller
 {
 	function __construct()
 	{
 		parent::__construct();
       $this->load->model('M_ajout');
 	}
    public function index()
    {
        $resul = $this->M_ajout->affiche();
        $data_vue['donne'] = $resul;
    	$data['vuecharge'] = 'V_produit';
    	 $data['data_vue'] = $data_vue;
    	$this->load->view('template',$data);
    }
   
 }


 ?>