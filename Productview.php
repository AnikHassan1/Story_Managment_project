<?php require('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List_Product</title>
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
                        <div class="row p-4 m-4">

                            <?php
                            $csql = "SELECT * FROM catagory";
                            $RESULT = $conn->query($csql);

                            $data_list = array();

                            while ($datal = $RESULT->fetch_assoc()) {
                                $cid = $datal['Catagory_id'];
                                $cname = $datal['Catagory_name'];

                                $data_list["$cid"] = $cname;
                            }
                            ?>
                            <?PHP
                            $sql = "SELECT * FROM product";
                            $datas =  $conn->query($sql);
                            echo "<table class='table table-success table-striped'>
                            <tr>
                                <th>Product name</th>
                                <th>Product Category</th>
                                <th>Product_code</th>
                                <th>Action</th>
                            </tr>";

                            while ($data = $datas->fetch_assoc()) {
                                $id = $data['Product_id'];
                                $Product_category = $data['Product_category'];
                                $name = $data['Product_name'];
                                $code = $data['Product_code'];
                                echo "<tr>

                                <td>$name</td>
                                <td>$data_list[$Product_category] </td>
                                <td>$code</td>
                                <td><a  class='btn btn-success' href='edit_category.php?editid=$id'>Edit</a></td>
                                </tr>";
                            }

                            echo "</table>";
                            ?>
                        </div><!--end of right -->
                    </div><!--end of row -->
                </div>
                <div class="container-foulid border-top 
         border-success mt-2">
                    <?php require('footer.php') ?>
                </div>
            </div><!--End of container-->


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>



</body>

</html>