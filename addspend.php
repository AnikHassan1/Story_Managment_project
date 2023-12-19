<?php
require("connection.php");
require('function_id.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Product</title>
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
                                $sname      = $_POST['Spend_product_name'];
                                $sategory   = $_POST['Spend_product_quantity'];
                                $pEntryDate = $_POST['Spend_product_date'];

                                $SQL = "INSERT INTO spend_product(Spend_product_name,Spend_product_quantity,Spend_product_date)
                                VALUES('$sname','$sategory','$pEntryDate')";

                                if ($conn->query($SQL) === TRUE) {
                                    echo ' Insert Data';
                                } else {
                                    echo 'Not Insert Data';
                                }
                            }
                            ?>
                            <?php
                            $sql = "SELECT * FROM catagory";
                            $result = $conn->query($sql);



                            ?>
                            <div class="card shadow-lg" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="card-text">
                                        <h3 class="text-center text-success">ADD Spend Product</h3>
                                        <form class="text-success" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

                                            Product :<br>
                                            <select name='Spend_product_name'>
                                                <?php
                                                datalist('product', 'Product_id', 'Product_name')
                                                ?>

                                            </select><br><br>
                                            <!-- <input type = 'text' name = 'Product_category' id = ''><br><br> -->
                                            Product_Quantity :<br>
                                            <input class="mt-2" type='text' name='Spend_product_quantity' id=''><br><br>
                                            spend_Product_Date :<br>
                                            <input class="mt-2" type='date' name='Spend_product_date' id=''><br><br>
                                            <input class="btn btn-success ms-5" type='submit' value='submit' name='submit'>
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



<?php
require('connection.php');
require('function_id.php');
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title> Spend_product</title>
</head>

<body>



</body>

</html>