<?php
// this is where you include the code that gets the country
// you can find the code for this file on the link below    
include("geoiploc.php");

$ip = $_SERVER['REMOTE_ADDR'];
//$ip = "151.135.120.0";

// this is where you create the variable that get you the name of the country
$country = getCountryFromIP($ip, " Name ");
echo $country;

?>
