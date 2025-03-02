<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="profile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <?php include "Oheader.php"; ?>
        <br><br><br><br><br>

        <section class='flex flex-col gap-[6rem]'>
            <section>
                <div class='flex flex-col gap-[2rem]'>
                    <h1 class='w-full text-center text-[7rem] uppercase'>Rent out your room</h1>
                    <h3 class='w-full text-center text-[3rem]'>Rent Out Your Room with Ease!</h3>
                    <div class='flex justify-center items-center'>
                        <p class='w-[80%] text-center text-[1.3rem]'>List your space on Room Rental Hub and connect with verified tenants quickly. Enjoy secure bookings, hassle-free management, and maximize your rental income effortlessly. Start renting today! 🚀🏡</p>
                    </div>
                </div>
            </section>
    <hr>
            <section class='team flex flex-col gap-[10rem]'>
                <div class='flex items-center justify-around w-full'>
                    <h1 class='text-8xl font-thin'>TEAM</h1>
                    <p class='w-[50%] text-xl font-sans opacity-75'>We have assembled a team of talented and experienced professionals dedicated to helping you find a room easily and also to rent your room.</p>
                </div>

                <div class='members flex w-full justify-center items-center flex-wrap p-2 gap-9'>
                    <div class='member w-1/5 flex flex-col gap-[1rem]'>
                        <h2 class='text-2xl'>Mohit Maneshwar</h2>
                        <img class='w-full object-cover aspect-1/1 rounded' src="./images/mohitG.jpg" alt="">
                        <p class='font-2xl font-bold p-[1rem]'>Front-End Developer</p>
                        <p class='font-xl opacity-60'>Leading our creative vision with strategic insights and innovative ideas.</p>
                    </div>
                    <div class='member w-1/5 flex flex-col gap-[1rem]'>
                        <h2 class='text-2xl'>Om Bisen</h2>
                        <img class='w-full object-cover rounded aspect-1/1' src="./images/om.jpg" alt="">
                        <p class='font-2xl font-bold p-[1rem]'>API Developer</p>
                        <p class='font-xl opacity-60'>Leading our creative vision with strategic insights and innovative ideas.</p>
                    </div>
                    <div class='member w-1/5 flex flex-col gap-[1rem]'>
                        <h2 class='text-2xl'>Mohit Maneshwar</h2>
                        <img class='w-full object-cover aspect-1/1 rounded' src="./images/mohitG.jpg" alt="">
                        <p class='font-2xl font-bold p-[1rem]'>Front-End Developer</p>
                        <p class='font-xl opacity-60'>Leading our creative vision with strategic insights and innovative ideas.</p>
                    </div>
                    <div class='member w-1/5 flex flex-col gap-[1rem]'>
                        <h2 class='text-2xl'>Mohit Maneshwar</h2>
                        <img class='w-full object-cover aspect-1/1 rounded' src="./images/mohitG.jpg" alt="">
                        <p class='font-2xl font-bold p-[1rem]'>Front-End Developer</p>
                        <p class='font-xl opacity-60'>Leading our creative vision with strategic insights and innovative ideas.</p>
                    </div>
                </div>
            </section>
            <hr>

            <section class="features">
                <div class="feature">
                    <img src="./images/roomimagee2.jpg" alt="">
                    <h2 class='font-bold text-2xl'>List Your Room</h2>
                    <p>Rent out your space securely and find the perfect tenant.</p>
                </div>
                <div class="feature">
                    <img src="./images/roomimg.webp" alt="">
                    <h2 class='font-bold text-2xl'>Search Rentals</h2>
                    <p>Explore various rental options with ease.</p>
                </div>
                <div class="feature">
                    <img src="./images/verifyOwner.webp" alt="">
                    <h2 class='font-bold text-2xl'>Verified Owners</h2>
                    <p>Rent with confidence from verified landlords.</p>
                </div>
            </section>


        <div class="contact-form">
                <h1 class='text-3xl p-8 '><b>Let's Connect With Us</b></h1>
                <br>
              <form action="" id="contact-form">

                <div class="input-box">
                  <input type="text" required="true" name="full-name" />
                  <span>Full Name</span>
                </div>

                <div class="input-box">
                  <input type="email" required="true" name="email" />
                  <span>Email</span>
                </div>

                <div class="input-box">
                  <textarea required="true" name="message"></textarea>
                  <span>Type your Message...</span>
                </div>

                <div class="input-box">
                  <input
                    type="submit"
                    value="Send"
                    style="background-color: #28a745"
                    name="send-message"
                  />
                </div>
              </form>
            </div>
        </section>
   
    <br><br>
    <?php include "footer.php"; ?>
</body>
</html>