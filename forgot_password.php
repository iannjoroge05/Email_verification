<!DOCTYPE html>
<html>
<head>
    <title>forgot_password</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #ccc;
            
        }
        form {
            text-align: center;
            background-color: blueviolet;
            border-radius: 4px;
            padding: 10px 15px;
        }
        form button{
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="post" action="reset_password.php">
        <h1>Forgot Password</h1>
        <br><br>
        <label for="email">Enter Your Email</label>
        <input type="email" name="email" id="email">
        <br><br>
        <button>send</button>
    </form>
</body>
</html>
