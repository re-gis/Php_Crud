
<?php
include_once './config.php';
$user_id = $_GET[ 'user_id' ];
$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
$result = mysqli_query( $conn, $sql );
if ( $result ) {
    $row = mysqli_fetch_assoc( $result );
    if ( $row ) {
        $lname = $row[ 'lname' ];
        $fname = $row[ 'fname' ];
        $email = $row[ 'email' ];
        $password = $row[ 'password' ];
    } else {
        echo 'Invalid credentials!';
    }
} else {
    echo 'Error: ' . mysqli_error( $conn );
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        display: flex;
        justify-content: center;
      }
    </style>
  </head>
  <body>
    <div>
      <div
        style="
          border: 1px solid skyblue;
          padding: 20px;
          width: 100%;
          height: auto;
        "
      >
        <div style="text-align: center">
          <h1 style="color: blue; text-decoration: underline">Update Page</h1>
        </div>
        <form action="edit2.php" method="post" style="width: 100%">
          <div style="margin-bottom: 10px">
            <label for="fname">Firstname</label>
            <input style="display: flex;width: 100%;"" type="text" placeholder="Firstname"
            name="fname" value="<?php echo $fname;?>">
          </div>
          <div style="margin-bottom: 10px">
            <label for="lname">Lastname</label>
            <input style="display: flex;width: 100%;"" type="text" placeholder="Firstname"
            name="lname" value="<?php echo $lname;?>">
          </div>
          <div style="margin-bottom: 10px">
            <label for="email">Email</label>
            <input style="display: flex;width: 100%;"" type="email" placeholder="Email"
            name="email" value="<?php echo $email;?>">
          </div>
          <div style="margin-bottom: 10px">
            <label for="password">Password</label>
            <input style="display: flex;width: 100%;"" type="password" placeholder="Password"
            name="password" value="<?php echo $password;?>">
          </div>
          <div>
            <button
              style="
                background-color: green;
                border: none;
                padding: 5px 10px 5px 10px;
                border-radius: 5px;
                color: white;
                cursor: pointer;
              "
              type="submit"
            >
              Update
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
