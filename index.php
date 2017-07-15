<?php include 'includes/navigation.php';?>

<?php 


$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

$items_per_page = 4;

$items_total_count = Photo::count_all();

$paginate = new Paginate($page, $items_per_page, $items_total_count);

$sql = "SELECT * FROM photos ";
$sql .= "LIMIT {$items_per_page} ";
$sql .= "OFFSET {$paginate->offset()}";

$photos = Photo::find_this_query($sql);

?>


    <!-- Navigation -->

    

    <!-- Page Content -->



        <div class="row">
            <div class="col-md-12">

            <div class="thumbnails row">

            <?php foreach ($photos as $photo): ?>

                
                    <div class="col-xs-6 col-md-3">

                    <a class="thumbnail" href="photo.php?id=<?php echo $photo->id; ?>">

                    <img class="home_page_photo img-responsive" src="admin/<?php echo $photo->picture_path(); ?>" alt="">

                    </a>
                        
                    </div>
                
                

                <?php endforeach; ?>

                </div>

                <nav class="text-center" aria-label="Page navigation">
  <ul class="pagination">
    <?php if ($paginate->page_total() > 1) {

         if ($paginate->has_previous()) {
   echo  "<li><a href='index.php?page={$paginate->previous()}' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";

}

     for ($i=1; $i <= $paginate->page_total() ; $i++) { 
                        
                        if ($i == $paginate->current_page) {

                          echo  "<li class='active'><a href='index.php?page={$i}'>{$i}</a></li>";
                      } else{
                          echo  "<li><a href='index.php?page={$i}'>{$i}</a></li>";
                      }
                  }

      if ($paginate->has_next()) {

  echo  "<li><a href='index.php?page={$paginate->next()}' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";

}

}

?>

  </ul>
</nav>

            
                
            </div>

            <!-- Blog Sidebar Widgets Column -->

            <!-- <div class="col-md-4"> -->

             <?php  //include 'includes/sidebar.php';?>
            
                
            <!-- </div> -->
         


        </div>
        <!-- /.row -->

    <?php include 'includes/footer.php'; ?>