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
    <script type="text/javascript" src="style/js.js" charset="ISO-8859-1" ></script>
    <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />

<!-- AJAX autosuggestion -->
<script>
function showHint(str) {
  if (str.length==0) { 
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethint.php?q="+str,true);
  xmlhttp.send();
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
		
			<!-- CMS Navigacija -->
			<!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
			<?php
			$con=mysqli_connect("localhost","mrisek_000002","313007875","mrisek_000002");
			// Check connection
			if (mysqli_connect_errno()) {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$jedan = mysqli_query($con,"SELECT * FROM Navigacija WHERE idNavigacija='1'");
			while($row = mysqli_fetch_array($jedan))
			{
			echo "<li><a href=\"" . $row['linkNavigacija'] . "\">" . $row['nazivNavigacija'] . "</a></li>";
			}


			$dva = mysqli_query($con,"SELECT * FROM Navigacija WHERE idNavigacija='2'");
			while($row = mysqli_fetch_array($dva))
			{
			echo "<li><a href=\"" . $row['linkNavigacija'] . "\">" . $row['nazivNavigacija'] . "</a></li>";
			}


			$tri = mysqli_query($con,"SELECT * FROM Navigacija WHERE idNavigacija='3'");
			while($row = mysqli_fetch_array($tri))
			{
			echo "<li class=\"selected\"><a href=\"" . $row['linkNavigacija'] . "\">" . $row['nazivNavigacija'] . "</a></li>";
			}


			$cetiri = mysqli_query($con,"SELECT * FROM Navigacija WHERE idNavigacija='4'");
			while($row = mysqli_fetch_array($cetiri))
			{
			echo "<li><a href=\"" . $row['linkNavigacija'] . "\">" . $row['nazivNavigacija'] . "</a></li>";
			}


			$pet = mysqli_query($con,"SELECT * FROM Navigacija WHERE idNavigacija='5'");
			while($row = mysqli_fetch_array($pet))
			{
			echo "<li><a href=\"" . $row['linkNavigacija'] . "\">" . $row['nazivNavigacija'] . "</a></li>";
			}
			
			
			$sest = mysqli_query($con,"SELECT * FROM Navigacija WHERE idNavigacija='6'");
			while($row = mysqli_fetch_array($sest))
			{
			echo "<li><a href=\"" . $row['linkNavigacija'] . "\">" . $row['nazivNavigacija'] . "</a></li>";
			}


			mysqli_close($con);
			?>	
		  
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
        <div class="sidebar">
            <!-- insert your sidebar items here -->

			
				<!-- CMS Novosti -->
				<h3>Novosti</h3>			
<?php
$con=mysqli_connect("localhost","mrisek_000002","313007875","mrisek_000002");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Novosti");

while($row = mysqli_fetch_array($result)) {
  echo "<h4>" . $row['naslovNovosti'] . "</h4><h5>" . $row['datumNovosti'] . "</h5><p>" . $row['sadrzajNovosti'];
  
  echo  "<br><a href=" . $row['linkNovosti'] . ">Saznaj više</a></p>";
  
  echo "<hr>";
}

mysqli_close($con);
?>	
		



		<!-- CMS - LINKOVI -->
        <h3>Korisni linkovi</h3>
        <ul>
        
<?php
$con=mysqli_connect("localhost","mrisek_000002","313007875","mrisek_000002");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Link");


while($row = mysqli_fetch_array($result))
{
echo "<li><a href=" . $row['sadrzajLink'] . ">" . $row['nazivLink'] . "</a></li>";
}

mysqli_close($con);
?>	
		
		</ul>	
		

        <hr />

			
<h3>PDF Download</h3>			
<!-- START: Save page as PDF Script -->

<a href="http://pdf-ace.com/pdfme" target="_blank"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-6.gif" width="46" height="24" alt="Download as PDF" /></a>

<!-- END: Save page as PDF Script -->
			
			

        </div>

        <div id="content">
            <!-- insert the page content here -->
            <h1>Rezervacija</h1>
            <p>
                Ovdje možete unijeti detalje vaše rezervacije ili upita.
                Svi osobni podaci koje unesete moraju biti ispravni.
                Slanjem upita prihvaćate uvjete i politiku Hotela Opatija.
            </p>
			
			
									<h2>Dohvat zapisa odabrane sobe iz relacije Cjenik</h2>

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("textHint").innerHTML="";
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
      document.getElementById("textHint").innerHTML=xmlhttp.responseText;
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
<div id="textHint"><b>Informacije o odabranoj sobi će biti prikazane ovdje.</b></div>
			

            <hr />
            <h2>Unos rezervacije/upita</h2>

                <form name="myForm" action="unosRezervacijaForma.php" method="post">
				
                   

                        <p>
                            <!-- Ime, prezime, itd... -->
                            Ime:<br />
                            </><input type="text" name="imeKlijent"><br />
                        </p>

                        <p>
                            Prezime:<br />
                            <input type="text" name="prezimeKlijent"><br />
                        </p>

                        <p>
                            Država:<br />
                            <input type="text" name="drzavaKlijent" onkeyup="showHint(this.value)">
                        

Sugestija: <span id="txtHint"></span></p>

                        <p>
                            E-mail:<br />
                            <input type="text" name="emailKlijent" /><br />
                        </p>



                        <p>
                            <!-- Izbornik -->
                            Tip sobe:
                            <span class="tab"></span>
                            <select size="1" name="sobaKlijent">
                                <option value="">Odaberite željenu sobu...</option>
                                <option value="1/1 Park"> 1/1 Park </option>
                                <option value="1/2 Park"> 1/2 Park </option>
                                <option value="1/2 More"> 1/2 More </option>
                                <option value="Potkrovlje"> Potkrovlje </option>
                            </select>
                        </p>



                        <p>
                            <!-- Textarea -->
                            Datum dolaska i datum odjave:<br />
                            <textarea type="text" rows="3" name="datumKlijent" cols="20"></textarea>
                        </p>


                        <p>
                            <!-- Radio gumbi -->
                            Doručak:
                            <input type="radio" name="prehranaKlijent" id="dorucak" value="doručak" /><br />
                            Polupansion:
                            <input type="radio" name="prehranaKlijent" id="polupansion" value="polupansion" />
                        </p>



                        <p>
                            <!-- Potvrdni okvir -->
                            Da, potvrđujem kako su svi uneseni podaci ispravni
                            <span class="tab"></span>
                            <input class="checkbox" type="checkbox" id="yes" value="1" />
                        </p>

                        <p></p>



                    <div class="form_settings">
                        <p>
                            <!-- Tipke "Submit" i "Reset" -->
                            <input class="submit" name="gumb1" type="submit" value="Pošalji" onclick="return validateForm();">

                        </p>
                        <p>
                            <input class="submit" type="reset" value="Obriši" name="gumb2" />
                        </p>
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
