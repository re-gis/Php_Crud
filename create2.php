<?php
include_once './config.php';
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    echo $user_id;

    if(empty($lname) || empty($fname) || empty($password) || empty($email)) {
        echo 'All credentials required!';
    } else {
        // hash password
        $newPassword = password_hash( $password, PASSWORD_DEFAULT );
        // save to database
        $sql = "INSERT INTO users (fname, lname, password, email) VALUES ('$fname', '$lname', '$password', '$email')";
        $result = mysqli_query( $conn, $sql );
        if ( $result ) {
            header( 'Location: dash.php' );
        } else {
            echo 'Error: ' . mysqli_error( $conn );
        }
    }
?>