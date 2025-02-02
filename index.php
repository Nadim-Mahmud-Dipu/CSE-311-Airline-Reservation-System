<?php


// $serverName = "localhost";
// $userName = "root";
// $password = "";
// $dbName = "airline-database";

// $conn = mysqli_connect($serverName,$userName,$password,$dbName);

// if (!$conn) {
//   die('Connect Error: ' . mysqli_connect_errno());
// }
// echo "Database connected xyz.";

?>

<?php 
  // session_start(); 

  // if (!isset($_SESSION['username'])) {
  // 	$_SESSION['msg'] = "You must log in first";
  // 	header('location: login.php');
  // }
  // if (isset($_GET['logout'])) {
  // 	session_destroy();
  // 	unset($_SESSION['username']);
  // 	header("location: login.php");
  // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet"
    href="http://localhost/CSE-311-Airline-Reservation-System/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
</head>

<body>

  <!-- <div class="header">
    <h2>Home Page</h2>
  </div> -->

  <!-- Adding the Navigation bar -->


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


  <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
    <div class="error success">
      <h3>
        <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      </h3>
    </div>
    <?php endif ?>

  </div>
  <div class="page-body">

    <br><br><br><br>
    <h1 id = "flight-header">Flight Schedules</h1>
    </br>
    <div class="container table-01">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Flight Number</th>
            <th scope="col">Airline Code</th>
            <th scope="col">Aircraft Type</th>
            <th scope="col">Origin Airport Code</th>
            <th scope="col">Destination Airport Code</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Time</th>
          </tr>
        </thead>
        <tbody>
    </div>

    <?php 

  $db = mysqli_connect('localhost','root','','airline-database');

  $sql = "SELECT * FROM flight_schedules";
  $result = mysqli_query($db,$sql);
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>{$row['flight_number']}</td>
    <td>{$row['airline_code']}</td>
    <td>{$row['usual_aircraft_type_code']}</td>
    <td>{$row['origin_airport_code']}</td>
    <td>{$row['destination_airport_code']}</td>
    <td>{$row['departure_date_time']}</td>
    <td>{$row['arrival_date_time']}</td>
    </tr>
  ";
  }

  ?>


    </tbody>
    </table>


  </div>

  <script src="http://localhost/CSE-311-Airline-Reservation-System/bootstrap-5.0.0-beta1-dist/js/"></script>
</body>

</html>