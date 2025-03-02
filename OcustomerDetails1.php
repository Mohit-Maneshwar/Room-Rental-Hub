<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer-Details1</title>
    <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <?php include "Oheader.php"; ?>
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
           
       $sql = "SELECT *FROM booking_table";
       //echo $sql;
       $result = $conn->query($sql); 

       $CId = $_POST["CustomerId"];
       

         echo "<div class='flex justify-center gap-40'>";
         echo "<div>";
        
         echo "<form action='OcustomerDetails2.php' method='POST' class='flex gap-3'>";
        
         while($data = $result->fetch_assoc()) {
        //    $CId = $data["Customer_id"];
           
           if($CId == $data["Customer_id"]){
            $OId = $data["Owner_id"];
            $CId = $data["Customer_id"];
            $RoomNumber = $data["RoomNumber"];
            $RoomCharge = $data["RoomCharge"];

            echo "<input readonly name='CustomerId' value='$CId' class='outline-none text-transparent border-none text-white'>";
            echo "<input readonly name='OId' value='$OId' class='outline-none text-transparent border-none text-white'>";
            echo "<input readonly name='RoomNumber' value='$RoomNumber' class='outline-none text-transparent border-none text-white'>";
            echo "<input readonly name='RoomCharge' value='$RoomCharge' class='outline-none text-transparent border-none text-white'>";

           }

          }
         echo "<button class='bg-blue-500 rounded-md py-2 px-5'> Customer Deatials </button>";
         echo "</form>";
         echo "</div>";
         
         echo "</div>";
 
       
       mysqli_close($conn);
       echo "<br><br>"
   ?>

    <br><br><br>
    <?php include "footer.php"; ?>
</body>
</html>