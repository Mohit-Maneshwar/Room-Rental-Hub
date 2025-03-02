<!-- Program to Insert a record into mysql table-->
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
        
    $sql = "SELECT *FROM booking_table";
    //echo $sql;
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) { 
        // Output data of each row 
        echo"<br><br>";
        echo"<center><h2>All Booked Rooms</h2><br><br>";
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
        echo "<BR>Error in Select Query";
    }
    mysqli_close($conn);
?>