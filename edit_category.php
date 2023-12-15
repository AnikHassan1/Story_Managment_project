<?php require('connection.php') ?>

<?php
if (isset($_GET['editid'])) {
    $getId = $_GET['editid'];

    $SQL = "SELECT * FROM product
   WHERE Product_id=$getId";
    $resuil =  $conn->query($SQL);
    $data = $resuil->fetch_assoc();

    $ID = $data['Product_id'];
    $name = $data['Product_name'];
    $Product_code = $data['Product_code'];
    $Product_EntryDate = $data['Product_EntryDate'];
    $Product_category = $data['Product_category'];
}
if (isset($_POST['Update'])) {
    $names = $_POST['Product_name'];
    $product_id = $_POST['Product_id'];
    $Product_codes = $_POST['Product_code'];
    $Product_EntryDates = $_POST['Product_EntryDate'];
    $Product_categorys = $_POST['Product_category'];
    if (!empty($names) || !empty($Product_codes) || !empty($Product_EntryDates) || !empty($Product_categorys)) {
        $SQL =  "UPDATE product
        SET Product_name=' $names',Product_code='$Product_codes',Product_EntryDate='$Product_EntryDates',Product_category='$Product_categorys'
        WHERE Product_id=$product_id";
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
    <title>Edit Product</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Product Name: <br>
        <input type="text" name="Product_name" value="<?php echo $name ?>"><br><br>
        Product Category: <br>
        <input type="text" name="Product_category" value="<?php echo  $Product_category ?>"><br><br>
        Product Code: <br>
        <input type="text" name="Product_code" value="<?php echo $Product_code ?>"><br><br>
        Product Entry Date: <br>
        <input type="text" name="Product_EntryDate" value="<?php echo  $Product_EntryDate ?>"><br><br>
        <input type="text" name="Product_id" value="<?php echo  $ID ?>" hidden>
        <input type="submit" value="Update" name="Update">
    </form>
</body>

</html>