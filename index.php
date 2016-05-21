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

<body onload="startTime()">  <!-- Sat(tajmer) - JavaScript - startTime() -->

  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">


          <!-- class="logo_colour", allows you to change the colour of the text -->

          <h1><a href="index.php">Hotel<span class="logo_colour">Opatija</span></a></h1>
          <h2> Ljetovanje. Odmor. Sport & Priroda.</h2>
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
			echo "<li class=\"selected\"><a href=\"" . $row['linkNavigacija'] . "\">" . $row['nazivNavigacija'] . "</a></li>";
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
		
		
		
		<hr>	  
			
			
			<h3>PDF Download</h3>	
<!-- START: Save page as PDF Script -->

<a href="http://pdf-ace.com/pdfme" target="_blank"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-6.gif" width="46" height="24" alt="Download as PDF" /></a>

<!-- END: Save page as PDF Script -->
			  
			  
		  </div>
      <div id="content">
        <!-- insert the page content here -->
		
		<!-- CMS Članci -->

<?php
$con=mysqli_connect("localhost","mrisek_000002","313007875","mrisek_000002");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Clanak");

while($row = mysqli_fetch_array($result)) {
  echo "<h2>" . $row['naslovClanak'] . "</h2><h5>" . $row['datumClanak'] . "</h5><p>" . $row['slikaClanak'] . $row['sadrzajClanak'] . "</p>";
  echo "<hr>";
}

mysqli_close($con);
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
		