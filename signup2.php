<?php
    include_once './config.php';
    $lname = $_POST[ 'lname' ];
    $fname = $_POST[ 'fname' ];
    $password = $_POST[ 'password' ];
    $email = $_POST[ 'email' ];
    if ( empty( $lname ) || empty( $fname ) || empty( $password ) || empty( $email ) ) {
        echo 'All credentials required!';
    } else {
        // update database
        $sql = "INSERT INTO users (lname, fname, email, password) VALUES ('$lname', '$fname', '$email', '$password')";
        $result = mysqli_query( $conn, $sql );
        if ( $result ) {
            header( 'Location: login.php' );
        } else {
            echo 'Error: ' . mysqli_error( $conn );
        }
    }
?>