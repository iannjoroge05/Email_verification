<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
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
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            border-radius: 8px;
            box-shadow: 0 3px 12px #0009;
            background-color: cornsilk;
            margin: 120px auto;
            padding: 12px 16px;
            max-width: 800px;
        }
        .form input{
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    .form button {
            background-color: olivedrab;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
    }
    form button:hover {
            background-color: #45a049;
        }
        .logout-form{
            position: fixed;
            top: 10px;
            left: 10px;
            border-radius: 50%;
            padding: 10px 15px;
            background-color: #ffffff;
            color: #333;
        }
        #logout-button:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    
    <form method="post" action="process.php">
    <h2>User Registration Form</h2>
        <input type="phone_number" placeholder="Phone_number" name="phone_number" required>
        <br></br>
        <input type="Email" placeholder="Email" name="Email" required>
        <br></br>
        <input type="address" placeholder="address" name="address" required>
        <br></br>
        <input type="registration number" placeholder="registration number" name="registration number" required>
        <br></br>
        <button type="submit">Submit</button>
        <br></br>
    </form>
        <form class="logout-form" action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
    </div>
 

    
    <form method="get" action="search.php">
    <h2>Search User Details</h2>
        <label for="search_registration_number">Search by Registration Number:</label>
        <input type="text" name="search_registration_number" required>
        <input type="submit" value="Search">
    </form>
</body>
</html>
