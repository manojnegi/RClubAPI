<?php

include("vendor/autoloader.php");


//replace Product in the below line with the class you want to test.


 use ResellerClub\Tests\ContactTest as RClubAPI;



//$apihost = "https://test.httpapi.com/api/";
//$authid = "78536";
//$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate

//Ajay's  Account API key details
$apihost = "https://test.httpapi.com/api/";
$authid = "501535";
$apikey = "LIlLJGvlqBhFdSO7nSNatdE0lGozb0oy";


$apicaller = new RClubAPI($apihost, $authid,$apikey);






///// EXAMPLES BELOW - Uncomment the section to run






//just call the function of the class you want to test.
//$apicaller->move() ;


//VPSLinux Plans=>

//$apicaller->addContact();
//$apicaller->modifyContact();
//$apicaller->gettingContactDetails();
//$apicaller->searchingContactDetails();
//$apicaller->addExtraDetailsToRegister();
//$apicaller->gettingDefaultContactDetails();
//$apicaller->deleteContact();
//$apicaller->addingCoopSponsor();
//$apicaller->gettingCoopSponsor();
//$apicaller->gettingCARegistrantAgreement();
//$apicaller->ValidatingRegistrationContact();







?>