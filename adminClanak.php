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

<hr color="orange" width="600">
<h3><a id="clanak" style="text-decoration: none">Članak</a></h3>
<hr color="orange" width="600">




				<!-- PRIKAZ SVIH ČLANAKA IZ BAZE, BRISANJE ILI IZMJENA ODABRANOG POMOĆU TIPKE -->
<h2>Pregled svih članaka</h2>

<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>
<th>Naslov</th>
<th>Slika</th>
<th></th>
<th></th>
</tr>


<?php
//make connection
$con=mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Clanak";

$records=mysql_query($sql);

while($zapis=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$zapis['naslovClanak']."</td>";
	echo "<td>".$zapis['slikaClanak']."</td>";
	echo '<td><form method="post" action="novaIzmjenaClanka.php">
	<input type="hidden" value="'.$zapis['idClanak'].'" name="idClanak"/>
	<input type="submit" value="Izmjeni" />
	</form></td>';
	echo '<td><form method="post" action="brisanjeClanka.php">
	<input type="hidden" value="'.$zapis['idClanak'].'" name="idClanak"/>
	<input type="submit" onClick="potvrda (); return false;" value="Obriši" />
	</form></td>';
	echo "</tr>";
}

mysql_close($con);
?>

</table>




<script>

//Validacija - unos novog članka

function validacijaAdminClanak()
{
    var a = document.forms["unosClanka"]["naslovClanak"].value
    var b = document.forms["unosClanka"]["sadrzajClanak"].value
    var c = document.forms["unosClanka"]["datumClanak"].value

    //naslov
    if (a == null || a == "") {
        alert("Morate popuniti sva polja prije unosa novog članka!");
        return false;
    }

    //sadržaj
    if (b == null || b == "") {
        alert("Morate popuniti sva polja prije unosa novog članka!");
        return false;
    }
	
	
	//datum
    if (c == null || c == "") {
        alert("Morate popuniti sva polja prije unosa novog članka!");
        return false;
    }
	

}

</script>





<!-- UPLOAD DATOTEKE - FORMA -->	
<h2>Unesi novi članak</h2>

<form name="unosClanka" action="upload_file.php" method="post"
enctype="multipart/form-data" onsubmit="return validacijaAdminClanak();">
<div class="form_settings">

<p>Naslov:</p> <input type="text" name="naslovClanak"><br>

<p>Datum:</p> <input type="text" name="datumClanak" value="<?php echo date("Y-m-d")?>"><br><br>

<p>Sadržaj:</p> <textarea rows="15" name="sadrzajClanak" cols="20"></textarea><br>

<p>Slika:</p>

<p><input type="file" name="file" id="file">(*.gif ili *.jpg veličine do 20 kB)<br></p>

<input type="submit" class="submit" name="submit" value="Potvrdi unos">

</div>
</form>

				
			
			
			
			
            </div>
        </div>
        <div id="content_footer"></div>
        <div id="footer">
            Copyright &copy; Matija Risek | <a href="https://www.facebook.com/matija.risek">Facebook</a> | <a href="http://www.w3schools.com/">W3Schools</a> | <a href="http://www.general-turist.com/">GeneralTurist</a><div id="txt"></div>
        </div>
    </div>
</body>
</html>			