<?php
 $mysqli = new mysqli("localhost", "mrisek_000002", "313007875", "mrisek_000002");
      if ($mysqli->connect_errno) {
        die ('Greška sa spajanjem na bazu: ' . $mysqli->connect_error);
      }
      $mysqli->set_charset("utf8");

    function mysql_pripremi ($vrijednost) {
        $vrijednost=trim($vrijednost);
        $magicQuotes_aktivan=get_magic_quotes_gpc();
		GLOBAL $mysqli;
        //magic quotes je deprecated od verzije 5.3.0
        //funkcija vraæa 0 ili 1 ovisno o tome da li je MQ ukljuèen
        //ako je ukljuèen magic quotes tada se sva ' " \ automatski iskljuèuju sa backslashom
        $najnovijaVerzijaPHPa=function_exists('mysqli_real_escape_string');
		$novaVerzijaPHPa=function_exists('mysql_real_escape_string');
        //želimo provjeriti da li postoji funkcija koja radi real escape
        //ako postoji želimo koristiti real escape umjesto magic quotes
        if ($najnovijaVerzijaPHPa) {
			//ako je nova verzija PHP-a i ukljuèen je MQ želimo ga iskljuèiti, maknuti sve njegove efekte
            if ($magicQuotes_aktivan) { $vrijednost= stripcslashes($vrijednost); }
            //koristiti real escape string
            $vrijednost=$mysqli->real_escape_string($vrijednost);
			
			}
		else if ($novaVerzijaPHPa) {
            //ako je nova verzija PHP-a i ukljuèen je MQ želimo ga iskljuèiti, maknuti sve njegove efekte
            if ($magicQuotes_aktivan) { $vrijednost= stripcslashes($vrijednost); }
            //koristiti real escape string
            $vrijednost=mysqli_real_escape_string($vrijednost);
            
        } else {
            //ako nije ukljuèeno ni jedno ni drugo
            if (!$magicQuotes_aktivan) {$vrijednost=addslashes($vrijednost);}
        }
		return $vrijednost;
    }

?>