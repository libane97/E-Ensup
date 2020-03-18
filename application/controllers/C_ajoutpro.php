<?php 

 class C_ajoutpro extends CI_Controller
 {
       public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form', 'url','file'));
            $this->load->library('form_validation');
            $this->load->library('cart');
            $this->load->model('M_ajout');
            if (!$this->session->userdata('M_login')) {
              redirect('C_login/authen');
          }
            
        }

     public function ajoutproduit()
    {
        $resul = $this->M_ajout->affiche();
        $result = $this->M_ajout->typepro();
        $resulte = $this->M_ajout->type_produit();
        $data_vue['donne'] = $resul;
        $data_vue['donnees'] = $result;
        $data_vue['donnee'] = $resulte;
       	$data_vue['titre'] = 'Retourne liste des produit';
        $data['vuecharge'] = 'V_ajoutpro';
        $data['data_vue'] = $data_vue;
       $this->load->view('template',$data);
    }
    public function addmysql()
    {
     	       if (isset($_FILES["img_produit"]["name"])) {

               $config['upload_path']   = './images/';
               $config['allowed_types'] = 'gif|jpg|png|pdf|doc|MP4';


              $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img_produit'));
               
                else
                {
                    $data = $this->upload->data();
                      /*var_dump($data);
                       die();*/
                    /*$this->M_ajout->code_produit=$this->input->post('code_produit');
                    $this->M_ajout->code_produit=$this->input->post('code_produit');
                    $this->M_ajout->libelle_produit=$this->input->post('libelle_produit');
                    $this->M_ajout->img_produit= $data['upload_data'][ 'full_path'] ;
                      var_dump($data['upload_data'][ 'full_path']);
                         die();
                    $this->M_ajout->prix_produit=$this->input->post('prix_produit');
                    $this->M_ajout->code_type_produit=$this->input->post('code_type_produit');
                   */
                     
                        $insert_data = array(
                             'img_produit' => $data['file_name'],
                           /*  'path'   => $data['full_path'],*/
                            /* 'thumb_path'  => $data['file_path'] .'images/' . $data['file_name'],*/
                             'code_produit' => $this->input->post('code_produit'),
                             'libelle_produit' => $this->input->post('libelle_produit'),
                             'prix_produit'   =>  $this->input->post('prix_produit'),
                             'code_type_produit' =>  $this->input->post('code_type_produit'),
                             'Commentaire'  =>  $this->input->post('message')

                       );
                      
                      /* var_dump($insert_data);
                       exit();
                       */
                        
                        /* $rethis=$this->M_ajout->save();*/

                           $rethis = $this->db->insert('produit',$insert_data);
                         if ($rethis==true) {
                             redirect(site_url('C_ajoutpro/ajoutproduit'));

                              }
                        

            }
             }
    }

    public function addtype()
    {
                    $this->M_ajout->code_type_produit=$this->input->post('code_type_produit');
                    $this->M_ajout->libelle_type_produit=$this->input->post('libelle_type_produit');
                     $rethiss=$this->M_ajout->save();
                    if ($rethiss==true) {
                          redirect(site_url('C_produit/index'));
                    }
    }


      public function supprime(){ 
      $this->M_ajout->idp=$_GET['idp'];
      $reponse=$this->M_ajout->supprime();
    if ($reponse==true){
      redirect(site_url('C_ajoutpro/ajoutproduit'));
    } 
  } 

 }


 ?>