<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register|BeautySome</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="register">
    <div class="register-cover">
<h1 class="register-title">Register to BeautySome</h1>
<form action="proses-register.php" method="POST" class="register-form">
                <div class="register-input">
                    <input type="text" id="name" name="name" placeholder="name"
                    class="register-field">
                </div>
                <div class="register-input">
                    <input type="text" id="email" name="userEmail" placeholder="email"
                    class="register-field">
                </div>
                <div class="register-input">
                    <input type="text" id="username" name="userName" placeholder="username"
                    class="register-field">    
                </div>
                <div class="register-input">
                    <input type="password" id="password" name="userPass" placeholder="password"
                    class="register-field">
                </div>
                <div class="register-input">
                    <input type="password" id="confirm-password" value placeholder="confirm password"
                    class="register-field">
                </div>
                <div class="register-button">
                    <input type="submit" id="submit" class="button" name="register"
                    value="Register">
                </div>
            </form>
            <div class="register-form">
                <div class="register-button">
                    <button onclick="login()" class="button">
                        Already have an account? Login
                    </button>
                </div>
            </div>
        </div>
        </div>

        <script>
        function login(){
            window.location = "login.php";
        }
    </script> 
</body>
</html>