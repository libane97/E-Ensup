<div class="row"> 

 <div class="col-sm-2"></div>

	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center"><?php echo $titre ?></h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form  action="<?php echo site_url('C_message/contacts'); ?>" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="nom" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="suject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				           	
				           	  <div class="form-group col-md-6">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>

				        </form>
	    			</div>
	    		</div>
	    		
    			</div>    			
	    	</div>