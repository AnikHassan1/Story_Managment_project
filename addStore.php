<?php
require( 'connection.php' );
require('function_id.php');
?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Store Product</title>
</head>
<body>

<?php
if ( isset( $_POST[ 'submit' ] ) ) {
    $sname      = $_POST[ 'story_product_name' ];
    $sategory   = $_POST[ 'Story_product_quantity' ];
    $pEntryDate = $_POST[ 'story_product_date' ];

    $SQL = "INSERT INTO store_produt(story_product_name,Story_product_quantity,story_product_date)
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
<select name = 'story_product_name' >
<?php
datalist('product','Product_id','Product_name')
?>

</select><br><br>
<!-- <input type = 'text' name = 'Product_category' id = ''><br><br> -->
Product_Quantity :<br>
<input type = 'text' name = 'Story_product_quantity' id = ''><br><br>
store_Product_Date :<br>
<input type = 'date' name = 'story_product_date' id = ''><br><br>
<input type = 'submit' value = 'submit' name = 'submit'>
</form>
</body>
</html>