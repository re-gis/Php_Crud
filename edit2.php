<?php
include_once './config.php';
$lname = $_POST[ 'lname' ];
$fname = $_POST[ 'fname' ];
$password = $_POST[ 'password' ];
$email = $_POST[ 'email' ];
$user_id = $_GET[ 'user_id' ];
echo $userId;

if ( empty( $lname ) || empty( $fname ) || empty( $password ) || empty( $email ) ) {
    echo 'All credentials required!';
} else {
    // update database
    $sql = "UPDATE users SET lname = '$lname', fname= '$fname', email='$email', password= '$password' WHERE user_id = '$userId'";
    $result = mysqli_query( $conn, $sql );
    if ( $result ) {
        header( 'Location: dash.php' );
    } else {
        echo 'Error: ' . mysqli_error( $conn );
    }
}
?>