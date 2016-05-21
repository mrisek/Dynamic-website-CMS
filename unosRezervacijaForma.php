<?php
$con=mysqli_connect("localhost","mrisek_000002","313007875","mrisek_000002");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$imeKlijent = mysqli_real_escape_string($con, $_POST['imeKlijent']);
$prezimeKlijent = mysqli_real_escape_string($con, $_POST['prezimeKlijent']);
$drzavaKlijent = mysqli_real_escape_string($con, $_POST['drzavaKlijent']);
$emailKlijent = mysqli_real_escape_string($con, $_POST['emailKlijent']);
$sobaKlijent = mysqli_real_escape_string($con, $_POST['sobaKlijent']);
$prehranaKlijent = mysqli_real_escape_string($con, $_POST['prehranaKlijent']);
$datumKlijent = mysqli_real_escape_string($con, $_POST['datumKlijent']);


mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER_SET 'utf8_unicode_ci'");


//preskacem ID prilikom unosa u bazu - auto increment
$sql="INSERT INTO Klijent (imeKlijent, prezimeKlijent, drzavaKlijent, emailKlijent, sobaKlijent, prehranaKlijent, datumKlijent)
VALUES ('$imeKlijent', '$prezimeKlijent', '$drzavaKlijent', '$emailKlijent', '$sobaKlijent', '$prehranaKlijent', '$datumKlijent')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

echo "Rezervacija je poslana!";

mysqli_close($con);

echo "<br><br>";

echo "<a href='http://iws.mev.hr/mrisek/rezervacija.php'>Povratak na prethodnu stranicu</a>";
?>