<?php include 'include/header.php'?>

   

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
                
            
            <?php include 'include/admin_content.php'?>


            <?php


                $sql = "SELECT * FROM users WHERE id = 1";

                $result = $database->query($sql);

                $user_found = mysqli_fetch_array($result);


                echo $user_found['username'];



            ?>

            
                <!-- /.row -->

         
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   
    <!-- /#wrapper -->

    <!-- jQuery -->
   <?php include 'include/footer.php'?>
