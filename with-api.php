<?php
// PHP code to obtain country, city,
// continent, etc using IP Address

$ip = '52.25.109.230';


//https://www.geoplugin.com/geodata.php?&ip=103.216.56.138

// Use JSON encoded string and converts
// it into a PHP variable
$ipdat = @json_decode(file_get_contents(
	"http://www.geoplugin.net/json.gp?ip=" . $ip));

echo "<pre>";
print_r($ipdat);

echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n";
echo 'City Name: ' . $ipdat->geoplugin_city . "\n";

?>
