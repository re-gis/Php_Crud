<?php
include_once 'config.php';
$sql = mysqli_query( $conn, 'SELECT * FROM users' );
$output = '';
if ( mysqli_num_rows( $sql ) == 0 ) {
    $output .= '<tr><td>"No users available!"</td></tr>';
} elseif ( mysqli_num_rows( $sql ) > 0 ) {
    include_once 'data.php';

}
echo $output;
?>