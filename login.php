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

    $Remail = $_POST['email'];
    $Rpassword = $_POST['password'];

    $sql = "SELECT *FROM register";
        //echo $sql;
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) { 

        $found = false; // Flag to check if user exists

        while ($data = $result->fetch_assoc()) { 
            $email = $data["Email"];
            $password = $data["Password"];
            $typeOfUser = $data["TypeOfUser"];

            if ($Remail == $email && $Rpassword == $password) {
                $found = true; 
                
                if ($typeOfUser == 'Owner') {
                    include "Oindex.php";
                } elseif ($typeOfUser == 'Renter') {
                    include "Cindex.php";
                }
                break;
            } 
        }
        if (!$found) {
            echo "<br><center><b>Please Enter Correct Email and Password</b></center>";
            include "login.html";
        } 
        }

    mysqli_close($conn);
?>
