<?php require('connection.php') ?>

<?php
if (isset($_GET['spend_productid'])) {
    $getId = $_GET['spend_productid'];

    $SQL = "SELECT * FROM spend_product
   WHERE Spend_product_id=$getId";
    $resuil =  $conn->query($SQL);
    $data = $resuil->fetch_assoc();

    $Spend_product_id=$data['Spend_product_id'];
       $Spend_product_name= $data['Spend_product_name'];
        $Spend_product_quantity= $data['Spend_product_quantity'];
        $Spend_product_date= $data['Spend_product_date'];

}
if (isset($_POST['Update'])) {
   $Product_category=$_POST['$Spend_product_name'];
   $quantity=$_POST['Spend_product_quantity'];
   $storyproduct=$_POST['Spend_product_date'];
   $id=$_POST['Spend_product_id'];

   $SQL="UPDATE spend_product SET
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
        $sql= "SELECT * FROM catagory";
        $result= $conn->query($sql);
        


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
       
        Product Category: <br>
        <select name="$Spend_product_name" >
        <?php 
      while($data = $result->fetch_assoc()){
        $category_id=$data['Catagory_id'];
        $category_name=$data['Catagory_name'];
       echo "<option value='$category_id'>$category_name</option>";}
        ?>
    
    </select><br><br>
       
        Product quantity: <br>
        <input type="text" name="Spend_product_quantity" value="<?php echo  $Spend_product_quantity ;?>"><br><br>
        Product Entry Date: <br>
        <input type="date" name="Spend_product_date" value="<?php echo $Spend_product_date ;?>"><br><br>
        <input type="text" name="Spend_product_id" value="<?php echo   $Spend_product_id ;?>" hidden>
        <input type="submit" value="Update" name="Update">
    </form>
</body>

</html>