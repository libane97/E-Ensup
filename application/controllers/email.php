<?php 
 if(!defined('BASEPATH')) exit('No direct script access allowed');

  function __construct()
  {
  	parent::__construct();
  	$this->load->library('email');
  }

  public function Email()
  {
   	    $this->email->from('libanehassan23@gmail.com','E-SENPUB');
	    	$this->email->to('htmlspecialchars($this->input->post(Email))');
		/*$this->email->cc('another@another-example.com');
		$this->email->bcc('them@their-example.com');*/
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();
  }

 ?>