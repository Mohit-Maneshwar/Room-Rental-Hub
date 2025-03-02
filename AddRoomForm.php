<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Add Room</title>
</head>
<body>
<?php include "Oheader.php"; ?>

    <main class="min-h-screen flex items-center justify-center">

      <div class="flex items-center justify-center h-full w-full">
        <div class="w-[70vw] bg-white p-10 rounded-3xl shadow-xl">
        <h2 class="text-3xl font-extrabold text-gray-800 text-center mb-10 p-10">Add Room Details</h2>
            <form action="AddRoom.php" method="POST" class="space-y-10">
              <div>
                <LABEL class="block text-gray-700 font-semibold mb-5">Owner Code :</LABEL>
                <input type="text" name="Ocode" placeholder="Enter Owner Code" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
              </div>
              <div>
                <LABEL class="block text-gray-700 font-semibold mb-5">Room Number :</LABEL>
                <input type="text" name="Rnum" placeholder="Enter Room Number" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
              </div>
              <div>
                <LABEL class="block text-gray-700 font-semibold mb-5">Room Size :</LABEL>
                <input type="text" name="Rsize" placeholder="Enter Room Size" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
              </div>
              <div>
                <LABEL class="block text-gray-700 font-semibold mb-5">Room Charges :</LABEL>
                <input type="text" name="Rcharge" placeholder="Enter Room Charges" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
              </div>
              <div>
                <LABEL class="block text-gray-700 font-semibold mb-5">Room Image :</LABEL>
                <input type="text" name="Rimg" placeholder="Put There Room Image link" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
              </div>
              <div class="text-center">
                <button type="submit" 
                        class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-3 rounded-lg shadow-lg font-semibold hover:from-indigo-600 hover:to-purple-600 transition duration-300 ease-in-out">
                        Add Room
                </button>
              </div>
            </form>
        </div>
      </div>    

    </main>

    <?php include "footer.php"; ?>
</body>
</html>