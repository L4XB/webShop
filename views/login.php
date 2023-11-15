<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--Style-->
    <link rel="stylesheet" href="../style/login.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon-192x192.ico">

    <!--Scripts-->
    <script src="../scripts/login.js"></script>
</head>

<body>
    <!--Box where left and right box take place-->
    <div class="container-body">
        <!--left Side-->
        <div id="container-left-side">
            <div id="container-left-side-items">
                <form id="loginForm" action="../services/userProvider/login.php" method="POST">
                    <h2>Login</h2>
                    <label for="Email">E-mail*</label>
                    <input placeholder="Geben Sie Ihre E-mail Adresse hier ein" type="text" id="username"
                        name="username" required>
                    <label for="Password">Password*</label>
                    <input placeholder="Geben Sie Ihr Passwort hier ein" type="password" id="password" name="password"
                        required>
                    <br>
                    <br>
                    <button type="submit">Login</button>
                    <br>

                </form>

                <button>SignUp</button>


            </div>
        </div>
        <!--right Side-->
        <div id="container-right-side">
            <img height="550px" src="../assets/images/inf-logo.png" alt="">
        </div>

    </div>
</body>

</html>