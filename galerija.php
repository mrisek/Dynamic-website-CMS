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
			echo "<li><a href=\"" . $row['linkNavigacija'] . "\">" . $row['nazivNavigacija'] . "</a></li>";
			}


			$cetiri = mysqli_query($con,"SELECT * FROM Navigacija WHERE idNavigacija='4'");
			while($row = mysqli_fetch_array($cetiri))
			{
			echo "<li class=\"selected\"><a href=\"" . $row['linkNavigacija'] . "\">" . $row['nazivNavigacija'] . "</a></li>";
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
            <h1>Galerija</h1>
            <p>
                <script type="text/javascript"
                        src="http://slideshow.triptracker.net/slide.js"></script>
                <script type="text/javascript">
<!--
  var izvana = new PhotoViewer();
  izvana.add('style/izvana1.jpg');
  izvana.add('style/izvana2.jpg');
  izvana.add('style/izvana3.jpg');
  izvana.add('style/izvana4.jpg');
  izvana.add('style/izvana5.jpg');

  var interijer = new PhotoViewer();
  interijer.add('style/unutra1.jpg');
  interijer.add('style/unutra2.jpg');
  interijer.add('style/unutra3.jpg');
  interijer.add('style/unutra4.jpg');
  interijer.add('style/unutra5.jpg');

  var bazen = new PhotoViewer();
  bazen.add('style/bazen1.jpg');
  bazen.add('style/bazen2.jpg');
  bazen.add('style/bazen3.jpg');
  bazen.add('style/bazen4.jpg');
  bazen.add('style/bazen5.jpg');

  var terasa = new PhotoViewer();
  terasa.add('style/terasa1.jpg');
  terasa.add('style/terasa2.jpg');
  terasa.add('style/terasa3.jpg');
  terasa.add('style/terasa4.jpg');
  terasa.add('style/terasa5.jpg');

  var vrt = new PhotoViewer();
  vrt.add('style/vrt1.jpg');
  vrt.add('style/vrt2.jpg');
  vrt.add('style/vrt3.jpg');
  vrt.add('style/vrt4.jpg');
  vrt.add('style/vrt5.jpg');

//--></script>
                <a href="javascript:void(izvana.show(0))">Hotel</a> | <a href="javascript:void(interijer.show(0))">Sobe</a> | <a href="javascript:void(bazen.show(0))">Bazen</a> | <a href="javascript:void(terasa.show(0))">Terasa</a> | <a href="javascript:void(vrt.show(0))">Vrt</a>

            </p>

			<hr>
			
			
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
<div id="txtHint"><b>Informacije o odabranoj galeriji biti će prikazane ovdje.</b></div><br>


<h3>Nove galerije</h3>
<p>
<a href="skulptura.php">Skulptura</a> | <a href="priroda.php">Priroda</a>
</p>			
			
			
            <span class="left"><img src="style/kip.jpg" alt="example graphic" /></span>

				

        </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
        Copyright &copy; Matija Risek | <a href="https://www.facebook.com/matija.risek">Facebook</a> | <a href="http://www.w3schools.com/">W3Schools</a> | <a href="http://www.general-turist.com/">GeneralTurist</a><div id="txt"></div>
    </div>
  </div>
</body>
</html>
