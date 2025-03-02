<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title></title>
</head>
<body>
  
      <?php include "Oheader.php";
    echo"<br><br><br><br>";
    echo"<center>Happy Journey</center>";
    ?> 
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
        $OId = $_POST["OId"];
        $RoomNumber = $_POST["RoomNumber"];
        $RoomCharge = $_POST["RoomCharge"];
            
        $sql = "UPDATE room_details SET Booking = '' WHERE OwnerCode = '$OId' AND RoomNumber = '$RoomNumber' AND RoomCharge='$RoomCharge'";

        if(mysqli_query($conn,$sql)){
            echo"";
        }
        
        mysqli_close($conn);
        //include "footer.php";
    ?>
  <?php
  echo"<br><br><br><br><br><br>";
  include "footer.php"; ?>
 </body>
 </html>