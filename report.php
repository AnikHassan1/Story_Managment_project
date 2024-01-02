<?php require('connection.php') ?>
<?php
$sel = "SELECT * FROM product";
$QUE = $conn->query($sel);
$namearrey = array();
while ($arr = $QUE->fetch_assoc()) {
    $Pid = $arr['Product_id'];
    $Pname = $arr['Product_name'];
    $namearrey[$Pid] = $Pname;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

</body>

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
                <div class="col-sm-9 pt-4 text-success">
                    <form action="report.php" method="POST">

                        Select Product :
                        <select name="Product_name" id="">
                            <?php
                            $sql = "SELECT * FROM product";
                            $datas =  $conn->query($sql);

                            while ($data = $datas->fetch_assoc()) {
                                $id = $data['Product_id'];
                                $name = $data['Product_name'];


                            ?>

                                <option value="<?php echo $id ?>"><?php echo  $name ?></option>
                            <?php } ?>
                        </select>

                        <input type="submit" value="Generate Report" name="submit" class="text-success">
                    </form>
                    <h1>Store Product</h1>
                    <?php
                    if (isset($_POST['Product_name'])) {
                        $product_name = $_POST['Product_name'];

                        $sql = "SELECT * FROM store_produt WHERE story_product_name=$product_name";
                        $query = $conn->query($sql);
                        while ($DATA = $query->fetch_assoc()) {

                            $storeName = $DATA['story_product_name'];
                            $storequan =   $DATA['Story_product_quantity'];
                            $storedate =    $DATA['story_product_date'];

                            echo "<h3>$namearrey[$storeName]</h3>";
                            echo "<table class='table table-success table-striped'>
                                    <tr>
                                        <th>store Date</th>
                                        <th>Amount</th>
                                    </tr>";
                            echo "<tr>
                                    <td> $storequan</td>
                                    <td>$storedate</td>
                                </tr>";
                        }
                        echo  "</table>";
                    }
                    ?>
                    <h1>Spend Product</h1>
                    <?php
                    if (isset($_POST['Product_name'])) {
                        $product_name = $_POST['Product_name'];

                        $sql2 = "SELECT * FROM spend_product WHERE Spend_product_name=$product_name";
                        $query2 = $conn->query($sql2);
                        while ($datas = $query2->fetch_assoc()) {


                            $spendquan =   $datas['Spend_product_quantity'];
                            $spenddate =   $datas['Spend_product_date'];
                            $spendName =   $datas['Spend_product_name'];
                            echo "<h3> Category name : $namearrey[$spendName]</h3>";
                            echo "<table class='table table-success table-striped'>
                                    <tr>
                                        <th>spend Date</th>
                                        <th>Quentity</th>
                                    </tr>";
                            echo "<tr>
                                     <td> $spenddate</td>
                                    <td>$spendquan</td>
                                    
                                </tr>";
                            echo  "</table>";
                        }
                    }
                    ?>
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