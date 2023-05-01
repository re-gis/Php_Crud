<?php
include_once 'config.php';
$user_id = mysqli_real_escape_string( $conn, $_GET[ 'user_id' ] );
$sql = mysqli_query( $conn, "SELECT * FROM users WHERE user_id = '$user_id'" );
if ( mysqli_num_rows( $sql ) == 1 ) {
    $row = mysqli_fetch_assoc( $sql );
    // print_r ( $row );
}
?>