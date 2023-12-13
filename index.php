<?php
$conn = new mysqli("localhost", "story12", "story123", "store_db");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Category</title>
</head>
<body>

<?php 
if (isset($_POST['submit'])) {
    $cname = $_POST['Catagory_name'];
    $cEntryDate = $_POST['Catagory_entyDate'];

    $SQL = "INSERT INTO catagory(Catagory_name,Catagory_entyDate) VALUES('$cname','$cEntryDate')";

    if ($conn->query($SQL) === TRUE) {
        echo " Insert Data";
    }else {
        echo "Not Insert Data";
    }
}
?>

<form action="index.php" method="POST">
    Category :<br>
    <input type="text" name="Catagory_name" id=""><br><br>
    Category Entry Date :<br>
    <input type="date" name="Catagory_entyDate" id=""><br><br>
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>