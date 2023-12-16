<?php require('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List_of_store_Product</title>
</head>

<body>
<?php
$csql="SELECT * FROM product";
$RESULT=$conn->query($csql);

$data_list=array();

while($datal = $RESULT->fetch_assoc()){
    $cid=$datal['Product_id'];
    $cname=$datal['Product_name'];

    $data_list[$cid]=$cname;
   
}
?>

    <?php
    $sql = "SELECT * FROM store_produt";
    $query=$conn->query($sql);
    echo"<table border='1'>
    <tr>
   
    <th>story_product_name</th>
    <th>Story_product_quantity</th>
    <th>story_product_date</th>
    <th>Action</th>
    </tr>
    ";
  
    while($data=$query->fetch_assoc()){
       $story_product_id=$data['story_product_id'];
        $storename= $data['story_product_name'];
        $quantity= $data['Story_product_quantity'];
        $date= $data['story_product_date'];

        echo"<tr>
        
        <td>$data_list[$storename]</td>
        <td>$quantity</td>
        <td>$date</td>
        <td><a href='storyedit.php?storyid= $story_product_id'>Edit</a></td>
        </tr>";
       
    }
    echo "</table>";
    ?>
</body>

</html>