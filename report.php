<?php require('connection.php') ?>
<?php
$sel = "SELECT * FROM product";
$QUE = $conn->query($sel);
$namearrey = array();
while ($arr = $QUE->fetch_assoc()) {
    $Pid = $arr['Product_id'];
    $Pname = $arr['Product_name'];
    $namearrey[$Pid] = $Pname;
}
?>
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
        <select name="Product_name" id="">
            <?php
            $sql = "SELECT * FROM product";
            $datas =  $conn->query($sql);

            while ($data = $datas->fetch_assoc()) {
                $id = $data['Product_id'];
                $name = $data['Product_name'];


            ?>

                <option value="<?php echo $id ?>"><?php echo  $name ?></option>
            <?php } ?>
        </select>

        <input type="submit" value="Generate Report" name="submit">
    </form>
    <h1>Store Product</h1>
    <?php
    if (isset($_POST['Product_name'])) {
        $product_name = $_POST['Product_name'];

        $sql = "SELECT * FROM store_produt WHERE story_product_name=$product_name";
        $query = $conn->query($sql);
        while ($DATA = $query->fetch_assoc()) {

            $storeName = $DATA['story_product_name'];
            $storequan =   $DATA['Story_product_quantity'];
            $storedate =    $DATA['story_product_date'];

            echo "<h3>$namearrey[$storeName]</h3>";
            echo "<table border='1'>
            <tr>
                <th>store Date</th>
                <th>Amount</th>
            </tr>";
            echo "<tr>
            <td> $storequan</td>
            <td>$storedate</td>
           </tr>";
            echo  "</table>";
        }
    }
    ?>
    <h1>Spend Product</h1>
    <?php
    if (isset($_POST['Product_name'])) {
        $product_name = $_POST['Product_name'];

        $sql2 = "SELECT * FROM spend_product WHERE Spend_product_name=$product_name";
        $query2 = $conn->query($sql2);
        while ($datas = $query2->fetch_assoc()) {


            $spendquan =   $datas['Spend_product_quantity'];
            $spenddate =   $datas['Spend_product_date'];
            $spendName =   $datas['Spend_product_name'];
            echo "<h3>$namearrey[$spendName]</h3>";
            echo "<table border='1'>
            <tr>
                <th>spend Date</th>
                <th>Amount</th>
            </tr>";
            echo "<tr>
            <td>$spendquan</td>
            <td> $spenddate</td>
           </tr>";
            echo  "</table>";
        }
    }
    ?>
</body>

</html>