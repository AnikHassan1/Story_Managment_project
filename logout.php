<?php
require("connection.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users || Log In</title>
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
                                $mail = $_POST['email'];
                                $pass = $_POST['password'];

                                $sql = "SELECT * FROM user
                                WHERE User_Email='$mail' AND User_Password='$pass' ";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    session_destroy();
                                    header('location:login.php');
                                }else {
                                    echo "not ok";
                                }
                            }

                            ?>
                            <div class="card shadow-lg" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="card-text">
                                        <h3 class="text-center text-success">log out </h3>
                                        <form class="ms-5" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="Post">
                                            Email : <br>
                                            <input type="email" name="email" required><br><br>
                                            password:<br>
                                            <input type="password" name="password" id="" required><br><br>
                                            <input class="btn btn-primary" type="submit" value="submit" name="submit">
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