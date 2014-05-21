<?php
include("vendor/autoloader.php");

use ResellerClub\API\APICaller as RClubAPI;

$apihost = "https://test.httpapi.com/api/";
$authid = "78536";
$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate


$apicaller = new RClubAPI($apihost, $authid);
$apicaller->setAuth('apikey', $apikey); // if using API Key
//$apicaller->setAuth('password', $password); // if using Password


///// EXAMPLES BELOW - Uncomment the section to run



// Get Domain Availability
$domain_availability = $apicaller->domain()->checkAvailability(array (
					'domain-name' => 'netfundaz',
					'tlds' => 'com',
					'suggest-alternative' => true,
));
print_r ($domain_availability);





/*
// Get Domain Suggestions
$domain_suggestions = $apicaller->domain()->suggestDomains(array (
					'keyword' => 'AjayKumarGupta',
					'tlds' => array('com','net'),
					'no-of-results' => 100,
					'hyphen-allowed' => true,
					'add-related' => true,
));
print_r ($domain_suggestions);

*/


/*

// Validate Domain Transfer Request
$dom_transfer_req = $apicaller->domain()->validateTransferRequest(array (
						'domain-name' => 'netfunda.com',
));
print_r($dom_transfer_req);
*/


/*

 // Create Customer Account
$customer_reg = $apicaller->customer()->createAccount(array (
					'username' => 'ssrahman@netfunda.com',
					'passwd' => 'India123',
					'name' => 'Shayanur Rahman',
					'company' => 'Netfunda Technologies',
					'address-line-1' => 'B88',
					'address-line-2' => 'Sector 64',
					'city' => 'Noida',
					'state' => '1741',
					'country' => 'IN',
					'zipcode' => '201301',
					'phone-cc' => '91',
					'phone' => '9911755171',
					'lang-pref' => 'en'
));
echo $customer_reg; 

*/



/*
 // Modify Customer Details
$customer_mod = $apicaller->customer()->modifyCustomer(array (
					'customer-id' => '595691',
					'username' => 'ssrahman@netfunda.com',
					'name' => 'S.S. Rahman',
					'company' => 'Netfunda Technologies',
					'address-line-1' => 'B88',
					'address-line-2' => 'Sector 64',
					'city' => 'Noida',
					'state' => 'UP',
					'country' => 'IN',
					'zipcode' => '201301',
					'phone-cc' => '91',
					'phone' => '9911755171',
					'lang-pref' => 'en'
));
echo $customer_mod; 

*/


?>