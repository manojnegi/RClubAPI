<?php
/*
This indextest.php file is used to test the various classes of the library .

*/

include("vendor/autoloader.php");


//replace Product in the below line with the class you want to test.
use ResellerClub\Tests\ProductTest as RClubAPI;



$apihost = "https://test.httpapi.com/api/";
$authid = "78536";
$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate



$apicaller = new RClubAPI($apihost, $authid,$apikey);






///// EXAMPLES BELOW - Uncomment the section to run






//just call the function of the class you want to test.
$apicaller->move() ;




?>