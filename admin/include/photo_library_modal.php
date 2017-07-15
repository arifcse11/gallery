<?php require_once 'init.php'; ?>

<?php 

    $photos = Photo::find_all();

 ?>


<div class="modal fade" id="photo-library" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Photo Library</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-9">

           <div class="thumbnails row">


           <?php foreach ($photos as $photo): ?>
             

              <div class="col-xs-2">

                 <a role="checkbox" aria-checked="false" tabindex="0" id="" href="#" class="thumbnail">
                   <img class="modal-thumbnails img-responsive" src="<?php echo $photo->picture_path(); ?>"  data="" alt="">
                 </a>
                
              </div>


            <?php endforeach; ?>
             
           </div>
          
        </div>
      </div>
      <div class="modal-footer">
        
        <button id="set_user_image" type="button" disabled="true" class="btn btn-primary">Apply Selection</button>
      </div>
    </div>
  </div>
</div>