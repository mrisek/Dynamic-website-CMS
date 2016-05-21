<?php
$auth_realm = 'Hotel Opatija - Admin Login';

require_once 'auth.php';
?>



<!DOCTYPE HTML>
<html>

<head>
    <title>Hotel Opatija</title>
	<link rel="shortcut icon" href="style/ikona.ico">
    <meta name="author" content="Matija Risek" />
    <meta name="description" content="Hotel Opatija" />
    <meta name="keywords" content="Hrvatska, Opatija, hotel, Jadransko more, ljetovanje, turizam" />
    <meta name="designer" content="Risek Design" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" src="style/js.js"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
	<script type="text/javascript" >
	function potvrda() {
		var potvrda=confirm('Jeste li sigurni da želite obrisati unos?');
		if (potvrda) brisanje.submit();
		}
	</script>
</head>

<body onload="startTime()">
    <div id="main">
        <div id="header">
            <div id="logo">
                <div id="logo_text">
                    <!-- class="logo_colour", allows you to change the colour of the text -->
                    <h1><a href="index.php">Hotel<span class="logo_colour">Opatija</span></a></h1>
                    <h2>Ljetovanje. Odmor. Sport & Priroda.</h2>
                </div>
            </div>
            <div id="menubar">
                <ul id="menu">
                    <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                    <li><a href="index.php">Početna</a></li>
                    <li><a href="cjenik.php">Cjenik</a></li>
                    <li><a href="rezervacija.php">Rezervacija</a></li>
                    <li><a href="galerija.php">Galerija</a></li>
                    <li> <a href="kontakt.php">Kontakt</a></li>
					<li class="selected"><a href="administrator.php">Admin</a></li>
                </ul>
            </div>
        </div>
        <div id="content_header"></div>
        <div id="site_content">
            <div class="sidebar">
                <!-- insert your sidebar items here -->
				<?php
					echo "<h3>Informacije</h3>";
					echo "<p>";
					echo "Ovdje možete upravljati cijelom stranicom Hotela Opatija.<br>";
					echo "Logirani ste kao {$_SESSION['username']}.<br>";
					echo '<p><a href="?action=logOut">Odlogirajte se</a></p>';
					echo "<p>";
				?>

                <h3>Administrator</h3>
                <ul>
					<li><a href="adminNavigacija.php">Navigacija</a></li>
                    <li><a href="adminClanak.php">Članak</a></li>
                    <li><a href="adminNovosti.php">Novosti</a></li>
                    <li><a href="adminLink.php">Link</a></li>
					<li><a href="adminCjenik.php">Cjenik</a></li>
                    <li><a href="adminRezervacija.php">Rezervacija</a></li>
                    <li><a href="adminGalerija.php">Galerija</a></li>
                    <li><a href="adminKontakt.php">Kontakt</a></li>
					<li><a href="adminUser.php">User</a></li>
                </ul>
                <hr />


            </div>

			<div id="content">
            <!-- insert the page content here -->
			
						<!-- GORE -->


<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
  
	echo "Uspješno ste objavili novi članak!<br><br>";
  
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
	
	$con=mysqli_connect("localhost","mrisek_000002","313007875","mrisek_000002");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$idClanak = mysqli_real_escape_string($con, $_POST['idClanak']);
$naslovClanak = mysqli_real_escape_string($con, $_POST['naslovClanak']);
$sadrzajClanak = mysqli_real_escape_string($con, $_POST['sadrzajClanak']);
$datumClanak = mysqli_real_escape_string($con, $_POST['datumClanak']);
$slikaClanakNaziv = mysqli_real_escape_string($con, $_POST['slikaClanak']);

$slikaClanak = '<span class="left"><img src="upload/'. $_FILES["file"]["name"].'" alt="example graphic" /></span>';

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER_SET 'utf8_unicode_ci'");

$sql="INSERT INTO Clanak (idClanak, naslovClanak, sadrzajClanak, datumClanak, slikaClanak)
VALUES ('$idClanak', '$naslovClanak', '$sadrzajClanak', '$datumClanak', '$slikaClanak')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
	
    if (file_exists("upload/" . $_FILES["file"]["name"])) {
      echo "<br>Upozorenje, na serveru već postoji datoteka sa istim imenom: ".$_FILES["file"]["name"].'<br>Nova datoteka nije dodana na server!';
	  echo "<br><br><a href='http://iws.mev.hr/mrisek/adminClanak.php'>Povratak na prethodnu stranicu</a>";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Pohranjeno u mapu: " . "upload/" . $_FILES["file"]["name"];
	  echo "<br><br><a href='http://iws.mev.hr/mrisek/adminClanak.php'>Povratak na prethodnu stranicu</a>";
    }
  }
} else {
  echo "Morate odabrati sliku tipa *.JPG ili *.GIF veličine do 20 kB";
  echo "<br><br><a href='http://iws.mev.hr/mrisek/adminClanak.php'>Povratak na prethodnu stranicu</a>";
}
?>



			
						<!-- DOLE -->
            </div>
        </div>
        <div id="content_footer"></div>
        <div id="footer">
            Copyright &copy; Matija Risek | <a href="https://www.facebook.com/matija.risek">Facebook</a> | <a href="http://www.w3schools.com/">W3Schools</a> | <a href="http://www.general-turist.com/">GeneralTurist</a><div id="txt"></div>
        </div>
    </div>
</body>
</html>			

