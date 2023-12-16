<?php 
function datalist($table,$column1,$column2){
    require( 'connection.php' );
    $sql = "SELECT * FROM $table";
    $result = $conn->query( $sql );

    while( $data = $result->fetch_assoc() ) {
        $Data_id = $data[ $column1 ];
        $Data_name = $data[ $column2];
        echo "<option value='$Data_id'>$Data_name</option>";
    }
}

?>