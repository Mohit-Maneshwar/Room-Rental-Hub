
    <?php include "AddRoomForm.php"; ?>

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
        $Rnum = $_POST['Rnum'];
        $Rsize = $_POST['Rsize'];
        $Rcharge = $_POST['Rcharge'];
        $Rimg = $_POST['Rimg'];


        $sql = "INSERT INTO room_details VALUES('$Ocode',$Rnum,$Rsize,$Rcharge,'$Rimg','')";
        
        if(mysqli_query($conn,$sql)){
          echo "";
        };

        mysqli_close($conn);
    ?>