<!-- https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database -->


<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="http://localhost/CSE-311-Airline-Reservation-System/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>

<style> 
    body {
        background: powderblue;
    }
</style>

    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-inverse">
    <ul class="navbar-nav ml-aut">
      <li class="nav-item active">
        <a class="nav-link text-light" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="register.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="flight_costs.php">Flight Costs</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link text-light" href="#">Link</a>
      </li>
      <li class="nav-item text-light">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </nav>
    </nav>
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