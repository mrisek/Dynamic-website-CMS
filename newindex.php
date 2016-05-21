<!DOCTYPE HTML>
<html>

<head>
<style>
.error {color: #FF0000;}
</style>
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

<body onload="startTime()">  <!-- Sat(tajmer) - JavaScript - startTime() -->

  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">


          <!-- class="logo_colour", allows you to change the colour of the text -->

          <h1><a href="index.html">Hotel<span class="logo_colour">Opatija</span></a></h1>
          <h2> Ljetovanje. Odmor. Sport & Priroda.</h2>
        </div>
      </div>


      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">Početna</a></li>
          <li><a href="cjenik.html">Cjenik</a></li>
          <li><a href="rezervacija.html">Rezervacija</a></li>
          <li><a href="galerija.html">Galerija</a></li>
          <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
      </div>
    </div>


    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->

        <h3>Novosti</h3>
        <h4>Otvoren vanjski bazen!</h4>
        <h5>1. svibnja, 2014</h5>
        <span class="left"><img src="style/bazen.jpg" alt="example graphic" /></span>
        <p>Početkom nove sezone u pogon je pušten obnovljeni i prošireni bazen ispred Hotela. Pogledate kako je izgledalo otvorenje!<br /><a href="#" onclick="openWin();return false">Saznaj više</a></p>
        <hr />
        
        <h4>Hotel kompletno renoviran!</h4>
        <h5>21. siječnja, 2014.</h5>
        <span class="left"><img src="style/hotel.jpg" alt="example graphic" /></span>
        <p>Zahvaljujući ulasku Republike Hrvatske u Europsku Uniju, kompletno je subvencionirana renovacija najstarijeg postojećeg hotela na Jadranu!<br /><a href="#" onclick="openWin();return false">Saznaj više</a></p>
        <hr />

        <h3>Korisni linkovi</h3>
        <ul>
          <li><a href="http://www.gss.hr/">HGSS</a></li>
          <li><a href="http://www.mup.hr/">MUP</a></li>
          <li><a href="http://www.hak.hr/">HAK</a></li>
          <li><a href="http://www.meteo-info.hr/grad/opatija">Vremenska prognoza</a></li>
        </ul>
        <hr />

          <h3>Search</h3>
          <form method="post" action="#" id="search_form">
              <p>
                  <input class="search" type="text" name="search_field" value="Enter keywords....." />
                  <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
          </form>      </div>

      <div id="content">
        <!-- insert the page content here -->

        <h1>Dobrodošli na web stranicu Hotela Opatija!</h1>
        <span class="center"><img src="style/opatija.gif" alt="example graphic" /></span>
        <p>Hotel se prostire na 3 kata, ima 2 dizala i ukupno 87 soba. Kategoriziran je sa čak 4 zvjezdice. U sklopu Hotela Opatija se još nalaze Velika dvorana, restoran, bar, bazen s morskom vodom te plaža za kupanje, budući da je objekt je smješten uz samo more. Također, okružen je velikim perivojem s bujnom i zanimljivom vegetacijom. Nogometni i teniski tereni oduševit će sportaše.</p>
        <hr />

        <h2>Opširnije</h2>
        <p>Hotel Opatija smješten je u srcu primorskog grada istog imena. Nalazi se u prekrasnom njegovanom parku nadomak gradskog kupališta i poznatog opatijskog šetališta. Opatija, često zvana Biser Jadrana, jedno je od najpopularnijih turističkih odredišta u Hrvatskoj i ima najdužu turističku tradiciju na Jadranu. Još od davne 1840. godine poznata je kao omiljeno odredište elite i poznatih umjetnika iz cijeloga svijeta koji su dolazili u Opatiju u potrazi za novom energijom koju su crpili u ovom jedinstvenom pejzažu. </p>
        
        <span class="left"><img src="style/kip2.jpg" alt="example graphic" /></span>     
            
        <p>Hotelski prostrani restoran „Vienna” može primiti i do 400 ljudi, a nudi pomno odabrane specijalitete domaće i internacionalne kuhinje. S jedinstvene terase hotela, jedne od najvećih i najljepših u Opatiji, posjetitelji će moći uživati u prekrasnom pogledu na more uz osvježavajuće piće i ukusne slastice. 6 dvorana za konferencije, opremljene najnovijom audio-vizualnom tehnologijom i popraćene osobnom uslugom našeg profesionalnog osoblja, jamče uspjeh događanja bilo koje vrste. Zatvoreni bazen s morskom vodom i ponuda masaža zadovoljiti će sve potrebe gostiju, kako onih koji hotel posjećuju poslovno tako i onih koji su ovdje u potrazi za odmorom.</p>


                <h2>Pišite nam</h2>
                <form name="kontaktForma" onsubmit="return validacijaKontaktForma()" action="primjer512.php" method="post" enctype="text/plain">
                    <div class="form_settings">
                        <p><span>Ime i prezime:</span><input class="contact" type="text" name="imeIprezime" value="" /></p>
                        <p><span>E-mail adresa:</span><input class="contact" type="text" name="email" value="" /></p>
                        <p><span>Poruka:</span><textarea class="contact textarea" rows="8" cols="50" name="poruka"></textarea></p>
						<select name="vrsta">
						<option value="pro">Prodaja</option>
						<option value="kup">Kupivina</option>
						</select>
                        <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Pošalji" /></p>
                    </div>
                </form>


<h2>Prikaz informacija o galerijama</h2>

<script>
function showCD(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getcd.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="cds" onchange="showCD(this.value)">
<option value="">Odaberite željenu galeriju:</option>
<option value="Hotel">Hotel</option>
<option value="Sobe">Sobe</option>
<option value="Bazen">Bazen</option>
<option value="Terasa">Terasa</option>
<option value="Vrt">Vrt</option>
</select>
</form>
<br>
<div id="txtHint"><b>Informacije o odabranoj galeriji biti će prikazane ovdje.</b></div>
<hr>




<h2>Dohvat zapisa odabrane sobe iz relacije Cjenik</h2>

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Odaberite sobu:</option>
<option value="2">1/1 PARK a)</option>
<option value="3">1/1 PARK b)</option>
<option value="4">1/2 PARK a)</option>
<option value="5">1/2 PARK b)</option>
<option value="6">1/1 MORE a)</option>
<option value="7">1/1 MORE b)</option>
<option value="8">1/2 MORE a)</option>
<option value="9">1/2 MORE b)</option>
<option value="10">POTKROVLJE</option>
<option value="11">POTKROVLJE</option>
</select>
</form>
<br>
<div id="txtHint"><b>Informacije o odabranoj sobi će biti prikazane ovdje.</b></div>








<h2>Ispis svih zapisa iz relacije Članak</h2>

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
  echo "<hr>";
}

mysqli_close($con);
?>




<h2>Ispis svih zapisa iz relacije Soba u tablicu</h2>


<?php
//make connection
mysql_connect("sql113.byethost12.com","b12_15026823","letfuck6","b12_15026823_baza");

//select db
mysql_select_db('b12_15026823_baza');

$sql="SELECT * FROM Soba";

$records=mysql_query($sql);
?>

<h3>Cjenik</h3>

<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>

<th>Soba</th>
<th>Usluga</th>
<th>Cijena</th>
<tr>


<?php
while($cijena=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$cijena['nazivSoba']."</td>";
	echo "<td>".$cijena['uslugaSoba']."</td>";
	echo "<td>".$cijena['cijenaSoba']."</td>";
	echo "<tr>";
}
?>

</table>




<h2>Brisanje zapisa iz relacije Članak prema ID-u članka</h2>
<form action="brisanjeClanka.php" method="post">
Unesite ID članka: <input type="text" name="idClanak">
<input type="submit">
</form>


<h2>Brisanje zapisa iz relacije Novosti prema ID-u novosti</h2>
<form action="brisanjeNovosti.php" method="post">
Unesite ID novosti: <input type="text" name="idNovosti">
<input type="submit">
</form>

<h2>Brisanje zapisa iz relacije Link prema ID-u linka</h2>
<form action="brisanjeLinka.php" method="post">
Unesite ID linka: <input type="text" name="idLink">
<input type="submit">
</form>

<h2>Brisanje zapisa iz relacije User prema ID-u korisnika</h2>
<form action="brisanjeUsera.php" method="post">
Unesite ID korisnika: <input type="text" name="idUser">
<input type="submit">
</form>

<h2>Brisanje zapisa iz relacije Soba prema ID-u sobe</h2>
<form action="brisanjeSobe.php" method="post">
Unesite ID sobe: <input type="text" name="idSoba">
<input type="submit">
</form>

<h2>Brisanje zapisa iz relacije Klijent prema ID-u klijenta</h2>
<form action="brisanjeKlijenta.php" method="post">
Unesite ID klijenta: <input type="text" name="idKlijent">
<input type="submit">
</form>

<h2>Brisanje zapisa iz relacije Galerija prema ID-u galerije</h2>
<form action="brisanjeGalerije.php" method="post">
Unesite ID galerije: <input type="text" name="idGalerija">
<input type="submit">
</form>

<h2>Brisanje zapisa iz relacije Kontakt prema ID-u kontakta</h2>
<form action="brisanjeKontakta.php" method="post">
Unesite ID kontakta: <input type="text" name="idKontakt">
<input type="submit">
</form>




	
<h2>Izmjena zapisa u relaciji Članak prema ID-u članka</h2>
<form action="izmjeniClanak.php" method="post">
Unesite ID članka: <input type="text" name="idClanak">
Unesite naslov članka: <input type="text" name="naslovClanak">
Sadržaj članka: <input type="text" name="sadrzajClanak">
Datum članka: <input type="text" name="datumClanak">
Slika: <input type="text" name="slikaClanak">
<input type="submit">
</form>


<h2>Izmjena zapisa u relaciji Novosti prema ID-u novosti</h2>
<form action="izmjeniNovosti.php" method="post">
Unesite ID novosti: <input type="text" name="idNovosti">
Unesite naslov novosti: <input type="text" name="naslovNovosti">
Sadržaj novosti: <input type="text" name="sadrzajNovosti">
Datum novosti: <input type="text" name="datumNovosti">
Slika: <input type="text" name="slikaNovosti">
<input type="submit">
</form>


<h2>Izmjena zapisa u relaciji Link prema ID-u linka</h2>
<form action="izmjeniLink.php" method="post">
Unesite ID linka: <input type="text" name="idLink">
Unesite naziv linka: <input type="text" name="nazivLink">
Sadržaj linka: <input type="text" name="sadrzajLink">
<input type="submit">
</form>


<h2>Izmjena zapisa u relaciji User prema ID-u usera</h2>
<form action="izmjeniUser.php" method="post">
Unesite ID usera: <input type="text" name="idUser">
Ime usera: <input type="text" name="imeUser">
Lozinka: <input type="text" name="lozinkaUser">
<input type="submit">
</form>


<h2>Izmjena zapisa u relaciji Cjenik prema ID-u sobe</h2>
<form action="izmjeniCjenik.php" method="post">
Unesite ID sobe: <input type="text" name="idSoba">
Naziv sobe: <input type="text" name="nazivSoba">
Usluga: <input type="text" name="uslugaSoba">
Cijena: <input type="text" name="cijenaSoba">
<input type="submit">
</form>


<h2>Izmjena zapisa u relaciji Rezervacija prema ID-u klijenta</h2>
<form action="izmjeniRezervaciju.php" method="post">
Unesite ID klijenta: <input type="text" name="idKlijent">
Ime klijenta: <input type="text" name="imeKlijent">
Prezime klijenta: <input type="text" name="prezimeKlijent">
Država: <input type="text" name="drzavaKlijent">
E-mail: <input type="text" name="emailKlijent">
Soba: <input type="text" name="sobaKlijent">
Prehrana: <input type="text" name="prehranaKlijent">
Datum: <input type="text" name="datumKlijent">
Broj noćenja: <input type="text" name="brojNocenjaKlijent">
<input type="submit">
</form>


<h2>Izmjena zapisa u relaciji Galerija prema ID-u galerije</h2>
<form action="izmjeniGaleriju.php" method="post">
Unesite ID galerije: <input type="text" name="idGalerija">
Naziv galerije: <input type="text" name="nazivGalerija">
Slika: <input type="text" name="slikaGalerija">
<input type="submit">
</form>


<h2>Izmjena zapisa u relaciji Kontakt prema ID-u kontakta</h2>
<form action="izmjeniKontakt.php" method="post">
Unesite ID kontakta: <input type="text" name="idKontakt">
Ime: <input type="text" name="imeKontakt">
Prezime: <input type="text" name="prezimeKontakt">
E-mail: <input type="text" name="emailKontakt">
Poruka: <input type="text" name="porukaKontakt">
<input type="submit">
</form>




<h2>Unos novog zapisa u relaciju Članak</h2>

<form action="insertClanak.php" method="post">
Unesite ID članka: <input type="text" name="idClanak">
Unesite naslov članka: <input type="text" name="naslovClanak">
Sadržaj članka: <input type="text" name="sadrzajClanak">
Datum članka: <input type="text" name="datumClanak">
Slika: <input type="text" name="slikaClanak">
<input type="submit">
</form>



<h2>Unos novog zapisa u relaciju Novosti</h2>

<form action="insertNovosti.php" method="post">
Unesite ID novosti: <input type="text" name="idNovosti">
Naslov novosti: <input type="text" name="naslovNovosti">
Sadržaj novosti: <input type="text" name="sadrzajNovosti">
Datum: <input type="text" name="datumNovosti">
Slika: <input type="text" name="slikaNovosti">
<input type="submit">
</form>


<h2>Unos novog zapisa u relaciju Link</h2>

<form action="insertLink.php" method="post">
Unesite ID linka: <input type="text" name="idLink">
Naziv linka: <input type="text" name="nazivLink">
Sadržaj linka: <input type="text" name="sadrzajLink">
<input type="submit">
</form>


<h2>Unos novog zapisa u relaciju User</h2>

<form action="insertUser.php" method="post">
Unesite ID novog korisnika: <input type="text" name="idUser">
Korisničko ime: <input type="text" name="imeUser">
Lozinka: <input type="text" name="lozinkaUser">
<input type="submit">
</form>


<h2>Unos novog zapisa u relaciju Soba</h2>

<form action="insert.php" method="post">
Unesite ID sobe: <input type="text" name="idSoba">
Unesite naziv sobe: <input type="text" name="nazivSoba">
Usluge u sobi: <input type="text" name="uslugaSoba">
Cijena sobe: <input type="text" name="cijenaSoba">
<input type="submit">
</form>


<h2>Unos nove rezervacije u relaciju Klijent</h2>

<form action="insertKlijent.php" method="post">
Unesite ID klijenta: <input type="text" name="idKlijent">
Ime klijenta: <input type="text" name="imeKlijent">
Prezime klijenta: <input type="text" name="prezimeKlijent">
Država: <input type="text" name="drzavaKlijent">
E-mail: <input type="text" name="emailKlijent">
Soba: <input type="text" name="sobaKlijent">
Prehrana: <input type="text" name="prehranaKlijent">
Datum dolaska: <input type="text" name="datumKlijent">
Broj noćenja: <input type="text" name="brojNocenjaKlijent">
<input type="submit">
</form>


<h2>Unos novog zapisa u relaciju Galerija</h2>

<form action="insertGalerija.php" method="post">
Unesite ID galerije: <input type="text" name="idGalerija">
Naziv galerije: <input type="text" name="nazivGalerija">
Slika: <input type="text" name="slikaGalerija">
<input type="submit">
</form>


<h2>Unos novog zapisa u relaciju Kontakt</h2>

<form action="insertKontakt.php" method="post">
Unesite ID kontakta: <input type="text" name="idKontakt">
Ime kontakta: <input type="text" name="imeKontakt">
Prezime kontakta: <input type="text" name="prezimeKontakt">
E-mail: <input type="text" name="emailKontakt">
Poruka: <input type="text" name="porukaKontakt">
<input type="submit">
</form>


<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailErr = "Invalid email format";
     }
   }
     
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL"; 
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>







      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright © Matija Risek | <a href="https://www.facebook.com/matija.risek">Facebook</a> | <a href="http://www.w3schools.com/">W3Schools</a> | <a href="http://www.general-turist.com/">GeneralTurist</a>
        <div id="txt"></div> <!-- Sat(tajmer) - JavaScript -->
     </div>
  </div>
</body>
</html>
						