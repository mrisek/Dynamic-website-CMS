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

<hr color="orange" width="600">
<h3><a id="cjenik" style="text-decoration: none">Cjenik</a></h3>
<hr color="orange" width="600">




<h2>Pregled svih soba</h2>	

<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>
<th>Naziv</th>
<th>Usluga</th>
<th>Cijena</th>
<th></th>
<th></th>
</tr>


<?php
//make connection
$con=mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Soba";

$records=mysql_query($sql);

while($zapis=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$zapis['nazivSoba']."</td>";
	echo "<td>".$zapis['uslugaSoba']."</td>";
	echo "<td>".$zapis['cijenaSoba']."</td>";
	echo '<td><form method="post" action="novaIzmjenaSobe.php">
	<input type="hidden" value="'.$zapis['idSoba'].'" name="idSoba"/>
	<input type="submit" value="Izmjeni" />
	</form></td>';
	echo '<td><form method="post" action="brisanjeSobe.php">
	<input type="hidden" value="'.$zapis['idSoba'].'" name="idSoba"/>
	<input type="submit" onClick="potvrda (); return false;" value="Obriši" />
	</form></td>';
	echo "</tr>";
}

mysql_close($con);
?>

</table>




<script>

//Validacija
function validacijaAdminCjenik()
{
    var a = document.forms["unosCjenika"]["nazivSoba"].value

    //naziv
    if (a == null || a == "") {
        alert("Naziv sobe mora biti upisan!");
        return false;
    }

    var b = document.forms["unosCjenika"]["uslugaSoba"].value
	
    //usluga
    if (b == null || b == "") {
        alert("Usluga mora biti upisana!");
        return false;
    }
	
	
	var c = document.forms["unosCjenika"]["cijenaSoba"].value
	
    //cijena
    if (c == null || c == "") {
        alert("Cijena mora biti upisana!");
        return false;
    }
	

}

</script>



<form name="unosCjenika" action="insertSoba.php" method="post" onsubmit="return validacijaAdminCjenik();">
<div class="form_settings">

<h2>Unesi novu sobu</h2>

<p>Naziv:</p> <input type="text" name="nazivSoba"><br>

<p>Usluga:</p> <textarea rows="3" name="uslugaSoba" cols="20"></textarea><br>

<p>Cijena:</p> <input type="text" name="cijenaSoba"><br>

<input class="submit" type="submit" value="Potvrdi unos">

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