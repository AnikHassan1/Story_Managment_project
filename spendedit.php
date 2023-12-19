<!--  -->
<?php require('connection.php') ?>
<?php
if (isset($_GET['spend_productid'])) {
    $getId = $_GET['spend_productid'];

    $SQL = "SELECT * FROM spend_product
   WHERE Spend_product_id=$getId";
    $resuil =  $conn->query($SQL);
    $data = $resuil->fetch_assoc();

    $Spend_product_id = $data['Spend_product_id'];
    $Spend_product_name = $data['Spend_product_name'];
    $Spend_product_quantity = $data['Spend_product_quantity'];
    $Spend_product_date = $data['Spend_product_date'];
}
if (isset($_POST['Update'])) {
    $Product_category = $_POST['$Spend_product_name'];
    $quantity = $_POST['Spend_product_quantity'];
    $storyproduct = $_POST['Spend_product_date'];
    $id = $_POST['Spend_product_id'];

    $SQL = "UPDATE spend_product SET
  Spend_product_name='  $Product_category',Spend_product_quantity=' $quantity',Spend_product_date='$storyproduct'
   WHERE Spend_product_id=$id";
    if ($conn->query($SQL) === TRUE) {
        echo "Update successful";
        header("location:storyedit.php");
    } else {
        echo "Update not successful";
    }
}

?>
<?php
$sql = "SELECT * FROM catagory";
$result = $conn->query($sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit spend Product</title>
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

                        <?php
                        if (isset($_GET['id'])) {
                            $getid = $_GET['id'];
                            $sql = "SELECT * FROM catagory
                             WHERE Catagory_id=$getid";
                            $query = $conn->query($sql);
                            $data = $query->fetch_assoc();

                            $did =  $data['Catagory_id'];
                            $dname = $data['Catagory_name'];
                            $dentry = $data['Catagory_entyDate'];
                        }

                        if (isset($_POST['Update'])) {
                            $sname = $_POST['Catagory_name'];
                            $sdate = $_POST['Catagory_entyDate'];
                            $sid = $_POST['Catagory_id'];

                            $sql =  "UPDATE catagory
                                SET Catagory_name='$sname',Catagory_entyDate='$sdate'
                                WHERE Catagory_id= $sid";
                            if ($conn->query($sql) === TRUE) {
                                echo "Update Successful";
                            } else {
                                echo " Not Update Successful";
                            };
                        }
                        ?>
                        <div class="card shadow-lg" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-text ">
                                    <h3 class="text-center text-success">Edit Category</h3>
                                    <form class="text-success" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                                        Product Category: <br>
                                        <select name="$Spend_product_name">
                                            <?php
                                            while ($data = $result->fetch_assoc()) {
                                                $category_id = $data['Catagory_id'];
                                                $category_name = $data['Catagory_name'];
                                                echo "<option value='$category_id'>$category_name</option>";
                                            }
                                            ?>

                                        </select><br><br>

                                        Product quantity: <br>
                                        <input class="mt-2" type="text" name="Spend_product_quantity" value="<?php echo  $Spend_product_quantity; ?>"><br><br>
                                        Product Entry Date: <br>
                                        <input class="mt-2" type="date" name="Spend_product_date" value="<?php echo $Spend_product_date; ?>"><br><br>
                                        <input class="mt-2" type="text" name="Spend_product_id" value="<?php echo   $Spend_product_id; ?>" hidden>
                                        <input class="btn btn-success ms-5" type="submit" value="Update" name="Update">
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