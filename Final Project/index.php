<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale-1.0">
        <link rel="stylesheet" href="loginstyle.css">
        <title>Recipe Book</title>
    </head>
    <body>
         <div class="container">
        <div class="login-box">
           
            <h2>Login</h2>
            <form method="post" action="control.php">
                <div class="input-box">
                <input type="text" name="username" id="username" required>
                <label>Username</label>
           </div>
                <div class="input-box">
                <input type="password" name="password" id="password" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="signup-link">
                    <p>Don't have an account?</p><br>
                    <a href="register.php">Signup</a>
                </div>
            </form>
        </div>
        </div>
        <img src="Images\lovepik-girl-cooking-png-image_401764830_wh1200-removebg-preview.png" alt="Woman cooking">
    </body>
</html>