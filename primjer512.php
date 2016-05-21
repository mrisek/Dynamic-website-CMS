<?php
$baza=mysql_connect("sql113.byethost12.com","b12_15026823","letfuck6","b12_15026823_baza")
mysql_select_db("Kontakt");
$date=localtime();
$date[5]+=1900;
$date[4]+=1;
$datum="$date[5]-$date[4]-$date[3]
$date[2]:$date[1]:$date[0]";

if($vrsta="pro")
$v="prodaja";

else $v="kupnja";

$upit="insert into Kontakt (idKontakt, imeKontakt, prezimeKontakt, emailKontakt, porukaKontakt) values("$v", "$imeIprezime", "$email", "$poruka", "$v")";
$rezultat1=mysql_query($upit);
mysql_close($baza);
?>