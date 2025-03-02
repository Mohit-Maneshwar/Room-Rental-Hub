<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Search Page</title>
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
            
        
        $sql = "SELECT *FROM owner_table";
        //echo $sql;
        
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) { 
          
          $PerCode = $_POST["OwnerCode"];
          while($data = $result->fetch_assoc()) {

              $img = $data["Building_img"];

              if($data["OwnerCode"] == $PerCode){

                echo "<div class='py-20 flex flex-col items-center justify-center``>";
                echo "<a href='PerRoomDetail.php'><img src='/room_rental_hub/images/postUploads/$img' class='w-[40vw] px-10 py-10 h-[40vh]'></a>";
                echo "</div>";
                echo "<div class='flex flex-col justify-center items-center'>";
                echo "Owner Name - ".$data["OwnerName"]."<br>";
                echo "Owner Code - ".$data["OwnerCode"]."<br>";
                echo "Location - ".$data["Location"]."<br>";
                echo "Contact Number - ".$data["ContactNumber"]."<br>";
                echo "</div><hr> <br><br>";                
              }
            } 
        }
        mysqli_close($conn);
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
            
        $sql = "SELECT *FROM room_details WHERE Booking = ''";
        //echo $sql;
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) { 
          echo "<center><b class='font-2xl'>Rooms in this Building </b><center><br><br>";
          $PerCode = $_POST["OwnerCode"];
          while($data = $result->fetch_assoc()) { 
              $img = $data["RoomImg"];
              $OwnerCode = $data["OwnerCode"];
              $RoomNumber = $data["RoomNumber"];
              $RoomCharge = $data["RoomCharge"];
              
                if($data["OwnerCode"]== $PerCode){
                  echo "<form action='PerRoom.php' method='post'>";
                  echo "<input readonly name='Img' value='$img' class='outline-none border-none text-white'>";
                  echo "<input readonly name='OwnerCode' value='$OwnerCode' class='outline-none border-none text-white'>";
                  echo "<input readonly name='RoomNumber' value='$RoomNumber' class='outline-none border-none text-white'>";
                  echo "<input readonly name='RoomCharge' value='$RoomCharge' class='outline-none border-none text-white'>";
                  echo "<div class='py-20 flex flex-col items-center justify-center'>";
                  echo "<button><img src='/room_rental_hub/images/postUploads/$img' class='w-[80vw] px-10 py-10 h-[70vh]'></button>";
                  echo "Owner Code = ".$data["OwnerCode"].", ";
                  echo "Room Charge = ".$data["RoomCharge"];
                  echo "</form>";
                  echo "<hr></div> <br><br>";                
                }
            } 
        }
        mysqli_close($conn);
    ?>

    <br><br><br><br><br>
    <?php include "footer.php"; ?>
</body>
</html>