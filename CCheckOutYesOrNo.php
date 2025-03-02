<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut Yes Or No</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <?php include "Cheader.php"; ?>
    <br><br><br>
    <?php

    
    $OId = $_POST["OId"];
    $RoomNumber = $_POST["RoomNumber"];
    $RoomCharge = $_POST["RoomCharge"];

    echo"<div class='flex items-center gap-4'>";
    
    echo"<div>";
    echo"<form action='CCheckOutYes.php' method='POST'>";
    echo "<input readonly name='OId' value='$OId' class='outline-none text-transparent border-none text-white'>";
    echo "<input readonly name='RoomNumber' value='$RoomNumber' class='outline-none text-transparent border-none text-white'>";
    echo "<input readonly name='RoomCharge' value='$RoomCharge' class='outline-none text-transparent border-none text-white'>";
    echo"<button>Yes</button>";
    echo"</form>";
    echo"</div>";

    echo"<div>";
    echo"<form action='CCheckOutNo.php' method='POST'>";
    echo"<button>No</button>";
    echo"</form>";
    echo"</div>";

    echo"</div>";
    

    // echo"<div>";
    // echo"<div class='flex gap-[2rem] justify-center items-center'>";
    // echo"<form>";
    // echo "<form action='CheckOutYes.php' method='POST'>";
    // echo"</form>";
    // echo"</div>";
    // echo"</div>";
    // echo "<button>No</button>";
    // echo"</form>";
    // echo"</div>";
    ?>
    <br><br><br>
    <?php include "footer.php"; ?>
</body>
</html>