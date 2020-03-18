<section id="form"><!--form-->
		<div class="container" style="margin-left:300px;">
			<div class="row">
				 <center>
				 	  <div class="col-sm-6">
					<div class="signup-form"><!--sign up form-->
						<h3>
							<!--  <?php
							  
							    /* echo " <div class='btn btn-danger'>
      												$erreur								
                                            </div>";*/
							 	 
							 ?> -->
										  <?php 
							          if (empty($_GET['erreur'])==false):
							          ?>
							          <div class="col-xs-12 text-danger text-center">
							             Login ou mot de passe incorrect !!!
							             <br><br>
							          </div>
							          <?php 
							           endif;
			          					?>
						</h3>
						<h2><?php echo $titre; ?></h2>
						<form action="<?php echo site_url('C_login/connexion') ; ?>" method="POST">
					        <label for="">Adresse Email</label>
							<input type="email" placeholder="Email Address" name="Email" required="required" />
							<label for="">Mot de passe</label>
							<input type="password" placeholder="Password" required="required" name="password">
							<button type="submit" class="btn btn-default">Connexion</button>
						</form>
					</div><!--/sign up form-->
					<a class="btn" href="<?php echo  site_url('C_Inscriptions/inscrit') ?>">Inscriptions</a>
				</div>
				 </center>

			</div>
		</div>
	</section><!--/form-->