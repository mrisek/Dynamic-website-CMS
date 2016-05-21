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
					<li class="selected"><a href="admin.php">Admin</a></li>
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
					<li><a href="#navigacija">Navigacija</a></li>
                    <li><a href="#clanak">Članak</a></li>
                    <li><a href="#novosti">Novosti</a></li>
                    <li><a href="#link">Link</a></li>
					<li><a href="#cjenik">Cjenik</a></li>
                    <li><a href="#rezervacija">Rezervacija</a></li>
                    <li><a href="#galerija">Galerija</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
					<li><a href="#user">User</a></li>
                </ul>
                <hr />


            </div>

			
			
            <div id="content">
                <!-- insert the page content here -->

<hr color="orange">
<h3><a id="navigacija" style="text-decoration: none">Navigacija</a></h3>
<hr color="orange">


<h2>Ispis zapisa relacije Navigacija u tablicu</h2>

<?php
//make connection
$con=mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Navigacija";

$records=mysql_query($sql);
?>

<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>
<th>ID</th>
<th>Naziv</th>
<th>Link</th>
<th>Opis</th>
</tr>


<?php
while($zapis=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$zapis['idNavigacija']."</td>";
	echo "<td>".$zapis['nazivNavigacija']."</td>";
	echo "<td>".$zapis['linkNavigacija']."</td>";
	echo "<td>".$zapis['opisNavigacija']."</td>";
	echo "</tr>";
}

mysql_close($con);
?>

</table>				


<form action="brisanjeNavigacije.php" method="post">

<h2>Brisanje zapisa iz relacije Navigacija prema ID-u navigacije</h2>

Unesite ID navigacije: <input type="text" name="idNavigacija">

<input class="submit" type="submit" value="Izbriši navigaciju">

</form>


<form action="izmjeniNavigaciju.php" method="post">
<div class="form_settings">

<h2>Izmjena zapisa u relaciji Navigacija prema ID-u navigacije</h2>

<p>Unesite ID navigacije:</p> <input type="text" name="idNavigacija"><br>

<p>Naziv navigacije:</p> <input type="text" name="nazivNavigacija"><br>

<p>Link navigacije:</p> <input type="text" name="linkNavigacija"><br>

<p>Opis:</p> <textarea rows="3" name="opisNavigacija" cols="20"></textarea><br>

<input class="submit" type="submit" value="Izmjeni zapis">

</div>
</form>



<h2>Unos novog zapisa u relaciju Navigacija</h2>
<div class="form_settings">

<form name="myForm" action="insertNavigacija.php" method="post">

<p>Unesite ID navigacije:</p> <input type="text" name="idNavigacija"><br>

<p>Naziv navigacije:</p> <input type="text" name="nazivNavigacija"><br>

<p>Link navigacije:</p> <input type="text" name="linkNavigacija"><br>

<p>Opis:</p> <textarea rows="3" name="opisNavigacija" cols="20"></textarea><br>

<input class="submit" type="submit" value="Potvrdi unos">

</div>
</form>	






<br>
<hr color="orange" width="800">
<h3><a id="clanak" style="text-decoration: none">Članak</a></h3>
<hr color="orange" width="800">





<h2>Ispis zapisa relacije Članak u tablicu</h2>

<?php
//make connection
mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Clanak";

$records=mysql_query($sql);
?>

<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>

<th>ID</th>
<th>Naslov</th>
<th>Datum</th>
<th>Slika</th>

</tr>


<?php
while($zapis=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$zapis['idClanak']."</td>";
	echo "<td>".$zapis['naslovClanak']."</td>";
	echo "<td>".$zapis['datumClanak']."</td>";
	echo "<td>".$zapis['slikaClanak']."</td>";
	echo "</tr>";
}
?>

</table>



<form action="brisanjeClanka.php" method="post">

<h2>Brisanje zapisa iz relacije Članak prema ID-u članka</h2>

Unesite ID članka: <input type="text" name="idClanak">

<input class="submit" type="submit" value="Izbriši članak">

</form>




<form action="izmjeniClanak.php" method="post">
<div class="form_settings">

<h2>Izmjena zapisa u relaciji Članak prema ID-u članka</h2>

<p>Unesite ID članka:</p> <input type="text" name="idClanak"><br>

<p>Unesite naslov članka:</p> <input type="text" name="naslovClanak"><br>

<p>Sadržaj članka:</p> <textarea rows="3" name="sadrzajClanak" cols="20"></textarea><br>

<p>Datum članka:</p> <input type="text" name="datumClanak"><br>

<p>Slika:</p> <input type="text" name="slikaClanak"><br>

<input class="submit" type="submit" value="Izmjeni zapis">

</div>
</form>


<h2>Unos novog zapisa u relaciju Članak</h2>
<div class="form_settings">

<form name="myForm" action="insertClanak.php" method="post">

<p>Unesite ID članka:</p> <input type="text" name="idClanak"><br>

<p>Unesite naslov članka:</p> <input type="text" name="naslovClanak"><br>

<p>Sadržaj članka:</p> <textarea rows="3" name="sadrzajClanak" cols="20"></textarea><br>

<p>Datum članka:</p> <input type="text" name="datumClanak"><br>

<p>Slika:</p> <input type="text" name="slikaClanak"><br>

<input class="submit" type="submit" value="Potvrdi unos">

</div>
</form>






<br>
<hr color="orange" width="800">
<h3><a id="novosti" style="text-decoration: none">Novosti</a></h3>
<hr color="orange" width="800">



<h2>Ispis zapisa relacije Novosti u tablicu</h2>

<?php
//make connection
mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Novosti";

$records=mysql_query($sql);
?>

<table width="750" border="0" cellpadding="0" cellspacing="0">
<tr>

<th>ID</th>
<th>Naslov</th>
<th>Datum</th>
<th>Link</th>

</tr>


<?php
while($zapis=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$zapis['idNovosti']."</td>";
	echo "<td>".$zapis['naslovNovosti']."</td>";
	echo "<td>".$zapis['datumNovosti']."</td>";
	echo "<td>".$zapis['linkNovosti']."</td>";
	echo "</tr>";
}
?>

</table>



<form action="brisanjeNovosti.php" method="post">

<h2>Brisanje zapisa iz relacije Novosti prema ID-u novosti</h2>

Unesite ID novosti: <input type="text" name="idNovosti">

<input class="submit" type="submit" value="Izbriši novost">

</form>




<form action="izmjeniNovosti.php" method="post">
<div class="form_settings">

<h2>Izmjena zapisa u relaciji Novosti prema ID-u novosti</h2>

<p>Unesite ID novosti:</p> <input type="text" name="idNovosti"><br>

<p>Unesite naslov novosti:</p> <input type="text" name="naslovNovosti"><br>

<p>Sadržaj novosti:</p> <textarea rows="3" name="sadrzajNovosti" cols="20"></textarea><br>

<p>Datum novosti:</p> <input type="text" name="datumNovosti"><br>

<p>Link:</p> <input type="text" name="linkNovosti"><br>

<input class="submit" type="submit" value="Izmjeni zapis">

</div>
</form>


<form action="insertNovosti.php" method="post"><br>
<div class="form_settings">

<h2>Unos novog zapisa u relaciju Novosti</h2>

<p>Unesite ID novosti:</p> <input type="text" name="idNovosti"><br>

<p>Naslov novosti:</p> <input type="text" name="naslovNovosti"><br>

<p>Sadržaj novosti:</p> <textarea rows="3" name="sadrzajNovosti" cols="20"></textarea><br>

<p>Datum:</p> <input type="text" name="datumNovosti"><br>

<p>Link:</p> <input type="text" name="linkNovosti"><br>

<input class="submit" type="submit" value="Potvrdi unos">

</div>
</form>




<br>
<hr color="orange" width="800">
<h3><a id="link" style="text-decoration: none">Link</a></h3>
<hr color="orange" width="800">




<h2>Ispis zapisa relacije Link u tablicu</h2>

<?php
//make connection
mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Link";

$records=mysql_query($sql);
?>

<table width="400" border="0" cellpadding="0" cellspacing="0">
<tr>

<th>ID</th>
<th>Naziv linka</th>
<th>Sadržaj linka</th>

</tr>


<?php
while($zapis=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$zapis['idLink']."</td>";
	echo "<td>".$zapis['nazivLink']."</td>";
	echo "<td>".$zapis['sadrzajLink']."</td>";
	echo "</tr>";
}
?>

</table>



<form action="brisanjeLinka.php" method="post">

<h2>Brisanje zapisa iz relacije Link prema ID-u linka</h2>

Unesite ID linka: <input type="text" name="idLink">

<input class="submit" type="submit" value="Izbriši link">

</form>


<form action="izmjeniLink.php" method="post">
<div class="form_settings">

<h2>Izmjena zapisa u relaciji Link prema ID-u linka</h2>

<p>Unesite ID linka:</p> <input type="text" name="idLink"><br>

<p>Unesite naziv linka:</p> <input type="text" name="nazivLink"><br>

<p>Sadržaj linka:</p> <input type="text" name="sadrzajLink"><br>

<input class="submit" type="submit" value="Izmjeni zapis">

</div>
</form>



<form action="insertLink.php" method="post">
<div class="form_settings">

<h2>Unos novog zapisa u relaciju Link</h2>

<p>Unesite ID linka:</p> <input type="text" name="idLink"><br>

<p>Naziv linka:</p> <input type="text" name="nazivLink"><br>

<p>Sadržaj linka:</p> <input type="text" name="sadrzajLink"><br>

<input class="submit" type="submit" value="Potvrdi unos">

</div>
</form>




<br>
<hr color="orange" width="800">
<h3><a id="cjenik" style="text-decoration: none">Cjenik</a></h3>
<hr color="orange" width="800">




<h2>Ispis zapisa relacije Soba u tablicu</h2>	
	
<?php
//make connection
mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Soba";

$records=mysql_query($sql);
?>

<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>
<th>ID</th>
<th>Naziv sobe</th>
<th>Usluga</th>
<th>Cijena sobe</th>
</tr>


<?php
while($cijena=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$cijena['idSoba']."</td>";
	echo "<td>".$cijena['nazivSoba']."</td>";
	echo "<td>".$cijena['uslugaSoba']."</td>";
	echo "<td>".$cijena['cijenaSoba']."</td>";
	echo "</tr>";
}
?>

</table>	



<form action="brisanjeSobe.php" method="post">

<h2>Brisanje zapisa iz relacije Soba prema ID-u sobe</h2>

Unesite ID sobe: <input type="text" name="idSoba">

<input class="submit" type="submit" value="Izbriši sobu">

</form>




<form action="izmjeniCjenik.php" method="post">
<div class="form_settings">

<h2>Izmjena zapisa u relaciji Soba prema ID-u sobe</h2>


<p>Unesite ID sobe:</p> <input type="text" name="idSoba"><br>

<p>Naziv sobe:</p> <input type="text" name="nazivSoba"><br>

<p>Usluga:</p> <textarea rows="3" name="uslugaSoba" cols="20"></textarea><br>

<p>Cijena:</p> <input type="text" name="cijenaSoba"><br>

<input class="submit" type="submit" value="Izmjeni zapis">

</div>
</form>


<form action="insertSoba.php" method="post">
<div class="form_settings">

<h2>Unos novog zapisa u relaciju Soba</h2>

<p>Unesite ID sobe:</p> <input type="text" name="idSoba"><br>

<p>Unesite naziv sobe:</p> <input type="text" name="nazivSoba"><br>

<p>Usluge u sobi:</p> <textarea rows="3" name="uslugaSoba" cols="20"></textarea><br>

<p>Cijena sobe:</p> <input type="text" name="cijenaSoba"><br>

<input class="submit" type="submit" value="Potvrdi unos">

</div>
</form>





<br>
<hr color="orange" width="800">
<h3><a id="rezervacija" style="text-decoration: none">Rezervacija</a></h3>
<hr color="orange" width="800">




<h2>Ispis zapisa relacije Klijent u tablicu</h2>
	
<?php
//make connection
mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Klijent";

$records=mysql_query($sql);
?>

<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>
<th>ID</th>
<th>Ime</th>
<th>Prezime</th>
<th>Država</th>
<th>E-mail</th>
<th>Soba</th>
<th>Prehrana</th>
<th>Datum</th>
</tr>


<?php
while($cijena=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$cijena['idKlijent']."</td>";
	echo "<td>".$cijena['imeKlijent']."</td>";
	echo "<td>".$cijena['prezimeKlijent']."</td>";
	echo "<td>".$cijena['drzavaKlijent']."</td>";
	echo "<td>".$cijena['emailKlijent']."</td>";
	echo "<td>".$cijena['sobaKlijent']."</td>";
	echo "<td>".$cijena['prehranaKlijent']."</td>";
	echo "<td>".$cijena['datumKlijent']."</td>";
	echo "</tr>";
}
?>

</table>	
	

	
<form action="brisanjeKlijenta.php" method="post">

<h2>Brisanje zapisa iz relacije Klijent prema ID-u klijenta</h2>

Unesite ID klijenta: <input type="text" name="idKlijent">

<input class="submit" type="submit" value="Izbriši klijenta">

</form>
	
	


<form action="izmjeniRezervaciju.php" method="post">
<div class="form_settings">

<h2>Izmjena zapisa u relaciji Rezervacija prema ID-u klijenta</h2>

<p>Unesite ID klijenta:</p> <input type="text" name="idKlijent"><br>

<p>Ime klijenta:</p> <input type="text" name="imeKlijent"><br>

<p>Prezime klijenta:</p> <input type="text" name="prezimeKlijent"><br>

<p>Država:</p> <input type="text" name="drzavaKlijent"><br>

<p>E-mail:</p> <input type="text" name="emailKlijent"><br>

<p>Soba:</p> <input type="text" name="sobaKlijent"><br>

<p>Prehrana:</p> <input type="text" name="prehranaKlijent"><br>

<p>Datum dolaska i odjave:</p> <textarea rows="3" name="datumKlijent" cols="20"></textarea><br>

<input class="submit" type="submit" value="Izmjeni zapis">

</div>
</form>
	
	
	
<form action="insertKlijent.php" method="post">
<div class="form_settings">

<h2>Unos nove rezervacije u relaciju Klijent</h2>

<p>Unesite ID klijenta:</p> <input type="text" name="idKlijent"><br>

<p>Ime klijenta:</p> <input type="text" name="imeKlijent"><br>

<p>Prezime klijenta:</p> <input type="text" name="prezimeKlijent"><br>

<p>Država:</p> <input type="text" name="drzavaKlijent"><br>

<p>E-mail:</p> <input type="text" name="emailKlijent"><br>

<p>Soba:</p> <input type="text" name="sobaKlijent"><br>

<p>Prehrana:</p> <input type="text" name="prehranaKlijent"><br>

<p>Datum dolaska i odjave:</p> <textarea rows="3" name="datumKlijent" cols="20"></textarea><br>

<input class="submit" type="submit" value="Potvrdi unos">

</div>
</form>
	
	


<br>
<hr color="orange" width="800">
<h3><a id="galerija" style="text-decoration: none">Galerija</a></h3>
<hr color="orange" width="800">
	
	


<h2>Ispis zapisa relacije Galerija u tablicu</h2>
	
<?php
//make connection
mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Galerija";

$records=mysql_query($sql);
?>

<table width="700" border="0" cellpadding="0" cellspacing="0">
<tr>

<th>ID</th>
<th>Galerija</th>
<th>Slika</th>

</tr>


<?php
while($cijena=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$cijena['idGalerija']."</td>";
	echo "<td>".$cijena['nazivGalerija']."</td>";
	echo "<td>".$cijena['slikaGalerija']."</td>";

	echo "</tr>";
}
?>

</table>	



<form action="brisanjeGalerije.php" method="post">

<h2>Brisanje zapisa iz relacije Galerija prema ID-u galerije</h2>

Unesite ID slike: <input type="text" name="idGalerija">

<input class="submit" type="submit" value="Izbriši galeriju">

</form>



<form action="izmjeniGaleriju.php" method="post">
<div class="form_settings">

<h2>Izmjena zapisa u relaciji Galerija prema ID-u galerije</h2>

<p>Unesite ID slike:</p> <input type="text" name="idGalerija"><br>

<p>Naziv galerije:</p> <input type="text" name="nazivGalerija"><br>

<p>Slika:</p> <input type="text" name="slikaGalerija"><br>

<input class="submit" type="submit" value="Izmjeni zapis">

</div>
</form>



<form action="insertGalerija.php" method="post">
<div class="form_settings">

<h2>Unos novog zapisa u relaciju Galerija</h2><br>

<p>Unesite ID slike:</p> <input type="text" name="idGalerija"><br>

<p>Naziv galerije:</p> <input type="text" name="nazivGalerija"><br>

<p>Slika:</p> <input type="text" name="slikaGalerija"><br>

<input class="submit" type="submit" value="Potvrdi unos">

</div>
</form>





<br>
<hr color="orange" width="800">
<h3><a id="kontakt" style="text-decoration: none">Kontakt</a></h3>
<hr color="orange" width="800">




<h2>Ispis zapisa relacije Kontakt u tablicu</h2>
	
<?php
//make connection
mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Kontakt";

$records=mysql_query($sql);
?>

<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>
<th>ID</th>
<th>Ime</th>
<th>Prezime</th>
<th>E-mail</th>
<th>Poruka</th>
</tr>


<?php
while($cijena=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$cijena['idKontakt']."</td>";
	echo "<td>".$cijena['imeKontakt']."</td>";
	echo "<td>".$cijena['prezimeKontakt']."</td>";
	echo "<td>".$cijena['emailKontakt']."</td>";
	echo "<td>".$cijena['porukaKontakt']."</td>";
	echo "</tr>";
}
?>

</table>	



<form action="brisanjeKontakta.php" method="post">

<h2>Brisanje zapisa iz relacije Kontakt prema ID-u kontakta</h2>

Unesite ID kontakta: <input type="text" name="idKontakt">

<input class="submit" type="submit" value="Izbriši kontakt">

</form>




<form action="izmjeniKontakt.php" method="post">
<div class="form_settings">

<h2>Izmjena zapisa u relaciji Kontakt prema ID-u kontakta</h2>

<p>Unesite ID kontakta:</p> <input type="text" name="idKontakt"><br>

<p>Ime:</p> <input type="text" name="imeKontakt"><br>

<p>Prezime:</p> <input type="text" name="prezimeKontakt"><br>

<p>E-mail:</p> <input type="text" name="emailKontakt"><br>

<p>Poruka:</p> <textarea rows="3" name="porukaKontakt" cols="20"></textarea><br>

<input class="submit" type="submit" value="Izmjeni zapis">

</div>
</form>			



<form action="insertKontakt.php" method="post">
<div class="form_settings">

<h2>Unos novog zapisa u relaciju Kontakt</h2>

<p>Unesite ID kontakta:</p> <input type="text" name="idKontakt"><br>

<p>Ime kontakta:</p> <input type="text" name="imeKontakt"><br>

<p>Prezime kontakta:</p> <input type="text" name="prezimeKontakt"><br>

<p>E-mail:</p> <input type="text" name="emailKontakt"><br>

<p>Poruka:</p> <textarea rows="3" name="porukaKontakt" cols="20"></textarea><br>

<input class="submit" type="submit" value="Potvrdi unos">

</div>
</form>





<br>
<hr color="orange" width="800">
<h3><a id="user" style="text-decoration: none">User</a></h3>
<hr color="orange" width="800">





<h2>Ispis zapisa relacije User u tablicu</h2>

<?php
//make connection
mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM User";

$records=mysql_query($sql);
?>

<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>

<th>ID</th>
<th>Korisničko ime</th>
<th>Lozinka</th>

</tr>


<?php
while($zapis=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$zapis['idUser']."</td>";
	echo "<td>".$zapis['imeUser']."</td>";
	echo "<td>".$zapis['lozinkaUser']."</td>";
	echo "</tr>";
}
?>

</table>




<form action="brisanjeUsera.php" method="post">

<h2>Brisanje zapisa iz relacije User prema ID-u korisnika</h2>

Unesite ID korisnika: <input type="text" name="idUser">

<input class="submit" type="submit" value="Izbriši korisnika">

</form>



<form action="izmjeniUser.php" method="post">
<div class="form_settings">

<h2>Izmjena zapisa u relaciji User prema ID-u usera</h2>

<p>Unesite ID usera:</p> <input type="text" name="idUser"><br>

<p>Ime usera:</p> <input type="text" name="imeUser"><br>

<p>Lozinka:</p> <input type="text" name="lozinkaUser"><br>

<input class="submit" type="submit" value="Izmjeni zapis">

</div>
</form>



<form action="insertUser.php" method="post">
<div class="form_settings">

<h2>Unos novog zapisa u relaciju User</h2>

<p>Unesite ID novog korisnika:</p> <input type="text" name="idUser"><br>

<p>Korisničko ime:</p> <input type="text" name="imeUser"><br>

<p>Lozinka:</p> <input type="text" name="lozinkaUser"><br>

<input class="submit" type="submit" value="Potvrdi unos">

</div>
</form>



<br>
				
				
				
		

            </div>
        </div>
        <div id="content_footer"></div>
        <div id="footer">
            Copyright &copy; Matija Risek | <a href="https://www.facebook.com/matija.risek">Facebook</a> | <a href="http://www.w3schools.com/">W3Schools</a> | <a href="http://www.general-turist.com/">GeneralTurist</a><div id="txt"></div>
        </div>
    </div>
</body>
</html>
