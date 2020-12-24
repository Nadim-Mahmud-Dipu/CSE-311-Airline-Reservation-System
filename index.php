<?php


$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "airline-database";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if (!$conn) {
  die('Connect Error: ' . mysqli_connect_errno());
}
echo "Database connected xyz.";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet"
    href="http://localhost/CSE-311-Airline-Reservation-System/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
</head>

<body>
  <h1>Hello World</h1>
  <p>Let's begin</p>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Agent Id</th>
        <th scope="col">Agent Name</th>
        <th scope="col">Agent Details</th>
      </tr>
    </thead>
    <tbody>

      <?php 

  $sql = "SELECT * FROM booking_agents";
  $result = $conn->query($sql);
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>{$row['agent_id']}</td>
    <td>{$row['agent_name']}</td>
    <td>{$row['agent_details']}</td>
    </tr>
  ";
  }

  ?>


    </tbody>
  </table>

  <script src="http://localhost/CSE-311-Airline-Reservation-System/bootstrap-5.0.0-beta1-dist/js/"></script>
</body>

</html>