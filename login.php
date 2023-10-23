<!-- login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="login_process.php">
        <div class="form-group">
            <label for="username">Username/Email</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="captcha">Captcha</label>
            <input type="text" class="form-control" name="captcha" id="captcha" required>
            <img src="captcha.php" alt="Captcha Image">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</body>
</html>
