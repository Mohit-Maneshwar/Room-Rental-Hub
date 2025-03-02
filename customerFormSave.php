<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title></title>
</head>
<body>
  
      <?php include "Cheader.php";
    echo"<br><br><br><br>";
    echo"<center>Thanks For Booked Room</center>";
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
        
        $CName = $_POST['CName'];
        $Contact = $_POST['contact'];
        $Add = $_POST['add'];
        $Advance = $_POST['advance'];
        
        
        $Ocode = $_POST["OwnerCode"];
        $RoomNumber = $_POST["RoomNumber"];
        $RoomCharge = $_POST["RoomCharge"];
        $Img = $_POST["Img"];
        $Date = $_POST["Date"];
        
        /*
        
        $CName = "Anurag";
        $Contact = '8823037072';
        $Add = 'Balaghat';
        $Advance = '4000';
        // Data form the PerRoom.php file
        $Ocode = 'OC105';
        $RoomNumber = '2';
        $RoomCharge = '13000';
        */
        $sql = "INSERT INTO customer_table (CustomerName,Contact,CustomerAdd,PaymentStatus) VALUES('$CName','$Contact','$Add','')";
        
        $sql2 = "UPDATE room_details SET Booking = 'Book' WHERE OwnerCode = '$Ocode' AND RoomImg = '$Img'";
        mysqli_query($conn,$sql2);
        
        
        
        if(mysqli_query($conn,$sql)){
          echo "";
          $sql1 = "INSERT INTO booking_table (Owner_id,RoomNumber,RoomCharge,Advance,Booking_Date)  VALUES('$Ocode','$RoomNumber','$RoomCharge','$Advance','$Date')";

          
          if(mysqli_query($conn,$sql1)){
           // $sql3 = "UPDATE booking_table SET Booking_Date = '$Date' WHERE (Owner_id = '$Ocode' AND RoomNumber = '$RoomNumber' AND RoomCharge = '$RoomCharge' AND Advance = '$Advance')";
           // mysqli_query($conn,$sql3);
           echo "";
          }
        }
        mysqli_close($conn);
        //include "footer.php";
    ?>
  <?php
  echo"<br><br><br><br><br><br>";
  include "footer.php"; ?>
 </body>
 </html>