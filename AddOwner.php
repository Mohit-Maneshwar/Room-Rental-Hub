<?php include "AddOwnerForm.php"; ?>

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

      $Ocode = $_POST['Ocode'];
      $Oname = $_POST['Oname'];
      $Bimg = $_POST['Bimg'];
      $NRooms = $_POST['NRooms'];
      $loc = $_POST['loc'];
      $Cnum = $_POST['Cnum'];


      $sql = "INSERT INTO owner_table VALUES('$Ocode','$Oname',$NRooms,'$Bimg','$loc','$Cnum')";

      if(mysqli_query($conn,$sql)){
        echo "";
      }

      mysqli_close($conn);
  ?>