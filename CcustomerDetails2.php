<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-Out</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <?php include "Cheader.php"; ?>
    <br><br><br>

          
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

       $Ccode = $_POST["CustomerId"];
       $OId = $_POST["OId"];
       $RoomNumber = $_POST["RoomNumber"];
       $RoomCharge = $_POST["RoomCharge"];
            
        $sql = "SELECT *FROM customer_table  WHERE Customer_id='$Ccode'";
        //echo $sql;
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) { 
            // Output data of each row 
            echo"<br><br>";
            echo"<center><h2>Customer Details</h2><br><br>";
            echo"<table class='border border-gray-300' width='60%'>";
            echo"<tr class='border border-gray-300'>";
            echo"<th class='border border-gray-300'>ID</th>";
            echo"<th class='border border-gray-300'>Name</th>";
            echo"<th class='border border-gray-300'>Contact</th>";
            echo"<th class='border border-gray-300'>Address</th>";
            echo"</tr>";
            $row = $result->fetch_assoc();
            //    $row = $result->fetch_assoc();
                echo "<tr class='border border-gray-300'><td align='center' class='border border-gray-300'>".$row["Customer_id"]."</td>";
                echo "<td align='center' class='border border-gray-300'>".$row["CustomerName"]."</td>";
                echo "<td align='center' class='border border-gray-300'>".$row["Contact"]."</td>";
                echo "<td align='center' class='border border-gray-300'>".$row["CustomerAdd"]."</td></tr>";
            // } 
            print("</table></center><br><br><br>");
        }

        echo"<form action='CCheckOutYesOrNo.php' method='POST'>";
        echo "<input readonly name='Ccode' value='$Ccode' class='outline-none text-black border-none text-white'>";
        echo "<input readonly name='OId' value='$OId' class='outline-none text-black border-none text-white'>";
        echo "<input readonly name='RoomNumber' value='$RoomNumber' class='outline-none text-black border-none text-white'>";
        echo "<input readonly name='RoomCharge' value='$RoomCharge' class='outline-none text-black border-none text-white'>";
        echo"<center><button class='bg-green-500 text-white py-2 px-4 rounded-md'>Do You Want to check Out</button></center>";
        echo"</button>";
            
       
       mysqli_close($conn);
       echo "<br><br>"
   ?>

    <br><br><br>
    <?php include "footer.php"; ?>
</body>
</html>