<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
   <style>
    #form form{
    display : grid;
    grid-template-columns: auto 1fr;
    gap : 8px;
}
.wrapper {
    display: grid;
    place-items: center;
}
body{
    background-color: #ccc;
}
#form {
    background-color: cornsilk;
    margin: 120px auto;
    padding: 12px 16px;
    max-width: 800px;
    border-radius: 8px;
    box-shadow: 0 3px 12px #0009;
}
    .login-form input{
        width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
    }
    .login-form button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        } 
        .login-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div id="form">
    <h2>Login</h2>
    <form class="login-form" action="login.php" method="post">
        <input type="text" placeholder="Username" name="username" required>
        <br>
        <input type="password" placeholder="Password" name="password" required>
        <br>
        <button type="submit">Login</button>
        <br>
        <a href="signup.php">
        <button type="button">sign up</button>
        </a>
        <br>
        <a href="forgot_password.php">forgot password</a>
    </form>
    </div>
</div>

</body>
</html>
