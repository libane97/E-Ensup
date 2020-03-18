<?php 

 
 class M_detailpro extends CI_model
 { 	
  public function affichedetail()
  {
	  	 return $this->db->select('*')
			->from('produit')
			->where('idp',$this->idp)
			->get()
			->row();
		
  }

    

 }

?>