<?php
$con=mysqli_connect("sql113.byethost12.com","b12_15026823","letfuck6","b12_15026823_baza");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Soba");

while($row = mysqli_fetch_array($result)) {
  echo $row['nazivSoba'] . " " . $row['uslugaSoba'] . " " . $row['cijenaSoba'] . " " . $row['idSoba'];
  echo "<br>";
}

mysqli_close($con);
?>