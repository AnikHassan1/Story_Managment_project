<?php require('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>
<?php
$csql="SELECT * FROM catagory";
$RESULT=$conn->query($csql);

$data_list=array();

while($datal = $RESULT->fetch_assoc()){
    $cid=$datal['Catagory_id'];
    $cname=$datal['Catagory_name'];

    $data_list["$cid"]=$cname;
   
}
?>
<?PHP
$sql = "SELECT * FROM product";
$datas =  $conn->query($sql);
echo "<table border='1'</table>
    <tr>
       
        <th>Product name</th>
        <th>Product Category</th>
        <th>Product_code</th>
        <th>Action</th>
    </tr>";

while ($data=$datas->fetch_assoc()) {
    $id = $data['Product_id'];
    $Product_category = $data['Product_category'];
    $name = $data['Product_name'];
    $code = $data['Product_code'];
    echo "<tr>

<td>$name</td>
<td>$data_list[$Product_category] </td>
<td>$code</td>
<td><a href='edit_category.php?editid=$id'>Edit</a></td>
</tr>";
}

echo "</table>";
?>

</table>
</body>

</html>