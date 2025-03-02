<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "room_rental_hub";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        echo "<BR>Invalid Database or path";
    }

    $UName = $_POST['UName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $TypeOfUser = $_POST['OC'];
    
    $sql = "INSERT INTO register VALUES('$UName','$email','$password','$TypeOfUser')";

    if(mysqli_query($conn,$sql)){
      include "login.html";
    }

    mysqli_close($conn);
?>
