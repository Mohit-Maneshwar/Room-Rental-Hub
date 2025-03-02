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
            
        $sql = "SELECT *FROM owner_table";
        //echo $sql;
        $result = $conn->query($sql); 
        

          echo "<div class='flex justify-center gap-40'>";
          echo "<div>";
          echo "<form action='PerOwner.php' method='POST'>";
          echo "<select name='Oname' class='bg-blue-500 rounded-md py-2 px-5'>";
          echo "<option>Select Owner";
          echo "</option>";
          echo "<br><br>";
          while($ownerName = $result->fetch_assoc()) {
            $Oname = $ownerName["OwnerName"];
            
          echo "<option name='$Oname' class='bg-blue-500 rounded-md py-2 px-5'>".$Oname;
          echo "</option bg-blue-500 rounded-md py-2 px-5'>";
          }
          echo "</select>";
          echo "<button class='bg-blue-500 rounded-md py-2 px-5'> Go </button>";
          echo "</form>";
          echo "</div>";
          echo "<div>";
          echo "<button class='bg-blue-500 rounded-md py-2 px-5'> Room </button>";
          echo "</div>";
          echo "</div>";
  
        
        mysqli_close($conn);
        echo "<br><br>"
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

        $perOwner = $_POST["Oname"];
            
        $sql = "SELECT *FROM owner_table";
        //echo $sql;
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) { 

          while($data = $result->fetch_assoc()) { 
              $img = $data["Building_img"];
               
              if($data["OwnerName"] == $perOwner){

                  echo "<div class='py-20 flex flex-col items-center justify-center'>";
                  echo  "<img src='/room_rental_hub/images/postUploads/$img' class='w-[80vw] px-10 py-10 h-[70vh]'>";
                  echo $data["OwnerName"]." ";
                  echo $data["ContactNumber"];
                  echo "<hr></div> <br><br>";                
                }
            } 
        }
        mysqli_close($conn);
    ?> 
<?php include "footer.php"; ?>

</body>
</html>