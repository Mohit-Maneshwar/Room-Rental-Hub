<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <title>Add Owner</title>
</head>

<body>
  
  <?php include "Cheader.php"; ?>
  <br><br><br>
  
  <?php

echo"<main class=min-h-screen flex items-center justify-center'>";
$Date = date('Y-m-d');

echo'<div class="flex items-center justify-center h-full w-full">';
echo'<div class="w-[70vw] bg-white p-10 rounded-3xl shadow-xl">';
echo'<h2 class="text-3xl font-extrabold text-gray-800 text-center mb-10 p-10">Customer Details</h2>';
echo'<form action="customerFormSave.php" method="POST" class="space-y-10">';
echo "<input readonly name='Date' value='$Date' class='outline-none text-transparent border-none text-white'>";
          echo'<div>';
            echo'<label for="CName" class="block text-gray-700 font-semibold mb-5">Customer Name</label>';
            echo'<input type="text" name="CName" id="CName" placeholder="Enter Customer Name"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">';
          echo'</div>
          <div>
            <label for="contact" class="block text-gray-700 font-semibold mb-5">Contact Number</label>
            <input type="text" name="contact" id="contact" placeholder="Enter Contact number"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
          </div>';
          echo'<div>
            <label for="add" class="block text-gray-700 font-semibold mb-5">Address</label>
            <input type="text" name="add" id="add" placeholder="Enter Address"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
          </div>
          <div>
            <label for="advance" class="block text-gray-700 font-semibold mb-5">Advance</label>
            <input type="text" name="advance" id="advance" placeholder="Enter Advance Money"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
          </div>';

          $Ocode = $_POST["OwnerCode"];
          $Img = $_POST["Img"];
          $RoomNumber = $_POST["RoomNumber"];
          $RoomCharge = $_POST["RoomCharge"];
          echo "<input readonly name='OwnerCode' value='$Ocode' class='outline-none text-transparent border-none text-white'>";
          echo "<input readonly name='Img' value='$Img' class='outline-none text-transparent border-none text-white'>";
          echo "<input readonly name='RoomNumber' value='$RoomNumber' class='outline-none text-transparent border-none text-white'>";
          echo "<input readonly name='RoomCharge' value='$RoomCharge' class='outline-none text-transparent border-none text-white'>";
          echo'<div class="text-center">
            <button type="submit"
              class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-3 rounded-lg shadow-lg font-semibold hover:from-indigo-600 hover:to-purple-600 transition duration-300 ease-in-out">
              want to book
            </button>
          </div>';
        echo'</form>';
      echo'</div>';
    echo'</div>';
  echo'</main>';


  ?>

  <?php include "footer.php"; ?>
</body>

</html>