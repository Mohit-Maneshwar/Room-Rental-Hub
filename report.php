<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
            .tab {
                display: inline-block;
                margin-right: 10px;
                padding: 10px;
                background-color: #f1f1f1;
                cursor: pointer;
            }
            .active-tab {
                background-color: #ddd;
            }
            .content {
                display: none;
            }
            .active-content {
                display: block;
            }
    </style>
</head>
<body>
    <?php include "Oheader.php"; ?>
            <br><br>
            <div class="flex justify-center items-center">
                <div class="tab" onclick="showContent('displayAll')">All Booked Room</div>
                <div class="tab" onclick="showContent('ParticularOwner')">Perticular Owner</div>
                <div class="tab" onclick="showContent('ParticularClient')">Perticular Client</div>
            </div>

        <div id="displayAll" class="content">
            <?php include 'displayAllBookedRoom.php'; ?>
        </div>
        <div id="ParticularOwner" class="content">
            <br>
            <form class='flex justify-center items-center' action="diplayPerticularOwnerBookedRoom.php" method="post">
                <label for="id">Enter Owner Code:</label>
                <input type="text" id="id" name="OwnerCode" placeholder=" Enter Owner Code">
                <input type="submit" value="Display">
            </form>
        </div>
        <div id="ParticularClient" class="content">
            <br>
            <form class='flex justify-center items-center' action="diplayPerticularClientBookedRoom.php" method="post">
                <label for="id">Enter Client Id:</label>
                <input type="text" id="id" name="Ccode" placeholder="  Enter Client Id">
                <input type="submit" value="Display">
            </form>
        </div>
       

        <script>
            function showContent(tabId) {
                var contents = document.getElementsByClassName('content');
                for (var i = 0; i < contents.length; i++) {
                    contents[i].classList.remove('active-content');
                }
                document.getElementById(tabId).classList.add('active-content');

                var tabs = document.getElementsByClassName('tab');
                for (var i = 0; i < tabs.length; i++) {
                    tabs[i].classList.remove('active-tab');
                }
                event.target.classList.add('active-tab');
            } 

            function exitApplication() {
                window.close();
            }
        </script>
    <br><br><br>
    <?php include "footer.php"; ?>
</body>
</html>