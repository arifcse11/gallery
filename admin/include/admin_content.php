<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin Dashboard
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Admin Dashboard
                </li>
            </ol>

            <?php


            /*$users = User::find_all_user();

            foreach ($users as $user){

                echo $user->first_name . "<br>";


            }*/


            $user = User::find_user_by_id(1);

            
            echo $user->id;

           /* $result = User::find_all_user();

            while ($row = mysqli_fetch_array($result)){


                echo $row['username'] . "<br>";

            }*/


           /* $result = User::find_user_by_id(1);

            $user = new User();

            $user->id = $result['id'];

            $user->username = $result['username'];

            $user->password = $result['password'];

            $user->first_name = $result['first_name'];

            $user->last_name = $result['last_name'];


            echo $user->id*/

            //echo $result['username'];


            


            ?>



        </div>
    </div>
    <!-- /.row -->

</div>