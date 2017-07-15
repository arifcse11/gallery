<?php include 'include/header.php';?>

<?php include 'include/photo_library_modal.php'; ?>

<?php

if (!$session->is_signed_in()){

    redirect("login.php");

}
?>


<?php


   if (empty($_GET['id'])) {
       
       redirect('users.php');
   }

    $user = User::find_by_id($_GET['id']);

     if (isset($_POST['update'])){

      if ($user) {
          
           $user->username = $_POST['username'];

           $user->first_name = $_POST['first_name'];

           $user->last_name = $_POST['last_name'];

           $user->password = $_POST['password']; 

           if (empty($_FILES['user_image'])) {

            $user->save();
           } else{

            $user->set_file($_FILES['user_image']);

            $user->save_user_image();

            $user->save();
           }


           
      }


     }




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
                        Add New User
                    </h1>

                    <div class="col-md-6 user_image_box">
                       <a href="#" data-toggle="modal" data-target="#photo-library"> <img src="<?php echo $user->image_path_and_placeholder(); ?>" alt="" class="img-responsive"> </a>
                    </div>

                    <form action="" method="post" enctype="multipart/form-data">

                    <div class="col-md-8">


                  <!--   <div class="form-group">

                            <input type="file" name="user_image">

                        </div> -->


                        <div class="form-group">
                        <label for="Username">Username</label>

                            <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>">

                        </div>

                        <div class="form-group">

                            <label for="FirstName">First Name</label>

                            <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name; ?>">
                            
                        </div>

                        <div class="form-group">

                            <label for="LastName">Last Name</label>

                            <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name; ?>">

                        </div>


                        <div class="form-group">

                            <label for="Password">Password</label>

                            <input type="password" name="password" class="form-control" value="<?php echo $user->password; ?>">

                        </div>


                         <div class="form-group">

                         <a id="user-id" class="btn btn-danger" href="delete_user.php?id=<?php echo $user->id; ?>">Delete</a>

                            <input type="submit" name="update" class="btn btn-primary pull-right" value="Update">

                        </div>



                    </div>


                    </form>

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
<?php include 'include/footer.php';?>
