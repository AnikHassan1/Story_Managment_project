<?php require('connection.php') ?>

<?php
if (isset($_GET['storyid'])) {
    $getId = $_GET['storyid'];

    $SQL = "SELECT * FROM store_produt
   WHERE story_product_id=$getId";
    $resuil =  $conn->query($SQL);
    $data = $resuil->fetch_assoc();

    $story_product_id=$data['story_product_id'];
        $storename= $data['story_product_name'];
        $quantity= $data['Story_product_quantity'];
        $dentry= $data['story_product_date'];

}
if (isset($_POST['Update'])) {
   $Product_category=$_POST['Product_category'];
   $quantity=$_POST['quantity'];
   $storyproduct=$_POST['Catagory_Dates'];
   $id=$_POST['story_product_id'];

   $SQL="UPDATE store_produt SET
   story_product_name='  $Product_category',Story_product_quantity=' $quantity',story_product_date='$storyproduct'
   WHERE story_product_id=$id";
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
        <select name="Product_category" >
        <?php 
      while($data = $result->fetch_assoc()){
        $category_id=$data['Catagory_id'];
        $category_name=$data['Catagory_name'];
       echo "<option value='$category_id'>$category_name</option>";}
        ?>
    
    </select><br><br>
       
        Product quantity: <br>
        <input type="text" name="quantity" value="<?php echo  $quantity ;?>"><br><br>
        Product Entry Date: <br>
        <input type="date" name="Catagory_Dates" value="<?php echo $dentry ;?>"><br><br>
        <input type="text" name="story_product_id" value="<?php echo   $story_product_id ;?>" hidden>
        <input type="submit" value="Update" name="Update">
    </form>
</body>

</html>