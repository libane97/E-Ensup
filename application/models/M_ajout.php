<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class M_ajout extends CI_model
  {
  	//public $idp;
  	public $code_type_produit;
  	public $libelle_type_produit;

  /*	public $img_produit;
  	public $prix_produit;
  	public $code_type_produit;*/
   
  	 public function save()
  	 {
  	 	  $this->db->insert('type_produit',$this);
   	  	    if ($this->db->affected_rows()==TRUE) 
						return TRUE;
					 else
						return FALSE;
  	 }

     public function affiche()
     {
        return $this->db->select('*')->from('produit')->get()->result();
     }

     public function type_produit()
     {
         return $this->db->select('libelle_type_produit')->from('type_produit')->get()->result();
     }

      public function typepro()
      {
         return $this->db->select('*')->from('type_produit')->get()->result();
      }
      public function supprime()
      {
          return $this->db->delete('produit',array('idp' => $this->idp));
            if ($this->db->affected_rows()==true) {
                return true;
            }else{
              return  false;
            }
      }

     /* public function categories()
      {
         return $this->db->select('*')
          ->from('produit')
          ->where('id_type_article',$this->id_type_article)
          ->get()
          ->row();
          return $this->db->select('*')
          ->from('produit')
          ->where('')
      }*/
  }

 ?>