<?php

include("vendor/autoloader.php");

use ResellerClub\API\APICaller as RClubAPI;

$apihost = "https://test.httpapi.com/api/";

$authid = "501535";
$apikey = "LIlLJGvlqBhFdSO7nSNatdE0lGozb0oy";

//$authid = "78536";
//$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate


$apicaller = new RClubAPI($apihost, $authid);
$apicaller->setAuth('apikey', $apikey); // if using API Key
//$apicaller->setAuth('password', $password); // if using Password
///// EXAMPLES BELOW - Uncomment the section to run




  /*
  //STARTING POSITION OF CONTACTS



  //Adds a Contact to the domain using the details provided.
  $data_contact = $apicaller->contact()->addContact(array (
  'name' => 'srikanta',
  'company' => 'netfunda',
  'email' => 'sjaj@hs.com',
  'address-line-1' => 'ahsdh',
  'city' => 'hjah',
  'country' => 'US',
  'zipcode' => '343443',
  'phone-cc' => '91',
  'phone' => '98800417876',
  'customer-id' => '10701373',
  'type' => 'Contact'
  ));
  print_r($data_contact);



//Modifies the details of the specified Contact.
$modify_contact = $apicaller->contact()->modifyContact(array(
    'contact-id' => '36411094',
    'name' => 'srikanta',
    'company' => 'netfunda',
    'email' => 'sjaj@hs.com',
    'address-line-1' => 'ahsdh',
    'address-line-2' => 'ahsdh',
    'city' => 'hjah',
    'country' => 'US',
    'zipcode' => '343443',
    'phone-cc' => '91',
    'phone' => '98800417876',
        ));
print_r($modify_contact);



	 //Gets the details for the specified Contact.
$dataGettingContactDetails = $apicaller->contact()->gettingContactDetails(array(
   'contact-id' => '36411094'
        ));
print_r($dataGettingContactDetails);


  
   //  Gets the Contact Details of the Contacts that match 
   //  the Search criteria.
     
$srch_contact_details = $apicaller->contact()->searchingContactDetails(array(
    'contact-id' => '36411094',
    'customer-id' => '10701373',
    'phone' => '98800417876',
    'no-of-records' => '10',
    'page-no' => '1'
        ));
print_r($srch_contact_details);

 

    //Gets the details of the Default Contacts for the Customer.
     
$default_contact_details = $apicaller->contact()->gettingDefaultContactDetails(array(
    'customer-id' => '10701373',
    'type' => 'Contact'
        ));
print_r($default_contact_details);


//Associates mandatory extra details with the specified Contact to register 
     
$extra_details = $apicaller->contact()->addExtraDetailsToRegister(array(
'contact-id' => '36411094',
    'attr-name1' => 'sponsor1',
    'attr-value1' => '0',
    'product-key' => 'dotcoop',
        ));
print_r($extra_details);


 //Deletes the specified Contacts    
$del_contact = $apicaller->contact()->deleteContact(array(
    'contact-id' => '36411094'
        ));
print_r($del_contact);


//Adds a Sponsor (Co-operative Reference) for a specified Customer  
$dataCoopSponsor = $apicaller->contact()->addingCoopSponsor(array(
    'name' => 'srikanta',
    'company' => 'netfunda',
    'email' => 'sjaj@hs.com',
    'address-line-1' => 'ahsdh',
    'city' => 'hjah',
    'country' => 'US',
    'zipcode' => '343443',
    'phone-cc' => '91',
    'phone' => '98800417876',
    'customer-id' => '10701373',
        ));
print_r($dataCoopSponsor);



//Gets a list of system default .COOP Sponsors
$dataForgettingCoopSponsor = $apicaller->contact()->gettingCoopSponsor(array(
    'customer-id' => '10701373'
        ));
print_r($dataForgettingCoopSponsor);




//Gets the Registrant Agreement mandated by the Canadian 
$data = $apicaller->contact()->gettingCARegistrantAgreement(array());
print_r($data);



//Validates the Registrant Contact(s) eligibility criteria(s) provided
$dataValidatingRegistrationContact = $apicaller->contact()->ValidatingRegistrationContact(array(
    'contact-id' => '10701373',
    'eligibility-criteria'=>'CED_ASIAN_COUNTRY',
        ));
print_r($dataValidatingRegistrationContact);

//END OF ALL CONTACT FUNCTIONS

*/

?>