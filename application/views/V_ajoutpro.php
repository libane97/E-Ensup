  <section id="form" ><!--form-->
    <div class="container">
      <div class="row">
            <h2 class="title text-center">Les Produits</h2>
        <div class="col-sm-5">
          <div class="signup-form"><!--sign up form-->
            <center><h1 style="color: orange"><?php echo $titre; ?></h1></center>
            <form action="<?php echo site_url('C_ajoutpro/addmysql');?>" method="POST" 
              enctype="multipart/form-data" accept-charset="utf-8">

              <center><label for="">Code</label></center>
              <input type="text" placeholder="Entre un produit" name="code_produit" required="required"/>

             <center><label for="">Libelle produit</label></center>
              <input type="text" placeholder="Entre le libelle" name="libelle_produit" required="required" />
             <center><label for="">Image produit</label></center>
              <input type="file" placeholder="Entre le image" name="img_produit" required="required"  />
              <center><label for="">Prix_produit</label></center>
              <input type="number" placeholder="Entre le prix" required="required" name="prix_produit" />
              <textarea name="message" id="message" required="required"  rows="8" placeholder="Description"></textarea>
              <div class="form-group">

                   <center><h4>Choisir le type de produit</h4></center>  
                      <select name="code_type_produit" class="form-control"> 
                      <?php  foreach ($donnee as $row){?>   
                           <option value="<?=empty($row)?'':$row->libelle_type_produit?>">
                            <?=empty($row)?'':$row->libelle_type_produit?>    
                           </option>
                            <?php } ?>     
                                    
                      </select>
                      
                </div>

             <center><button type="submit" class="btn btn-default">Enregistre</button></center>

            </form>
  
          </div>
          </div>
           <div class="col-sm-6">
              <center style="color: orange"><h2>Les Liste de produit</h2></center>
               <table class="table table-bordered table-hover table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Image produit</th>
                          <th scope="col">Code produit</th>
                          <th scope="col">Libelle de produit</th>
                          <th scope="col">Prix produit</th>
                          <th scope="col">Descriptions</th>
                          <th scope="col">id_type_produit</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                        <?php foreach ($donne as $row) { ?>
                      <tbody>
                        <tr>
                          <td>
                            <img src="<?php echo base_url() ?>images/<?php echo $row->img_produit;?>"
                             width="50px" height="50px" ></td>   
                          <td><?= $row->code_produit ?></td>
                          <td><?= $row->libelle_produit ?></td>
                          <td><?= $row->prix_produit ?></td>
                          <td><?= $row->Commentaire ?></td>
                          <td><?= $row->id_type_produit ?></td>
                          <td style="width: 1%; white-space: nowrap;">
                       <!--      <a href="<?php echo site_url() ?>" class="btn btn-success">
                              <i class="fa fa-edit"> </i>  </a> -->
                               &nbsp;
                              <a onclick="return confirm('Voulez-vous Confirmer la Suppression ?')" 
                              href="<?php echo site_url("C_ajoutpro/supprime?idp=$row->idp") ?>" class="btn btn-danger"><i class="fa fa-trash"> </i>  </a>


                          </td>
                        </tr>
                     </tbody>
                     <?php } ?>

                      <tfoot>
                <tr>
                          <th scope="col">Image produit</th>
                          <th scope="col">Code produit</th>
                          <th scope="col">Libelle de produit</th>
                          <th scope="col">Prix produit</th>
                          <th scope="col">Type de produit</th>
                          <th scope="col">Descriptions</th>
                          <th scope="col">Actions</th>

                </tr>
                </tfoot>
            </table>
         </div>
         
        </div>
        <br><br><br><br><br><br>

        <h2 class="title text-center">Les type de produit</h2>
   
      </div><br>
      <div class="container">
           <div class="row">
                <div class="col-sm-6"> 
          <div class="signup-form">
              <center><h1 style="color: orange">Ajouter le type de produit</h1></center>
             <form action="<?php echo site_url('C_ajoutpro/addtype');?>" method="POST">
                     <center><label for="">Code type produit</label></center>
              <input type="text" placeholder="Entre un produit" name="code_type_produit" required="required"/>

             <center><label for="">Libelle type produit</label></center>
              <input type="text" placeholder="Entre le libelle" name="libelle_type_produit" required="required" />
                    <center><button type="submit" class="btn btn-default">Enregistre</button></center>
             </form>
           </div>
         </div>
           <div class="col-sm-6">
              <center style="color: orange"><h2>Les Liste type de produit</h2></center>
               <table class="table table-bordered table-responsive table-hover table-striped">
                      <thead>
                        <tr> 
                          <th scope="col">Code produit</th>
                          <th scope="col">Libelle de produit</th> 
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                        <?php foreach ($donnees as $row) { ?>
                      <tbody>
                        <tr>
                          <td><?= $row->code_type_produit ?></td>
                          <td><?= $row->libelle_type_produit ?></td>
                           <td style="width: 1%; white-space: nowrap;">
                            <a href="<?php echo site_url() ?>" class="btn btn-success">
                              <i class="fa fa-edit"> </i>  </a>
                               &nbsp;
                              <a onclick="return confirm('Voulez-vous Confirmer la Suppression ?')" 
                              href="<?php echo site_url() ?>" class="btn btn-danger"><i class="fa fa-trash"> </i>  </a>


                          </td> 
                        </tr>
                     </tbody>
                     <?php } ?>

                      <tfoot>
                <tr>
                          <th scope="col">Code produit</th>
                          <th scope="col">Libelle de produit</th>
                          <th scope="col">Actions</th>

                       
                </tr>
                </tfoot>
            </table>
         </div>
           </div>
            
      </div>
    </div>
    </div>

  </section><!--/form-->