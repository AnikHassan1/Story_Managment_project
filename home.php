<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>store Managment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome lin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container bg-light">

        <div class="container-foulid border-bottom border-success "> <!--topbar-->

            <?php require("topbar.php")?>


        </div><!--end-- topbar-->
        <div class="container-foulid">
            <div class="row">
                <div class="col-sm-3 bg-light p-0 m-0 border-end border-success">
                   
                <?php require("slidebar.php")?>
                </div><!--end of left -->
                <div class="col-sm-9">
                    <div class="row p-4">

                        <div class="col-sm-3">
                            <a href="index.php"><i class="fa-solid fa-folder-plus fa-2xl"></i></a>
                            <p class="mt-2 text-success">ADD Category</p>
                        </div>
                        <div class="col-sm-3">
                            <a href="List_Category.php"> <i class="fa-solid fa-folder-open fa-2xl"></i></a>
                            <p class="mt-2 text-success"> Category List</p>
                        </div>
                        <div class="col-sm-3">
                            <a href="addProduct.php"> <i class="fa-solid fa-box-open fa-2xl"></i></a>
                            <p class="mt-2 text-success">ADD Product</p>
                        </div>
                        <div class="col-sm-3">
                            <a href="List_of_product.php"><i class="fa-solid fa-bars-staggered fa-2xl"></i></a>
                            <p class="mt-2 text-success"> Product List</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-4">

                        <div class="col-sm-3">
                            <a href="addStore.php"><i class="fa-solid fa-file-import fa-2xl"></i></a>
                            <p class="mt-2 text-success">ADD Store</p>
                        </div>
                        <div class="col-sm-3">
                            <a href="list_of_story.php"> <i class="fa-solid fa-table-list fa-2xl"></i></a>
                            <p class="mt-2 text-success"> Store List</p>
                        </div>
                        <div class="col-sm-3">
                            <a href="addspend.php"> <i class="fa-solid fa-square-plus fa-2xl"></i></a>
                            <p class="mt-2 text-success">ADD Spend</p>
                        </div>
                        <div class="col-sm-3">
                            <a href="List_of_product.php"><i class="fa-solid fa-list-check fa-2xl"></i></a>
                            <p class="mt-2 text-success"> Spend List</p>
                        </div>
                    </div>
                    <hr class="text-success">
                    <div class="row p-4">

                        <div class="col-sm-3">
                            <a href="report.php"><i class="fa-solid fa-square-poll-vertical fa-2xl"></i></a>
                            <p class="mt-2 text-success">Report</p>
                        </div>
                        


                    </div>
                    <hr class="text-success">
                    <div class="row p-4">
                    <div class="col-sm-3">
                            <a href="UserAdd.php"><i class="fa-solid fa-users fa-2xl"></i></a>
                            <p class="mt-2 text-success"> ADD User</p>
                        </div>
                        <div class="col-sm-3">
                            <a href="List_of_user.php"><i class="fa-solid fa-address-book fa-2xl"></i></a>
                            <p class="mt-2 text-success"> ADD User List</p>
                        </div>
                    </div>
                </div><!--end of right -->
            </div><!--end of row -->
        </div>
        <div class="container-foulid border-top 
         border-success mt-2">
           <?php require('footer.php')?>
        </div>
    </div><!--End of container-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>