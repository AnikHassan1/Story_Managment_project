<?php require('connection.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>

<body>

    <?php
    if (isset($_GET['id'])) {
        $getid = $_GET['id'];
        $sql = "SELECT * FROM catagory
        WHERE Catagory_id=$getid";
        $query = $conn->query($sql);
        $data = $query->fetch_assoc();

        $did =  $data['Catagory_id'];
        $dname = $data['Catagory_name'];
        $dentry = $data['Catagory_entyDate'];
    }

    if (isset($_POST['Update'])) {
        $sname = $_POST['Catagory_name'];
        $sdate = $_POST['Catagory_entyDate'];
        $sid = $_POST['Catagory_id'];

        $sql =  "UPDATE catagory
        SET Catagory_name='$sname',Catagory_entyDate='$sdate'
        WHERE Catagory_id= $sid";
        if ($conn->query($sql) === TRUE) {
            echo "Update Successful";
        }else{
            echo " Not Update Successful";
        };
    }
    ?>

    <form action="edit.php" method="POST">
        Category :<br>
        <input type="text" name="Catagory_name" value="<?php echo $dname ?>"><br><br>
        Category Entry Date :<br>
        <input type="date" name="Catagory_entyDate" value="<?php echo $dentry ?>"><br><br>
        <input type="text" name="Catagory_id" value="<?php echo $did ?>" hidden>
        <input type="submit" value="Update" name="Update">
    </form>
</body>

</html>