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
	<!-- potvrda brisanja -->
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
			

<hr color="orange">
<h3><a id="navigacija" style="text-decoration: none">Navigacija</a></h3>
<hr color="orange">




				<!-- PRIKAZ SVIH NAVIGACIJA IZ BAZE, BRISANJE ILI IZMJENA ODABRANE POMOĆU TIPKE -->

<h2>Pregled svih stranica navigacije</h2>

<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>
<th>Naziv</th>
<th>Link</th>
<th>Opis</th>
<th></th>
</tr>


<?php
//make connection
$con=mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Navigacija";

$records=mysql_query($sql);

while($zapis=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$zapis['nazivNavigacija']."</td>";
	echo "<td>".$zapis['linkNavigacija']."</td>";
	echo "<td>".$zapis['opisNavigacija']."</td>";
	echo '<td><form method="post" action="novaIzmjenaNavigacije.php">
	<input type="hidden" value="'.$zapis['idNavigacija'].'" name="idNavigacija"/>
	<input type="submit" value="Izmjeni" />
	</form></td>';
}

mysql_close($con);
?>

</table>				





					

<!--											UNOS NOVE NAVIGACIJE

<h2>Unesi novu stranicu navigacije</h2>
<div class="form_settings">

<form name="myForm" action="insertNavigacija.php" method="post">

<p>Naziv navigacije:</p> <input type="text" name="nazivNavigacija"><br>

<p>Link navigacije:</p> <input type="text" name="linkNavigacija"><br>

<p>Opis:</p> <textarea rows="3" name="opisNavigacija" cols="20"></textarea><br>

<input class="submit" type="submit" value="Potvrdi unos">

</div>
</form>	
								
								
-->

	



			
			
			
            </div>
        </div>
        <div id="content_footer"></div>
        <div id="footer">
            Copyright &copy; Matija Risek | <a href="https://www.facebook.com/matija.risek">Facebook</a> | <a href="http://www.w3schools.com/">W3Schools</a> | <a href="http://www.general-turist.com/">GeneralTurist</a><div id="txt"></div>
        </div>
    </div>
</body>
</html>