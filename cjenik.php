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
			echo "<li class=\"selected\"><a href=\"" . $row['linkNavigacija'] . "\">" . $row['nazivNavigacija'] . "</a></li>";
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




            <h1>Cjenik</h1>
            <p>Valuta naplate je kuna. Cijene su podložne promjenama u bilo koje vrijeme bez prethodne obavijesti, a ovisno o promjenama tečaja. Konačna cijena će biti izračunata na dan rezervacije. Istaknute cijene smještaja su bez uračunatog PDV-a i boravišne pristojbe.</p>


			
			<hr />
			
			<h2>Cijene smještaja</h2>


<?php
//make connection
$con=mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');

$sql="SELECT * FROM Soba";

$records=mysql_query($sql);
?>

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

mysql_close($con);
?>

</table>
			
			
			
            <hr />
            <h2>Dodatni sadržaji</h2>
            <ul>
                <li>Nogometni teren: 60,00 kn - 1h</li>
                <li>Teniski teren: 60,00 kn - 1h</li>
                <li>Bazen: 30,00 kn - 1h</li>
                <li>Ležaljka: 15,00 kn - 1h</li>
                <li>Za kućne ljubimce: 50,00 kn po danu</li>
                <li>Parking: 30,00 kn po danu</li>
                <li>Klima: 75,00 kn po danu</li>
                <li>Pogled na more: 75,00 kn po danu</li>
                <li>Sef na recepciji: 10,00 kn po danu</li>
                <li>Boravišna pristojba: 7,00 kn po danu</li>
            </ul>


            <hr />
			
            <h2>Kalkulator</h2>

            <!-- Kalkulator - JavaScript -->
            <table class="calculator" id="calc">
                <tr>
                    <td colspan="4" class="calc_td_result">
                        <input type="text" readonly="readonly" name="calc_result" id="calc_result" class="calc_result" onkeydown="javascript:key_detect_calc('calc',event);" />
                    </td>
                </tr>
                <tr>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="CE" onclick="javascript:f_calc('calc','ce');" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&larr;" onclick="javascript:f_calc('calc','nbs');" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="%" onclick="javascript:f_calc('calc','%');" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="+" onclick="javascript:f_calc('calc','+');" />
                    </td>
                </tr>
                <tr>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="7" onclick="javascript:add_calc('calc',7);" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="8" onclick="javascript:add_calc('calc',8);" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="9" onclick="javascript:add_calc('calc',9);" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="-" onclick="javascript:f_calc('calc','-');" />
                    </td>
                </tr>
                <tr>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="4" onclick="javascript:add_calc('calc',4);" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="5" onclick="javascript:add_calc('calc',5);" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="6" onclick="javascript:add_calc('calc',6);" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="x" onclick="javascript:f_calc('calc','*');" />
                    </td>
                </tr>
                <tr>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="1" onclick="javascript:add_calc('calc',1);" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="2" onclick="javascript:add_calc('calc',2);" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="3" onclick="javascript:add_calc('calc',3);" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&divide;" onclick="javascript:f_calc('calc','');" />
                    </td>
                </tr>
                <tr>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="0" onclick="javascript:add_calc('calc',0);" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&plusmn;" onclick="javascript:f_calc('calc','+-');" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="," onclick="javascript:add_calc('calc','.');" />
                    </td>
                    <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="=" onclick="javascript:f_calc('calc','=');" />
                    </td>
                </tr>
            </table>
            <script type="text/javascript">
                document.getElementById('calc').onload = init_calc('calc');
            </script>



        </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
        Copyright &copy; Matija Risek | <a href="https://www.facebook.com/matija.risek">Facebook</a> | <a href="http://www.w3schools.com/">W3Schools</a> | <a href="http://www.general-turist.com/">GeneralTurist</a><div id="txt"></div>
    </div>
  </div>
</body>
</html>
