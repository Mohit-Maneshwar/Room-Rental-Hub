<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Particular Owner</title>
</head>
<body>

<?php include "Cheader.php"; ?>  
    <br>  

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
            
        $sql = "SELECT *FROM room_details WHERE Booking = ''";
        //echo $sql;
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) { 

          while($data = $result->fetch_assoc()) { 
              $img = $data["RoomImg"];
               
                  echo "<div class='py-20 flex flex-col items-center justify-center'>";
                  echo  "<img src='/room_rental_hub/images/postUploads/$img' class='w-[80vw] px-10 py-10 h-[70vh]'>";
                  echo "Owner Code = ".$data["OwnerCode"].", ";
                  echo "Room Charge = ".$data["RoomCharge"];
                  echo "<hr></div> <br><br>";
            } 
        }
        mysqli_close($conn);
    ?>

<?php include "footer.php"; ?>
</body>
</html>