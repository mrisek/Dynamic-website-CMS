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
					echo "<br>";
					echo "Logirani ste kao {$_SESSION['username']}.<br>";
					echo '<p><a href="?action=logOut">Odlogirajte se</a></p>';
					echo "<p>";
				?>

            </div>

            <div id="content">
                <!-- insert the page content here -->
				
				

<?php
$con=mysqli_connect("localhost","mrisek_000002","313007875","mrisek_000002");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$idKlijent = mysqli_real_escape_string($con, $_POST['idKlijent']);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER_SET 'utf8_unicode_ci'");

echo '<h2>Izmjeni klijenta</h2>';

$zapis = mysqli_query($con,"SELECT * FROM Klijent WHERE idKlijent=".$idKlijent);
while($row = mysqli_fetch_array($zapis))
{
echo '<form method="post" action="izmjeniRezervaciju.php">';
echo '<div class="form_settings">';
echo '<p>Ime:</p> <input type="text" name="imeKlijent" value="'.$row['imeKlijent'].'"><br>';
echo '<p>Prezime:</p> <input type="text" name="prezimeKlijent" value="'.$row['prezimeKlijent'].'"><br>';
echo '<p>Država:</p> <input type="text" name="drzavaKlijent" value="'.$row['drzavaKlijent'].'"><br>';
echo '<p>E-mail:</p> <input type="text" name="emailKlijent" value="'.$row['emailKlijent'].'"><br>';
echo '<p>Soba:</p> <input type="text" name="sobaKlijent" value="'.$row['sobaKlijent'].'"><br>';
echo '<p>Prehrana:</p> <input type="text" name="prehranaKlijent" value="'.$row['prehranaKlijent'].'"><br>';
echo '<p>Datum dolaska i odjave:</p> <textarea rows="2" name="datumKlijent" cols="20">'.$row['datumKlijent'].'</textarea><br>';
echo '<input type="hidden" value="'.$row['idKlijent'].'" name="idKlijent"/>
<input class="submit" type="submit" value="Izmjeni klijenta" />
</div>
</form>
<br>';
}

mysqli_close($con);

echo "<a href='http://iws.mev.hr/mrisek/adminRezervacija.php'>Povratak na prethodnu stranicu</a>";

echo "<br><br>";
?>				
				
				
				
				
				
				
				
				
				
				

				
            </div>
        </div>
        <div id="content_footer"></div>
        <div id="footer">
            Copyright &copy; Matija Risek | <a href="https://www.facebook.com/matija.risek">Facebook</a> | <a href="http://www.w3schools.com/">W3Schools</a> | <a href="http://www.general-turist.com/">GeneralTurist</a><div id="txt"></div>
        </div>
    </div>
</body>
</html>

