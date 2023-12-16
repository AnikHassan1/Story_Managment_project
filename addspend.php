<?php
require( 'connection.php' );
require('function_id.php');
?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>	Spend_product</title>
</head>
<body>

<?php
if ( isset( $_POST[ 'submit' ] ) ) {
    $sname      = $_POST[ 'Spend_product_name' ];
    $sategory   = $_POST[ 'Spend_product_quantity' ];
    $pEntryDate = $_POST[ 'Spend_product_date' ];

    $SQL = "INSERT INTO spend_product(Spend_product_name,Spend_product_quantity,Spend_product_date)
     VALUES('$sname','$sategory','$pEntryDate')";

    if ( $conn->query( $SQL ) === TRUE ) {
        echo ' Insert Data';
    } else {
        echo 'Not Insert Data';
    }
}
?>
<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = 'POST'>

Product :<br>
<select name = 'Spend_product_name' >
<?php
datalist('product','Product_id','Product_name')
?>

</select><br><br>
<!-- <input type = 'text' name = 'Product_category' id = ''><br><br> -->
Product_Quantity :<br>
<input type = 'text' name = 'Spend_product_quantity' id = ''><br><br>
store_Product_Date :<br>
<input type = 'date' name = 'Spend_product_date' id = ''><br><br>
<input type = 'submit' value = 'submit' name = 'submit'>
</form>
</body>
</html>