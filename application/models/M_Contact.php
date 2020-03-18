<?php 

     class M_Contact extends CI_model
     {
     	public $idc;
     	public $nom;
     	public $suject;
     	public $message;
        public function saves()
        {
           $this->db->insert('Contact',$this);
            if ($this->db->affected_rows()==TRUE) 
						return TRUE;
					 else
						return FALSE;
        }
     }

 ?>
