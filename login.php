<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login|BeautySome</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login">
    <div class="login-cover">
<h1 class="login-title">Login to BeautySome</h1>
    <form class="login-form" method="POST" action="cek-login.php">
                <div class="login-input">
                    <input type="text" id="username" name="userName" placeholder="username"
                    class="login-field">
                </div>
                <div class="login-input">
                    <input type="password" id="password" name="userPass" placeholder="password"
                    class="login-field">
                </div>
                <div class="login-button">
                    <input type="submit" id="submit" class="button"
                    value="Login" onclick="pindah()">
                </div>
    </form>
    <div class="login-form">
                <div class="login-button">
                    <button onclick="register()" class="button">
                        Don't have an account? Register
                    </button>
                </div>
            </div>
    </div>
    </div>

    <script>
        function register() {
            window.location = "register.php";
        }

        function pindah(){
            window.location = "tambah-review.php";
        }
    </script> 
</body>
</html>