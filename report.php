<?php require('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>

<body>
    <form action="report.php" method="POST">

        Select Product :
        <select name="" id="">
            <?php
            $sql = "SELECT * FROM product";
            $datas =  $conn->query($sql);

            while ($data = $datas->fetch_assoc()) {
                $id = $data['Product_id'];
                $name = $data['Product_name'];
            

            ?>

            <option value="<?php echo $id?>"><?php echo  $name?></option>
        <?php } ?>
        </select>
        
        <input type="submit" value="Generate Report" name="submit">
    </form>
</body>

</html>