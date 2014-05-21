<?php


include("vendor/autoloader.php");

use ResellerClub\Tests\ProductTest as RClubAPI;

$apihost = "https://test.httpapi.com/api/";
$authid = "78536";
$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate


$apicaller = new RClubAPI($apihost, $authid,$apikey);


///// EXAMPLES BELOW - Uncomment the section to run







$domain_availability = $apicaller->checkAvailability()
print_r ($domain_availability);



?>