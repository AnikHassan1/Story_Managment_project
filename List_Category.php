<?php require('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List_of_Category</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM catagory";
    $query=$conn->query($sql);
    echo"<table border='1'>
    <tr>
    <th>Catagory_ID</th>
    <th>Catagory_name</th>
    <th>Catagory_entyDate</th>
    <th>Action</th>
    </tr>
    ";
  
    while($data=$query->fetch_assoc()){
        $id=$data['Catagory_id'];
        $cname= $data['Catagory_name'];
        $centry= $data['Catagory_entyDate'];

        echo"<tr>
        <td>$id</td>
        <td>$cname</td>
        <td>$centry</td>
        <td><a href='edit.php?id=$id'>Edit</a></td>
        </tr>";
       
    }
    echo "</table>";
    ?>
</body>

</html>