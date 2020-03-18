<style>
     .col-sm-5{ 

         background-color:rgb(246,246,246);
         border-radius: 7px/7px;
     }
     h2{
        color:rgb(55,55,55);
        text-align: center;
     }
     .test{
              text-align: center;
       }
           @keyframes rotateAnim {
        from {transform: rotateY(0);}
        to {transform: rotateY(360deg);}
       }
    .image {
         animation: rotateAnim 40s linear infinite;
    }

</style>

<section id="slider"><!--slider-->
    <div class="container">
      <a href="#" class="btn btn-primary test">Retour de liste produit</a>
      <div class="row">
         <div class="col-sm-6">          
           <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center ">  
                  <img class="image" src="<?php echo base_url() ?>images/<?=$data_vue['donne']->img_produit;?>" width="300px" height="500px" ><br><br><br>
                      <button type="submit" class="btn btn-default my-cart-btn" 
                     data-id="<?=$data_vue['donne']->idp ;?>" 
                     data-name="<?=$data_vue['donne']->code_produit ;?>" 
                     data-price="<?=$data_vue['donne']->prix_produit ;?>" 
                     data-quantity="1"
                     data-image="<?php echo base_url() ?>images/<?php 
                     echo $data_vue['donne']->img_produit;?>">
                             Ajouter 
                      </button>
                      <!--a href="<?php echo site_url("C_message/index") ?>" class="btn btn-default add-to-cart">
                        <i class="fa fa-message"></i>Poste de message</a-->
                    </div>
                    </div>
                </div>     
            </div>
                
             <!--  <div class="col-sm-5">
                  <h2><?=$data_vue['donne']->Commentaire ?></h2>
                  <hr>
                  <h3>Details du produit</h3>
                  <h1><?=$data_vue['donne']->libelle_produit ?></h1>
              </div>     -->
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
      $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="" data-image="<?php echo base_url() ?>images/<?=$data_vue['donne']->img_produit;?>">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
    });
  });

  </script>
