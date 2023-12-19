

<?php
require("connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <body>
        <div class="container bg-light">

            <div class="container-foulid border-bottom border-success "> <!--topbar-->

                <?php require("topbar.php") ?>


            </div><!--end-- topbar-->
            <div class="container-foulid">
                <div class="row">
                    <div class="col-sm-3 bg-light p-0 m-0 border-end border-success">

                        <?php require("slidebar.php") ?>
                    </div><!--end of left -->
                    <div class="col-sm-9">
                        <div class="container p-4 m-4">
                            <?php
                            if (isset($_POST['submit'])) {
                                $username      = $_POST['User_Frist_Name'];
                                $userlname   = $_POST['User_Last_Name'];
                                $userEmail      = $_POST['User_Email'];
                                $userpassword = $_POST['User_Password'];

                                $SQL = "INSERT INTO user(User_Frist_Name,User_Last_Name,User_Email,User_Password) VALUES('$username','$userlname','$userEmail','$userpassword')";

                                if ($conn->query($SQL) === TRUE) {
                                    echo " Insert Data";
                                } else {
                                    echo "Not Insert Data";
                                }
                            }
                            ?>
                            <div class="card shadow-lg" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="card-text">
                                        <h3 class="text-center text-success">User </h3>
                                        <form class="text-success" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                           First Name :<br>
                                            <input class="mt-2" type="text" name="User_Frist_Name" id="" required><br><br>
                                           Last Name :<br>
                                            <input type="text" name="User_Last_Name" required><br><br>
                                            
                                            User Email :<br>
                                            <input  class="mt-2" type="email" name="User_Email" id=""><br><br>
                                            User Password :<br>
                                            <input  class="mt-2" type="password" name="User_Password" id=""><br><br>
                                            <input class="btn btn-success ms-5" type="submit" value="submit" name="submit">
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div><!--end of container -->
                    </div><!--end of right -->
                </div><!--end of row -->
            </div>
            <div class="container-foulid border-top 
           border-success mt-2">
                <?php require('footer.php') ?>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>