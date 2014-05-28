<?php

include("vendor/autoloader.php");


//replace Product in the below line with the class you want to test.


 use ResellerClub\Tests\DomainTest as RClubAPI;



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

//$apicaller->checkAvailability();
//$apicaller->suggestDomains();
//$apicaller->validateTransferRequest();
//$apicaller->renewsDomainRegistration();
//$apicaller->DomainRegistrationOrders();
//$apicaller->getSeverNameOfCustomer();
//$apicaller->orderIdAgainstDomain();
//$apicaller->detailOfDomainRegistration();
//$apicaller->detailOfSpecifiedDomain();
//$apicaller->modifyServerName();
//$apicaller->addChildNameServer();
//$apicaller->modifyHostNameChild();
//$apicaller->modifyIPAddressChildServeName();
//$apicaller->deleteIPAddressChildName();
//$apicaller->modifySpecifiedDomainContacts();
//$apicaller->renewPrivacyDomain();
//$apicaller->modifyPrivacyProcDomain();
//$apicaller->modifyAuthCodeProcDomain();
//$apicaller->theftProtectionLock();
//$apicaller->disableTheftProtectionLock();
//$apicaller->listLockDomain();
//$apicaller->CTHLoginDetails();
//$apicaller->modifyTelDomain();
//$apicaller->resendMailOrder();
    //$apicaller->releaseUKDomain();
//$apicaller->cancelTransferOrder();
//$apicaller->suspend();
//$apicaller->Unsuspend();
//$apicaller->delete();
//$apicaller->restore();
//$apicaller->recheckNS();
//$apicaller->DotXXXAssociationDetails();
//$apicaller->addDSRecord();
//$apicaller->deleteDSRecord();
//$apicaller->resendVerification();
//$apicaller->addPreRegistrationOrder();
//$apicaller->deletePreRegistrationOrder();
//$apicaller->fetchPreRegistrationWishlist();
//$apicaller->fetchPreRegistrationTLDs();
//$apicaller->checkAvailabilitySunRise();
//$apicaller->fetchTMNotice();
//$apicaller->fetchTLDSunRise();






























//
//include("vendor/autoloader.php");
//
//use ResellerClub\API\APICaller as RClubAPI;
//
//$apihost = "https://test.httpapi.com/api/";
//
//$authid = "501535";
//$apikey = "LIlLJGvlqBhFdSO7nSNatdE0lGozb0oy";
//
////$authid = "78536";
////$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
////$password = "mypwd"; // If you want to use your password to authenticate
//
//
//$apicaller = new RClubAPI($apihost, $authid);
//$apicaller->setAuth('apikey', $apikey); // if using API Key
//$apicaller->setAuth('password', $password); // if using Password
///// EXAMPLES BELOW - Uncomment the section to run


/*
 //STARTING POSITION Functions Of DOMAIN
 
 
  // Get Domain Availability
  $domain_availability = $apicaller->domain()->checkAvailability(array (
  'domain-name' => 'netfundaz',
  'tlds' => 'com',
  'suggest-alternative' => true,
  ));
  print_r ($domain_availability); */





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






  // Validate Domain Transfer Request
  $dom_transfer_req = $apicaller->domain()->validateTransferRequest(array (
  'domain-name' => 'netfunda.com',
  ));
  print_r($dom_transfer_req);


  //Renew Domain Registration
  $dom_renew_reg = $apicaller->domain()->renewsDomainRegistration(array (
  'order-id' => '54761757',
  'years' => '1',
  'exp-date' => '1279012036',
  'invoice-option' => 'NoInvoice',
  ));
  print_r($dom_renew_reg);




  //Gets a list of Domain Registration Orders
  $dom_reg_orders = $apicaller->domain()->DomainRegistrationOrders(array (
  'no-of-records' => '10',
  'page-no' => '1',

  ));
  print_r($dom_reg_orders);



  //Gets the default Name Servers of the specified Customer
  $customer_data = $apicaller->domain()->getSeverNameOfCustomer(array (
  'customer-id' => '10704470',

  ));
  print_r($customer_data);




  //Gets the Order Id of a Registered domain name.
  $domain_name_data = $apicaller->domain()->orderIdAgainstDomain(array (
  'domain-name' => 'rtrtyhtyty.com',

  ));
  print_r($domain_name_data);




  //Gets details of the Domain Registration Order associated with the specified Order Id.

  $details_domain= $apicaller->domain()->detailOfDomainRegistration(array (
  'order-id' => '53223912',
  'options' => 'OrderDetails',
  ));
  print_r($details_domain);



  // Gets details of the Domain Registration
  // Order associated with the specified domain name.

  $domain_data = $apicaller->domain()->detailOfSpecifiedDomain(array (
  'domain-name' => 'rtrtyhtyty.com',
  'options' => 'OrderDetails',
  ));
  print_r($domain_data);


  //Modifies the Name of Server

  $modify_data = $apicaller->domain()->modifyServerName(array (
  'order-id' => '54761757',
  'ns' => 'sdfsdf.hh',
  ));
  print_r($modify_data);




  //8.Adds Child Name of Servers

  $child_name = $apicaller->domain()->addChildNameServer(array (
  'order-id' => '54761757',
  'cns' => 'hgj.rtrtyhtyty.com',
  'ip' => 'rtrtyhtyty.com',
  ));
  print_r($child_name);





  //9.Modify Host Name Of Child

  $host_name = $apicaller->domain()->modifyHostNameChild(array (
  'order-id' => '54761757',
  'old-cns' => 'sdfsdf.jj',
  'new-cns' => 'dsdf.jj',
  ));
  print_r($host_name);



  //10.Modifies the IP address associated with the specified Child Name

  $modify_ip_addrs = $apicaller->domain()->modifyIPAddressChildServeName(array (
  'order-id' => '54761757',
  'cns' => 'sdfsdf.jj',
  'old-ip' => 'dfgfg.com',
  'new-ip' => 'sdfsd.gg',
  ));
  print_r($modify_ip_addrs);
 




  //Deletes the IP address CHILD NAME

  $delete_ip_addrs = $apicaller->domain()->deleteIPAddressChildName(array (
  'order-id' => '54761757',
  'cns' => 'sdfsdf.jj',
  'ip' => 'ajaukj.com',
  ));
  print_r($delete_ip_addrs);




  //Modifies the Contacts of the specified Domain Registration Order.

  $modify_details = $apicaller->domain()->modifySpecifiedDomainContacts(array (
  'order-id' => '54761757',
  'reg-contact-id' => '0',
  'admin-contact-id' => '0',
  'tech-contact-id' => '0',
  'billing-contact-id' => '0',
  ));
  print_r($modify_details);






//Adds or Renews the Privacy Protection of domain

  $renew_domain = $apicaller->domain()->renewPrivacyDomain(array (
  'order-id' => '54761757',
  'invoice-option' => 'NoInvoice',
 
  ));
  print_r($renew_domain);



//Changes the Privacy Protection 

  $modify_pp = $apicaller->domain()->modifyPrivacyProcDomain(array (
  'order-id' => '54761757',
  'protect-privacy' => 'true',
  'reason' => 'somereason',
 
  ));
  print_r($modify_pp);



// Modifies the Auth-Code of the specified Domain Registration Order 

  $modify_ad = $apicaller->domain()->modifyAuthCodeProcDomain(array (
  'order-id' => '54761757',
  'auth-code' => 'a2@ ',
 
  ));
  print_r($modify_ad);



//Applies the Theft Protection Lock on the specified Order

  $thept_lock = $apicaller->domain()->theftProtectionLock(array (
  'order-id' => '54761757',
 
  ));
  print_r($thept_lock);




//Disables the Theft Protection Lock on the specified order

  $dis_thept_lock = $apicaller->domain()->disableTheftProtectionLock(array (
  'order-id' => '54761757',
 
  ));
  print_r($dis_thept_lock);


// Gets the list of the Locks specified Domain Registration

  $list_lock_domain = $apicaller->domain()->listLockDomain(array (
  'order-id' => '54761757',
 
  ));
  print_r($list_lock_domain);



//  GGets the CTH Login Details for the specified 

  $cth_details = $apicaller->domain()->CTHLoginDetails(array (
  'order-id' => '54761757',
 
  ));
  print_r($cth_details);


//  Modifies the Whois Preference of the .TEL Domain Registration Order.

  $modify_tel = $apicaller->domain()->modifyTelDomain(array (
  'order-id' => '54761757',
  'whois-type' => 'Legal'
 
  ));
  print_r($modify_tel);

  
  // Resends the Transfer Approval Mail for the specified Order.

  $rmail = $apicaller->domain()->resendMailOrder(array (
  'order-id' => '54761757',
 
  ));
  print_r($rmail);
  
 
 
 //Releases (transfers out) the specified .UK domain name to the specified Registrar..

  $rUKDomain = $apicaller->domain()->releaseUKDomain(array (
  'order-id' => '54761757',
  'new-tag' => 'newregistrartag',
 
  ));
  print_r($rUKDomain); 
  

 
// Cancels the Transfer-In Order that is awaiting Admin approval.trar

  $c_order = $apicaller->domain()->cancelTransferOrder(array (
  'order-id' => '54761757',
 
  ));
  print_r($c_order);




// Suspend order

  $c_order = $apicaller->domain()->suspend(array (
  'order-id' => '54792315',
  'reason' => 'no reason',
 
  ));
  print_r($c_order);




// UnSuspend order

  $c_order = $apicaller->domain()->Unsuspend(array (
  'order-id' => '54792315',
  ));
  print_r($c_order);




// Deletes the specified Domain Registration Order.

  $data = $apicaller->domain()->delete(array (
  'order-id' => '54792315',
  ));
  print_r($data);




//Restores the specified Domain Registration Order.

  $data = $apicaller->domain()->restore(array (
  'order-id' => '54792315',
  'invoice-option' => 'KeepInvoice',
  ));
  print_r($data);


 


//Recheck zone configuration with .DE Registry of the expired .DE Domain Registration order.

  $data = $apicaller->domain()->recheckNS(array (
  'order-id' => '54792315',
  ));
  print_r($data);



// Allows associating/dissociating the Membership Token/ID provided by the .XXX Registry, 
  //        to a Domain Registration Order.
  $data = $apicaller->domain()->DotXXXAssociationDetails(array (
  'order-id' => '54792315',
 'association-id' => '54761757',
  ));
  print_r($data);




// Adds a Delegation Signer (DS) Record for a Domain Registration Order.
  $data = $apicaller->domain()->addDSRecord(array (
  'order-id' => '54792315',
 'attr-name1' => 'keytag',
 'attr-value1' => '123',
 'attr-name2' => 'algorithm',
 'attr-value2' => '3',
 'attr-name3' => 'digesttype',
 'attr-value3' => '1',
 'attr-name4' => 'digest',
 'attr-value4' => '49FD46E6C4B45C55D4AC49FD46E6C4B45C55D111',
  ));
  print_r($data);




//  delete a Delegation Signer (DS) Record for a Domain Registration Order.
  $data = $apicaller->domain()->deleteDSRecord(array (
 'order-id' => '54792315',
 'attr-name1' => 'keytag',
 'attr-value1' => '123',
 'attr-name2' => 'algorithm',
 'attr-value2' => '3',
 'attr-name3' => 'digesttype',
 'attr-value3' => '1',
 'attr-name4' => 'digest',
 'attr-value4' => '49FD46E6C4B45C55D4AC49FD46E6C4B45C55D111',
  ));
  print_r($data);



//  dResends the verification email to the Registrant Contact Email Address for the specified Domain Registration Order.
  $data = $apicaller->domain()->resendVerification(array (
  'order-id' => '54792315',
  ));
  print_r($data);




//  RAdds a Pre-Registration Order for the specified Domain Name(s).
  $data = $apicaller->domain()->addPreRegistrationOrder(array (
  'customerid' => '10693064',
  'domain' => 'mrinmoy.com',
  ));
  print_r($data);


// Deletes the Pre-Registration Order for the specified Domain Name(s).
  $data = $apicaller->domain()->deletePreRegistrationOrder(array (
  'customerid' => '10693064',
  'domain' => 'mrinmoy.com',
  ));
  print_r($data);



//  Fetches the Pre-Registration Wishlist.
  $data = $apicaller->domain()->fetchPreRegistrationWishlist(array (
  'no-of-records' => '10',
  'page-no' => '1',
  ));
  print_r($data);




// Fetches the TLDs for the specified Category.
  $data = $apicaller->domain()->fetchPreRegistrationTLDs(array (
  'category' => 'services',
  ));
  print_r($data);


  
  // Checks the availability of the specified Domain Name(s) in the Sunrise Phase.
  $data = $apicaller->domain()->checkAvailabilitySunRise(array (
  'domainname' => 'mrinmoy.com',
  'tld' => 'bike',
  'smd' => 'fdgdf',
  ));
  print_r($data);

 
// Fetches the Trademark Claim Data, based on the Trademark Claim Key.
  $data = $apicaller->domain()->fetchTMNotice(array (
  'lookup-key' => 'claim-key',//not getting claim-key
  ));
  print_r($data);
 
 

 // Fetches the list of TLDs currently in the Sunrise / Landrush Period
  $data = $apicaller->domain()->fetchTLDSunRise(array (
  'phase' => 'sunrise',
 
  ));
  print_r($data);

//END OF DOMAIN FUNCTIONS




  */


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