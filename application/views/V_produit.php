
<div class="container" style="margin-bottom:50px;">
	  <div class="row">
	  	  <div class="col-sm-6">
	  	  		<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo site_url("C_produit/index") ?>"  class="active">Home</a></li>
								<li><a href="<?php echo site_url("C_message/index") ?>">Contact</a></li>
							</ul>
						</div>
	  	  </div>
	 	 	<div class="col-sm-6">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
						  <li><a href="<?php echo site_url('C_Inscriptions/inscrit') ?>"><i class="fa fa-user"></i>L'Inscriptions</a></li>
						  <li><a href="<?php echo site_url('C_login/authen') ?>"><i class="fa fa-lock"></i>Connexion</a></li>
						</ul>
					</div>
	   </div>
			</div>
</div>
<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SENPUB</h1>
									<h2>Bienvenu avec des bras ouvre</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src=" <?php echo base_url('assets/'); ?>images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo base_url('assets/'); ?>images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SENPUB</h1>
									<h2>Bienvenu avec des bras ouvre</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src=" <?php echo base_url('assets/'); ?>images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src=" <?php echo base_url('assets/'); ?>images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SENPUB</h1>
									<h2>Bienvenu avec des bras ouvre</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src=" <?php echo base_url('assets/'); ?>images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src=" <?php echo base_url('assets/'); ?>images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<!--div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div-->
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<!--div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div-->
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<!--div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div-->
							</div>
							
							
							
							
						</div><!--/category-products-->
				
						
					
					
					</div>
				</div>
				
				<div class="col-sm-9">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Toute les produits</h2>
						<?php foreach ($donne as $row) {?>
							 <div class="col-sm-3">
							 <!-- 	<center><?=$row->code_type_produit; ?></center><br> -->
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">				
								 <a href="<?php /*echo site_url("C_produit/modif?id=$row->")*/ ?>">
								 	<img class="imgbox"  src="<?php echo base_url() ?>images/<?php echo $row->img_produit;?>"
                                          width="300px" height="300px" ></a>
											<h3><?=$row->code_produit ;?></h3>
											<h2><?=$row->prix_produit; echo " CFA";  ?></h2>
											<a href="<?php  echo site_url('C_login/authen')?>" class="btn btn-default add-to-cart">
													<i class="fa fa-shopping-cart"></i>Voir</a>
										 <!-- <button class="btn btn-default my-cart-btn" 
										 data-id="<?=$row->idp ;?>" 
										 data-name="<?=$row->code_produit ;?>" 
										 data-price="<?=$row->prix_produit ;?>" 
										 data-quantity="1"
										 data-image="<?php echo base_url() ?>images/<?php 
										 echo $row->img_produit;?>">
										         Ajouter 
									    </button> -->
										</div>
								 	<div class="product-overlay">
											<div class="overlay-content">			
									<img src="<?php echo base_url() ?>images/<?php echo $row->img_produit;?>"
	                                          width="150px" height="300px"></a>
												<h2><?=$row->Commentaire ;?></h2>
												<h2><?=$row->prix_produit; echo " CFA";  ?></h2>
												<p><?=$row->code_produit ;?></p>

												<a href="<?php  echo site_url('C_login/authen')?>" class="btn btn-default add-to-cart">
													<i class="fa fa-shopping-cart"></i>Voir</a>
											</div>
										</div>
								</div>
								
							</div>

						</div>
						 <?php } ?>		

					</div><!--features_items-->	
					<!-- <div class="recommended_items">
					</div> -->
		    	</div>
			</div>
		</div>
	</section>