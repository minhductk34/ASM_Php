<!doctype html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style_login.css" rel="stylesheet">
</head>

<body>
    <div class="login">
        <form action="./home.php" method="post" class="form">
            <img src="./ASSETS/Logo/LOGIN.png" alt="logo">
            <h2><b>LOGIN </b></h2>
            <div class="input-group">
                <input type="text" name="username" id="username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <div style="text-align: center;"><button onclick="history.back(-1)" class="submit">BACK</button>
                <input type="submit" value="login" class="submit">
            </div> <br>
            <div style="text-align: center;">
                <p>Don't have an Account ? <a href="./Sign up.php">Sign Up</a></p>
            </div>
        </form>
    </div>

</body>

</html>