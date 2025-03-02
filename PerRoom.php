<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Per Room</title>
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
            
        $sql = "SELECT *FROM room_details";
        //echo $sql;
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) { 
          
          $Img = $_POST["Img"];
          $Ocode = $_POST["OwnerCode"];
          $RoomNumber = $_POST["RoomNumber"];
          $RoomCharge = $_POST["RoomCharge"];
          while($data = $result->fetch_assoc()) { 
              $img = $data["RoomImg"];
              
                if($data["RoomImg"]== $Img && $data["OwnerCode"] == $Ocode){
                  echo "<div class='py-20 flex flex-col items-center justify-center'>";
                  echo  "<img src='/room_rental_hub/images/postUploads/$img' class='w-[80vw] px-10 py-10 h-[70vh]'>";
                  echo "Owner Code - ".$data["OwnerCode"]."<br>";
                  echo "Room Number - ".$data["RoomNumber"]."<br>";
                  echo "Room Size - ".$data["RoomSize"]."<br>";
                  echo "Room Charge - ".$data["RoomCharge"];
                  echo "<form action='customerForm.php' method='post'>";
                  echo "<center>";
                  echo "<button class='border-none outline-none bg-green-300 hover:bg-green-500 text-white px-5 py-3 mt-5 rounded cursor-pointer'>Booking</button>";
                  echo "</center>";
                  echo "<input readonly name='Img' value='$img' class='outline-none border-none text-white'>";
                  echo "<input readonly name='OwnerCode' value='$Ocode' class='outline-none border-none text-white'>";
                  echo "<input readonly name='RoomNumber' value='$RoomNumber' class='outline-none border-none text-white'>";
                  echo "<input readonly name='RoomCharge' value='$RoomCharge' class='outline-none border-none text-white'>";
                  echo "</form>";
                  echo "</div> <br><br>";                
                }
            } 
        }
        mysqli_close($conn);
    ?>


  <br><br><br>

  <?php include "footer.php"; ?>
</body>
</html>