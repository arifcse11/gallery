<?php include 'include/header.php'?>

<?php

if (!$session->is_signed_in()){

    redirect("login.php");

}
?>

<?php

  $users = User::find_all();

?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Top Menu Items -->


        <?php include 'include/top_nav.php';?>



        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->



        <?php include 'include/side_nav.php';?>


        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">



        <!-- Page Heading -->


        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Users
                    </h1>

                    <a href="add_user.php" class="btn btn-primary">Add User</a>

                    <div class="col-md-12">

                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Photo</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  
                                  <?php foreach ($users as $user) : ?>
                                  <td><?php echo $user->id ;?></td>
                                  <td><?php echo $user->username ;?>
                                      <div class="pictures_link">

                                        <a href="delete_user.php?id=<?php echo $user->id ;?>">Delete</a>
                                        <a href="edit_user.php?id=<?php echo $user->id ;?>">Edit</a>
                                        <a href="#">View</a>


                                    </div>
                                  </td>
                                  <td><?php echo $user->first_name ;?></td>
                                  <td><?php echo $user->last_name ;?></td>
                                <td><img height="150" width="150" src="<?php echo $user->image_path_and_placeholder(); ?>" class="img-responsive" alt="">


                                    



                                </td>
                                
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
