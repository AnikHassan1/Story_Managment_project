<?php
require("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Product</title>
</head>
<body>

<?php 
if (isset($_POST['submit'])) {
    $pname      = $_POST['Product_name'];
    $Category   = $_POST['Product_category'];
    $pCode      = $_POST['Product_code'];
    $pEntryDate = $_POST['Product_EntryDate'];

    $SQL = "INSERT INTO product(Product_name,Product_category,Product_code,Product_EntryDate) VALUES('$pname','$Category','$pCode','$pEntryDate')";

    if ($conn->query($SQL) === TRUE) {
        echo " Insert Data";
    }else {
        echo "Not Insert Data";
    }
}
?>
<?php 
        $sql= "SELECT * FROM catagory";
        $result= $conn->query($sql);
        


?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    Product :<br>
    <input type="text" name="Product_name" id=""><br><br>
    Category :<br>
    <select name="Product_category" >
        <?php 
      while($data = $result->fetch_assoc()){
        $category_id=$data['Catagory_id'];
        $category_name=$data['Catagory_name'];
       echo "<option value='$category_id'>$category_name</option>";}
        ?>
    
    </select><br><br>
    <!-- <input type="text" name="Product_category" id=""><br><br> -->
    Product_code :<br>
    <input type="text" name="Product_code" id=""><br><br>
    Product_EntryDate :<br>
    <input type="date" name="Product_EntryDate" id=""><br><br>
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>