<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class M_Inscription extends CI_model
   {
   	    public $idU;
   	    public $NomC;
   	    public $Email;
   	    public $Telephone;
   	    public $password;
   	  public function addmy()
   	  {
   	  	  $this->db->insert('utilisateur',$this);
   	  	    if ($this->db->affected_rows()==TRUE) 
						return TRUE;
					else
						return FALSE;
   	  }
   }


 ?>