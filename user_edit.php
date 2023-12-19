<?php require('connection.php') ?>

<?php
if (isset($_GET['userid'])) {
    $getId = $_GET['userid'];

    $SQL = "SELECT * FROM user
   WHERE User_id=$getId";
    $resuil =  $conn->query($SQL);
    $data = $resuil->fetch_assoc();

    $ID = $data['User_id'];
    $name = $data['User_Frist_Name'];
    $userLname = $data['User_Last_Name'];
    $User_Email = $data['User_Email'];
    $User_Password = $data['User_Password'];
}
if (isset($_POST['Update'])) {
    $names = $_POST['User_first_Name'];
    $user_id = $_POST['user_id'];
    $User_last_Name = $_POST['User_last_Name'];
    $User_Email = $_POST['User_Email'];
    $User_Password = $_POST['User_Password'];
    if (!empty($names) || !empty($user_id) || !empty($User_last_Name) || !empty($User_Email) || !empty($User_Password)) {
        $SQL =  "UPDATE user
        SET User_Frist_Name=' $names',User_Last_Name='$User_last_Name',User_Email='$User_Email',User_Password=' $User_Password'
        WHERE User_id= $user_id";
        if ($conn->query($SQL) === TRUE) {
            echo "Update successful";
        } else {
            echo "Update not successful";
        }
    } else {
        echo "Required Not FUll";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

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
                        <div class="card shadow-lg" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-text ">
                                    <h3 class="text-center text-success">Edit user</h3>
                                    <form class="text-success" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                        User_first_Name: <br>
                                        <input class="mt-2" type="text" name="User_first_Name" value="<?php echo $name ?>"><br><br>
                                        User_last_Name: <br>
                                        <input class="mt-2" type="text" name="User_last_Name" value="<?php echo $userLname ?>" <br><br>
                                        User_Email: <br>
                                        <input class="mt-2" type="text" name="User_Email" value="<?php echo $User_Email ?>"><br><br>
                                        User_Password: <br>
                                        <input class="mt-2" type="text" name="User_Password" value="<?php echo  $User_Password ?>"><br><br>
                                        <input class="mt-2" type="text" name="user_id" value="<?php echo  $ID ?>" hidden>
                                        <input class="btn btn-success ms-5" type="submit" value="Update" name="Update">
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>