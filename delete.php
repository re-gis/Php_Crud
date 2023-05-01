<?php
include_once 'config.php';
$user_id = $_GET[ 'user_id' ];
$sql = "DELETE FROM users WHERE user_id= '$user_id'";
if ( mysqli_query( $conn, $sql ) ) {
    header( 'Location: dash.php' );
} else {
    echo 'Error: ' . mysqli_error( $conn );
}

?>