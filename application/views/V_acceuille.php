<style type="text/css">
	  .product-image-wrapper:hover{
	  	      border:1px silver solid;
	  	      box-shadow: 1px 2px 1px 1px silver;
	  }
	  .namelogin{ 
             margin-bottom:5px;
	     }

</style>
<div class="container" style="margin-bottom:50px;">
	  <div class="row">	 
	  	  <div class="col-sm-6">

	  	  		<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li>
								   <a href="<?php echo site_url("C_produit/index") ?>"  class="active">Home</a>
								</li>
								<li><a href="<?php echo site_url("C_message/index") ?>">Contact</a></li>
							</ul>
						</div>
	  	  </div>
	 	 	<div class="col-sm-6">

					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">	
						   <li><a href="#" class="namelogin"><?php 
                              $name = $this->session->name;
                              echo  $name = $this->session->userdata('NomC');
                            
                              /* var_dump($_SESSION);
                               /*die();*/
						   ?></a></li>	   
						  <li><a href="<?php echo site_url("C_login/deconnexion") ?>"><i class="fa fa-lock"></i>Deconnexion</a></li>
						</ul>
					</div>
	       </div>
	   </div>
</div>
<br><br><br><br>

	<section>
		<div class="container">
			<div class="row">
			<!-- <div class="col-sm-3"></div> -->	
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
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div>
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
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											
										</ul>
									</div>
								</div>
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
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
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
											<a href="<?php  echo site_url("C_detailpro/affichepro?idp=$row->idp")?>" class="btn btn-default add-to-cart">
												<i class="fa fa-eye"></i>Voir</a>
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

												<a href="<?php  echo site_url("C_detailpro/affichepro?Commentaire=$row->Commentaire&prix=$row->prix_produit&idp=$row->idp&code_produit=$row->code_produit")?>" class="btn btn-default add-to-cart">
													<i class="fa fa-eye"></i>Voir</a>
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
	
	<script type="text/javascript">
		     $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      numberOfDecimals: 2,
     
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
        });
        alert(checkoutString)
        console.log("checking out", products, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 1;
      }
    });

    $("#addNewProduct").click(function(event) {
      var currentElementNo = $(".row").children().length + 1;
      $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
    });
  });

	</script>