<?php
$q = intval($_GET['q']);

$con = mysqli_connect("localhost","mrisek_000002","313007875","mrisek_000002");
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM Soba WHERE idSoba = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Naziv sobe</th>
<th>Usluga</th>
<th>Cijena sobe</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['nazivSoba'] . "</td>";
  echo "<td>" . $row['uslugaSoba'] . "</td>";
  echo "<td>" . $row['cijenaSoba'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>