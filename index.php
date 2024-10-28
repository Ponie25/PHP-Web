<!DOCTYPE html>
<html>
    <head>
        <title>Student Social Media</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body>
        <?php include 'PHP/config/db.php' ?>
        <header class="flex items-center justify-between bg-white text-black p-4">
            <!-- Logo -->
            <div class="logo">
                <img src="images/logo.jpeg" alt="Student Social Media" class="w-16 h-12 rounded-lg">
            </div>

            <!-- Menu -->
            <div class="mid flex item-center justify-center flex-grow"> 
                
                <a href="/home" class="hover:text-yellow-900 px-3 py-2 rounded">
                    <i class="fa-solid fa-igloo ml-4"></i>
                    Home
                </a>

                <a href="/about" class="hover:text-yellow-900 px-3 py-2 rounded">
                    <i class="fa-regular fa-address-card ml-4"></i>
                    About
                </a>

                
                <a href="/my_question" class="hover:text-yellow-900 px-3 py-2 rounded">
                    <i class="fa-solid fa-user-tie"></i>
                    My Questions
                </a>
            </div>
            
            <!-- Login/Register -->
            <div class="login flex space-x-4"> 
                <a href="PHP/login.php" class="hover:text-yellow-900 px-3 py-2 rounded">Login</a>
                <a href="PHP/register.php" class="hover:text-yellow-900 px-3 py-2 rounded">Register</a>
            </div>
        </header>

        <!-- BODY -->
        <main class="p-4">
            <div class="flex items-center justify-between mb-4 w-full"> 
                <div class="text-2xl font-bold">Newsfeed</div>
                <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-blue-600" type="button">Upload</button>
            </div>

            <!-- Post Section -->
            <section class="mt-4">
            <div class="bg-white shadow-lg rounded-lg p-4 mb-4 w-full">
                <!-- Content -->
                <h2 class="text-xl font-bold">Post Title 1</h2>
                <p>This is the content of the first post. It can include details, thoughts, or questions.</p>
                <p class="text-gray-500 text-sm">Posted by User1 on 2024-10-11</p>

                <!-- Like, command, bookmark -->
                <div class="flex items-center mt-2 w-full"> 
                    <i class="fa-regular fa-heart"></i>
                    <span class="ml-1.5 text-base">10</span>
                
                    <i class="fa-regular fa-comment ml-4" aria-hidden="true"></i>
                    <span class="ml-1.5 text-base">5</span> 

                    <i class="fa-regular fa-bookmark ml-4" aria-hidden="true"></i>
                    <span class="ml-1.5 text-base">2</span> 
                </div>
            </div>


                <div class="bg-white shadow-lg rounded-lg p-4 mb-4 w-full">
                    <h2 class="text-xl font-bold">Post Title 2</h2>
                    <p>This is the content of the second post. Share your thoughts or questions here!</p>
                    <p class="text-gray-500 text-sm">Posted by User2 on 2024-10-10</p>
                    <!-- Like, command, bookmark -->
                <div class="flex items-center mt-2 w-full"> 
                    <i class="fa-regular fa-heart"></i>
                    <span class="ml-1.5 text-base">10</span>
                
                    <i class="fa-regular fa-comment ml-4" aria-hidden="true"></i>
                    <span class="ml-1.5 text-base">5</span> 

                    <i class="fa-regular fa-bookmark ml-4" aria-hidden="true"></i>
                    <span class="ml-1.5 text-base">2</span> 
                </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-4 mb-4 w-full">
                    <h2 class="text-xl font-bold">Post Title 3</h2>
                    <p>This is the content of the third post. Engage with your fellow students!</p>
                    <p class="text-gray-500 text-sm">Posted by User3 on 2024-10-09</p>
                    <!-- Like, command, bookmark -->
                <div class="flex items-center mt-2 w-full"> 
                    <i class="fa-regular fa-heart"></i>
                    <span class="ml-1.5 text-base">10</span>
                
                    <i class="fa-regular fa-comment ml-4" aria-hidden="true"></i>
                    <span class="ml-1.5 text-base">5</span> 

                    <i class="fa-regular fa-bookmark ml-4" aria-hidden="true"></i>
                    <span class="ml-1.5 text-base">2</span> 
                </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-white text-black py-4">
            <div class="container mx-auto text-center">
                <p>© 2024 Student Social Media. All rights reserved.</p>
                <p>Dev : Thanh</p>
                <div class="flex space-x-4 justify-center items-center mt-2">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-github"></i>
                    <i class="fa-brands fa-telegram"></i>
                    
                </div>
            </div>
        </footer>
    </body>

</html>