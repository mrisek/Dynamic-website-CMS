<?php
// Fill up array with names
$a[]="Amerika";
$a[]="Britanija";
$a[]="Cipar";
$a[]="Danska";
$a[]="Estonija";
$a[]="Francuska";
$a[]="Gana";
$a[]="Hrvatska";
$a[]="Italija";
$a[]="Japan";
$a[]="Kina";
$a[]="Litva";
$a[]="Nizozemska";
$a[]="Oman";
$a[]="Poljska";
$a[]="Argentina";
$a[]="Rusija";
$a[]="Crna Gora";
$a[]="Slovenija";
$a[]="Egipat";
$a[]="Austrija";
$a[]="Bosna i Hercegovina";
$a[]="Srbija";
$a[]="Tunis";
$a[]="Venecuela";
$a[]="Libija";
$a[]="Engleska";
$a[]="Luksemburg";
$a[]="Wales";
$a[]="Vicky";

// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
  $q=strtolower($q); $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name,0,$len))) {
      if ($hint==="") {
        $hint=$name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint were found
// or output the correct values 
echo $hint==="" ? "Nema sugestija..." : $hint;
?>