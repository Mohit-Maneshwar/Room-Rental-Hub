<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Add Owner</title>
</head>
<body>
    <?php include "Oheader.php"; ?>

    <main class="min-h-screen flex items-center justify-center">
 
    <div class="flex items-center justify-center h-full w-full">
        <div class="w-[70vw] bg-white p-10 rounded-3xl shadow-xl">
            <h2 class="text-3xl font-extrabold text-gray-800 text-center mb-10 p-10">Add Owner Details</h2>
            <form action="AddOwner.php" method="POST" class="space-y-10">
                <div>
                    <label for="Ocode" class="block text-gray-700 font-semibold mb-5">Owner Code:</label>
                    <input type="text" name="Ocode" id="Ocode" placeholder="Enter Owner Code" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
                </div>
                <div>
                    <label for="Oname" class="block text-gray-700 font-semibold mb-5">Owner Name:</label>
                    <input type="text" name="Oname" id="Oname" placeholder="Enter Owner Name" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
                </div>
                <div>
                    <label for="Bimg" class="block text-gray-700 font-semibold mb-5">Building Image:</label>
                    <input type="text" name="Bimg" id="Bimg" placeholder="Enter Image URL" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
                </div>
                <div>
                    <label for="NRooms" class="block text-gray-700 font-semibold mb-5">No. of Rooms:</label>
                    <input type="text" name="NRooms" id="NRooms" placeholder="Enter Number of Rooms" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
                </div>
                <div>
                    <label for="loc" class="block text-gray-700 font-semibold mb-5">Location:</label>
                    <input type="text" name="loc" id="loc" placeholder="Enter Location" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
                </div>
                <div>
                    <label for="Cnum" class="block text-gray-700 font-semibold mb-5">Contact Number:</label>
                    <input type="text" name="Cnum" id="Cnum" placeholder="Enter Contact Number" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm outline-none">
                </div>
                <div class="text-center">
                    <button type="submit" 
                        class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-3 rounded-lg shadow-lg font-semibold hover:from-indigo-600 hover:to-purple-600 transition duration-300 ease-in-out">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
        
    </main>
    <?php include "footer.php"; ?>
</body>
</html>