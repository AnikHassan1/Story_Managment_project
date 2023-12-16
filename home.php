<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>store Managment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-light">

        <div class="container-foulid border-bottom border-success "> <!--topbar-->
          
        <div class="row p-3">
                <div class="col-sm-9">
                <h1><a class="text-decoration-none text-success" href="home.php">Store Managment System</a></h1> 
                </div>
                <div class="col-sm-3 p-0">
                    <p><a class="mt-2 text-decoration-none text-success btn btn-success ps-2  text-white"  href="logout.php">Log Out</a></p>
                </div>
            </div>
           

        </div><!--end-- topbar-->
        <div class="container-foulid">
            <div class="row ">
                <div class="col-sm-3 bg-light p-0 m-0">
                    <h5 class="mt-2 bg-success text-white px-2 py-1">Category</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a class="text-decoration-none text-dark" href="index.php">Add Category</a></li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="List_Category.php">List of Category</a>
                        </li>
                    </ul>

                    <h5 class=" mt-2 bg-success text-white px-2 py-1">Product</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a class="text-decoration-none text-dark" href="addProduct.php">Add Product</a></li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="List_of_product.php">List of Product</a>
                        </li>
                    </ul>

                    <h5 class=" mt-2 bg-success text-white px-2 py-1">Store Product</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a class="text-decoration-none text-dark" href="addStore.php">Add Store Product</a></li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="list_of_story.php">List Store Product</a>
                        </li>
                    </ul>
                    <h5 class=" mt-2 bg-success text-white px-2 py-1">Spend Product</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a class="text-decoration-none text-dark" href="addspend.php">Add Spend Product</a></li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="List_of_product.php">List of Product</a>
                        </li>
                    </ul>
                </div><!--end of left -->
                <div class="col-sm-9">

                </div><!--end of right -->
            </div><!--end of row -->
        </div>
        <div class="container-foulid border-top 
         border-success mt-2">
            <p class="text-center p-2" >Copyright : Store Managment System</p>
        </div>
    </div><!--End of container-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>