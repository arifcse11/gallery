<?php include 'include/header.php'?>

<?php

if (!$session->is_signed_in()){

    redirect("login.php");

}
?>

<?php

  $photos = Photo::find_all();

?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Top Menu Items -->


        <?php include 'include/top_nav.php'?>



        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->



        <?php include 'include/side_nav.php'?>


        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">



        <!-- Page Heading -->


        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Photos
                        <small>Subheading</small>
                    </h1>

                    <div class="col-md-12">

                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Photo</th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Filename</th>
                                <th>Size</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  
                                  <?php foreach ($photos as $photo) : ?>
                                  
                                <td><img height="150" width="150" src="<?php echo $photo->picture_path() ?>" class="img-responsive" alt="">


                                    <div class="pictures_link">

                                        <a href="delete_photo.php?id=<?php echo $photo->id ;?>">Delete</a>
                                        <a href="#">Edit</a>
                                        <a href="#">View</a>


                                    </div>



                                </td>
                                <td><?php echo $photo->id ;?></td>
                                <td><?php echo $photo->title ;?></td>
                                <td><?php echo $photo->description ;?></td>
                                <td><?php echo $photo->filename ;?></td>
                                <td><?php echo $photo->size ;?></td>
                              </tr>

                               <?php endforeach; ?>

                            </tbody>
                          </table>

                    </div>


                </div>
            </div>
            <!-- /.row -->

        </div>


        <!-- /.row -->


        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


    <!-- /#wrapper -->

    <!-- jQuery -->
<?php include 'include/footer.php'?>
<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 8/25/2016
 * Time: 12:06 PM
 */