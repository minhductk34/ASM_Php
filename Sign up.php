<!doctype html>
<html lang="en">

<head>
    <title>SIGN UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style_login.css" rel="stylesheet">
    <style>
        .login {
            height: 139.8vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="login">
        <form action="./process_login.php" method="post" class="form" enctype="multipart/form-data">
            <img src="./ASSETS/Logo/LOGIN.png" alt="logo">
            <h2><b>SIGN UP </b></h2>
            <div class="input-group">
                <input type="text" name="username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <div class="input-group">
                <input type="password" name="confirm" id="confirm" required>
                <label for="confirm">Confirm Passwords</label>
            </div>
            <label for="level">Level</label>
            <select class="form-control" name="level">
                <option value="1">Low</option>
                <option value="2">Medium</option>
                <option value="3">High</option>
            </select> <br>
            <div> <label for="file">Your Photo</label>
                <input type="file" name="photo_user" class="form-control">
            </div> <br>
            <div><button onclick="history.back(-1)" class="submit">BACK</button>
                <input type="submit" value="SIGN UP" class="submit">
            </div> <br>
            <div>
                <p>Already have an Account ? <a href="./login.php">Log In</a></p>
            </div>
        </form>
    </div>

</body>

</html>