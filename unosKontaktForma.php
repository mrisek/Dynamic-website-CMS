<?php
$con=mysqli_connect("localhost","mrisek_000002","313007875","mrisek_000002");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$imeKontakt = mysqli_real_escape_string($con, $_POST['imeKontakt']);
$prezimeKontakt = mysqli_real_escape_string($con, $_POST['prezimeKontakt']);
$emailKontakt = mysqli_real_escape_string($con, $_POST['emailKontakt']);
$porukaKontakt = mysqli_real_escape_string($con, $_POST['porukaKontakt']);


mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER_SET 'utf8_unicode_ci'");

// preskacem id prilikom unosa u bazu - auto increment
$sql="INSERT INTO Kontakt (imeKontakt, prezimeKontakt, emailKontakt, porukaKontakt)
VALUES ('$imeKontakt', '$prezimeKontakt', '$emailKontakt', '$porukaKontakt')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Poruka je poslana!";

mysqli_close($con);

echo "<br><br>";

echo "<a href='http://iws.mev.hr/mrisek/kontakt.php'>Povratak na prethodnu stranicu</a>";
?>