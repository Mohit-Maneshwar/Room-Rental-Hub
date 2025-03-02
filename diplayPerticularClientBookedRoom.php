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

    <?php include "Oheader.php"; ?>
  
    <br><br>

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

        $Ccode = $_POST["Ccode"];
            
        $sql = "SELECT *FROM booking_table  WHERE Customer_id='$Ccode'";
        //echo $sql;
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) { 
            // Output data of each row 
            echo"<br><br>";
            echo"<center><h2>Booked Rooms</h2><br><br>";
            echo"<table class='border border-gray-300' width='60%'>";
            echo"<tr class='border border-gray-300'>";
            echo"<th class='border border-gray-300'>Owner Code</th>";
            echo"<th class='border border-gray-300'>Costomer Id</th>";
            echo"<th class='border border-gray-300'>Room Number</th>";
            echo"<th class='border border-gray-300'>Booking Date</th>";
            echo"</tr>";
            while($row = $result->fetch_assoc()) { 
            //    $row = $result->fetch_assoc();
                echo "<tr class='border border-gray-300'><td align='center' class='border border-gray-300'>".$row["Owner_id"]."</td>";
                echo "<td align='center' class='border border-gray-300'>".$row["Customer_id"]."</td>";
                echo "<td align='center' class='border border-gray-300'>".$row["RoomNumber"]."</td>";
                echo "<td align='center' class='border border-gray-300'>".$row["Booking_Date"]."</td></tr>";
            } 
            print("</table></center><br><br><br>");
        }else {
            echo "<BR><div class='text-center'>Enter Vailid Customer Id</div>";
        }
        mysqli_close($conn);
    ?>
    <br><br><br>
    <?php include "footer.php"; ?>
</body>
</html>