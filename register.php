

<!-- https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database -->


<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="post" action="register.php">

        <?php include('errors.php') ?>

        <div class="input-group">
            <label> Username </label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>

        <div class="input-group">
            <label> Email </label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="input-group">
            <label> Password </label>
            <input type="password" name="password_1">
        </div>

        <div class="input-group">
            <label> Confirm Password </label>
            <input type="password" name="password_2">
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>

    <p>
        Already have an account? <a href="login.php">Sign in</a>
    </p>

    </form>

</body>

</html>