<?php
date_default_timezone_set("Europe/Amsterdam");
$today = date("l j F Y");
echo "vandaag is het: $today";

echo "<br>";

$jaardag = date("z");
echo "het is vandaag de $jaardag dag van het jaar"; 

echo"<br>";

$dagweek = date("w");
$dag = date("l");
echo "$dag is de $dagweek dag van de week";

echo "<br>";

$month = date("F");
$daysinmonth = date("t");
echo "de maand, $month heeft $daysinmonth dagen";

echo"<br>";

$loop = date("L");
if($loop==0){
   echo "het is geen schrikkeljaar";
}
else{
   echo "het is een schrikkeljaar";
}




?>