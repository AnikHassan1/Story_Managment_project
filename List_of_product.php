<?php require('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List_of_spend_product</title>
</head>

<body>
<?php
// $csql="SELECT * FROM spend_product";
// $RESULT=$conn->query($csql);

// $data_list=array();

// while($datal = $RESULT->fetch_assoc()){
//     $cid=$datal['Product_id'];
//     $cname=$datal['Product_name'];

//     $data_list[$cid]=$cname;
   
// }
?>

    <?php
    $sql = "SELECT * FROM spend_product";
    $query=$conn->query($sql);
    echo"<table border='1'>
    <tr>
   
    <th>Spend_product_name</th>
    <th>Spend_product_quantity</th>
    <th>Spend_product_date</th>
    <th>Action</th>
    </tr>
    ";
  
    while($data=$query->fetch_assoc()){
       $Spend_product_id=$data['Spend_product_id'];
       $Spend_product_name= $data['Spend_product_name'];
        $Spend_product_quantity= $data['Spend_product_quantity'];
        $Spend_product_date= $data['Spend_product_date'];

        echo"<tr>
        
        <td>$Spend_product_name</td>
        <td>$Spend_product_quantity</td>
        <td> $Spend_product_date</td>
        <td><a href='spendedit.php?spend_productid= $Spend_product_id'>Edit</a></td>
        </tr>";
       
    }
    echo "</table>";
    ?>
</body>

</html>