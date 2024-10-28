<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body class="flex justify-center items-center min-h-screen bg-white text-black"> 
        <div class="bg-gray-200 flex flex-col justify-center items-center p-10 rounded-2xl shadow-2xl"> 
            <h1 class="login label text-2xl font-bold mb-4 text-center w-full">Register</h1> 
            <form action="process_login.php" method="POST" class="w-full">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>

</html>
