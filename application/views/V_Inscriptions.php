<section id="form"><!--form-->
		<div class="container" style="margin-left:300px">
			<div class="row">
				 <center>
				 	  <div class="col-sm-8">
					<div class="signup-form"><!--sign up form-->
						<h2><?php echo $titre; ?></h2>
						<form  action="<?php echo site_url('C_inscriptions/ajout') ; ?>" method="POST"
								enctype="multipart/form-data" accept-charset="utf-8"
							>
							<label for="">Nom & prenom</label>
							<input type="text" placeholder="Nom & prenom" required="required" name="NomC" />
							<label for="">Adresse Email</label>
							<input type="email" placeholder="Email Address" name="Email" required="required" />
							<label for="">Telephone</label>
							<input type="tel" placeholder="Telephone" required="required" name="Telephone" />
							<label for="">Mot de passe</label>
							<input type="password" placeholder="Password" required="required" name="password">
							<label for="">Photo</label>
						<!-- 	<input type="file" required="required" name="img_user"> -->
							<button type="submit" class="btn btn-default">Enregistre</button>
						</form>
					</div><!--/sign up form-->
				</div>
				 </center>
			</div>
		</div>
	</section><!--/form-->