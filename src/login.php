<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h1>User Login</h1>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="user_email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="user_password" required><br><br>
        
        <input type="submit" name="login" value="Login">
    </form>
    
    <p>Don't have an account? <a href="registration.php">Register here</a></p>
</body>
</html>