<?php
    include_once './config.php';
    $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];
    if ( empty( $email ) || empty( $password ) ) {
        echo 'All credentials required!';
    } else {
        // update database
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query( $conn, $sql );
        if ( $result ) {
            $row = mysqli_fetch_assoc( $result );
            if ( $row ) {
                header( 'Location: dash.php' );
            } else {
                echo 'Invalid credentials!';
            }
        } else {
            echo 'Error: ' . mysqli_error( $conn );
        }
    }
?>