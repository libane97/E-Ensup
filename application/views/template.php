<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-SENPUB</title>
    <link href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>css/animate.css" rel="stylesheet">
  	<link href="<?php echo base_url('assets/'); ?>css/main.css" rel="stylesheet">
	  <link href="<?php echo base_url('assets/'); ?>css/responsive.css" rel="stylesheet">
	  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="<?php echo base_url('assets/'); ?>js/jquery.js"></script>
     <script src="<?php echo base_url('assets/'); ?>js/jquery-2.2.3.min.js"></script>
  
    <style>
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  .my-cart-icon-affix {
    position: fixed;
    z-index: 999;
  }
  </style>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>images/home/gallery1.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/'); ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/'); ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/'); ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/'); ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
  
   <?php  $this->load->view('layoute/head.php') ?>


    <?php
     if (empty($data_vue)==true) 
     $this->load->view ($vuecharge); 
     else
    $this->load->view($vuecharge,$data_vue); 
  ?>
      <?php 
             
              if (empty($_GET['key'])==false && empty($_GET['key'])==1) {
                  echo "connexion non reussie";
              }
 
         ?>
	  <?php  $this->load->view('layoute/footer.php') ?>
	  
  <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/price-range.js"></script>
  <script src="<?php echo base_url('assets/'); ?>js/jquery.prettyPhoto.js"></script>
  <script src="<?php  echo base_url('assets/'); ?>js/jquery.mycart.js"></script>
  <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>  
  
   
</body>
</html>