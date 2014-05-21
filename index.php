<?php
include("vendor/autoloader.php");

use ResellerClub\API\APICaller as RClubAPI;

$apihost = "https://test.httpapi.com/api/";
$authid = "501535";
$apikey = "LIlLJGvlqBhFdSO7nSNatdE0lGozb0oy"; // replace this with your token
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
					'username' => 'mrinmoy.mukherjee@netfunda.com',
					'passwd' => 'Mrinmoy123',
					'name' => 'Mrinmoy Mukherjee',
					'company' => 'Netfunda Technologies',
					'address-line-1' => 'Mamura',
					'address-line-2' => 'Sector 66',
					'city' => 'Noida',
					'state' => '1741',
					'country' => 'IN',
					'zipcode' => '201301',
					'phone-cc' => '91',
					'phone' => '8527808137',
					'lang-pref' => 'en'
));
echo $customer_reg; 
*/



/*

 // Modify Customer Details
$customer_mod = $apicaller->customer()->modifyCustomer(array (
					'customer-id' => '11181135',
					'username' => 'mrinmoy.mukherjee@netfunda.com',
					'name' => 'Mrinmoy Mukherjee',
					'company' => 'Netfunda Technologies',
					'address-line-1' => 'B88',
					'address-line-2' => 'Sector 64',
					'city' => 'Noida',
					'state' => 'UP',
					'country' => 'IN',
					'zipcode' => '201301',
					'phone-cc' => '91',
					'phone' => '9876543210',
					'lang-pref' => 'en'
));
echo $customer_mod; 

*/



/*
//Fetch Customer Details By UserName
$customer_by_username=$apicaller->customer()->fetchCustomerByUserName(array (
                                              'username' => 'mrinmoy.mukherjee@netfunda.com'));
echo"<pre>";
print_r($customer_by_username);
echo"</pre>";
*/


/*
//Fetch Customer Details By Id
$customer_by_id=$apicaller->customer()->fetchCustomerById(array (
                                              'customer-id' => '11181135'));
echo"<pre>";
print_r($customer_by_id);
echo"</pre>";
*/


/*
//Generate Token 
$generate_token=$apicaller->customer()->tokenGenerate(array (
                                              'username' => 'mrinmoy.mukherjee@netfunda.com',
                                              'passwd' => 'Mrinmoy123',
                                               'ip' => '192.168.1.13'
    ));
echo"<pre>";
echo "$generate_token";
echo"</pre>";
*/

/*
//Authenticate Token 
$authenticate_token=$apicaller->customer()->authenticateToken(array (
                                              'token' => '06zIRepD',
                                              
    ));
echo"<pre>";
echo "$authenticate_token";
echo"</pre>";
*/


/*
//Change Password
$change_password=$apicaller->customer()->changePassword(array (
                                              'customer-id' => '11181135',
                                              'new-passwd' => 'Mri123456',
                                              
    ));
echo"<pre>";
echo "$change_password";
echo"</pre>";
*/


/*
//Temporary Password
$temp_password=$apicaller->customer()->tempPassword(array (
                                              'customer-id' => '11181135'
                                              
                                              
    ));
echo"<pre>";
echo "$temp_password";
echo"</pre>";
*/

/*
//Search Customer
$search_customer=$apicaller->customer()->searchCustomer(array (
                                              'no-of-records' => '10',
                                               'page-no' => '1'
                                              
                                              
    ));
echo"<pre>";
echo "$search_customer";
echo"</pre>";
*/




/*
//Delete Customer
$delete_customer=$apicaller->customer()->deleteCustomer(array (
                                              'customer-id' => '11180284'
                                              
                                              
                                              
    ));
echo"<pre>";
echo "$delete_customer";
echo"</pre>";
*/

/*
//Customer Pricing
$customer_price=$apicaller->pricing()->customerPrice(array('customer-id'=>'11181135'));
echo"<pre>";
print_r ($customer_price);
echo"</pre>";
*/

/*
//Reseller Pricing
$reseller_price=$apicaller->pricing()->resellerPrice(array ());
echo"<pre>";
print_r($reseller_price);
echo"</pre>";
*/

/*
//Reseller Cost Pricing
$reseller_cost_price=$apicaller->pricing()->resellerCostPrice(array ());
echo"<pre>";
print_r($reseller_cost_price);
echo"</pre>";
*/

/*
//Curency
$currency=$apicaller->general()->currency(array());
echo"<pre>";
print_r ($currency);
echo"</pre>";
*/


/*
//Country
$country=$apicaller->general()->country(array());
echo"<pre>";
print_r ($country);
echo"</pre>";
*/

/*
//State
$state=$apicaller->general()->state(array('country-code'=>'IN'));
echo"<pre>";
print_r ($state);
echo"</pre>";
*/


/*
//Transaction Details For Customer
$transaction_details=$apicaller->billing()->transactionDetails(array('transaction-ids'=>'43491977'
                                                                      
    ));
echo"<pre>";
print_r ($transaction_details);
echo"</pre>";
*/

/*
//Transaction Details For Sub-Reseller
$transaction_details_subreseller=$apicaller->billing()->transactionDetailsSubReseller(array('transaction-ids'=>'61386715'
                                                                      
    ));
echo"<pre>";
print_r ($transaction_details_subreseller);
echo"</pre>";
*/

/*
//Greedy Transaction Details For Customer
$greedy_transaction_details_customer=$apicaller->billing()->greedyTransactionDetails(array('customer-id'=>'11178171'
                                                                      
    ));
echo"<pre>";
print_r ($greedy_transaction_details_customer);
echo"</pre>";
*/

/*
//Greedy Transaction Details For Sub-Reseller
$greedy_transaction_details_subreseller=$apicaller->billing()->greedyTransactionDetailsSubReseller(array('reseller-id'=>'527945'
                                                                      
    ));
echo"<pre>";
print_r ($greedy_transaction_details_subreseller);
echo"</pre>";
*/


/*
//Pay Customer Transaction (No Invoice id,so result can't be seen)
$pay_customer=$apicaller->billing()->payCustomer(array('invoice-ids'=>'43496951'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
*/


/*
//Pay Customer Transaction (No Invoice id,so result can't be seen)
$customer_available_balance=$apicaller->billing()->customerAvailableBalance(array('customer-id'=>'11178171'
                                                                      
));
echo"<pre>";
print_r ($customer_available_balance);
echo"</pre>";
*/

/*
//Order without payment execution
$owp=$apicaller->billing()->orderWithoutPayment(array('invoice-ids'=>'43496951','cancel-invoice'=>'true'
                                                                      
));
echo"<pre>";
print_r ($owp);
echo"</pre>";
*/

/*
//Customer Transaction search
$customer_transaction=$apicaller->billing()->searchTransactionCustomer(array('no-of-records'=>'10','page-no'=>'1'
                                                                      
));
echo"<pre>";
print_r ($customer_transaction);
echo"</pre>";
*/

/*
//SubReseller Transaction search
$subreseller_transaction=$apicaller->billing()->searchTransactionSubReseller(array('no-of-records'=>'10','page-no'=>'1'
                                                                      
));
echo"<pre>";
print_r ($subreseller_transaction);
echo"</pre>";
*/

/*
//Customer Archived Transaction search
$pay_customer=$apicaller->billing()->searchArchivedTransactionSubReseller(array('no-of-records'=>'10','page-no'=>'1'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
*/

/*
//Subreseller archived transaction search
$pay_customer=$apicaller->billing()->searchArchivedTransactionCustomer(array('no-of-records'=>'10','page-no'=>'1'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
*/

/*
//Subreseller available balance
$pay_customer=$apicaller->billing()->subresellerAvailableBalance(array('reseller-id'=>'529303'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
*/

/*
//add fund to customer
$pay_customer=$apicaller->billing()->addFundCustomer(array('customer-id'=>'11178171','amount'=>'2000',
                                                           'description'=>'New Amount','transaction-type'=>'credit',
                                                           'transaction-key'=>'10cc','update-total-receipt'=>'true'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
*/

/*
//add fund to sub-reseller
$pay_customer=$apicaller->billing()->addFundSubReseller(array('reseller-id'=>'529303','amount'=>'2000',
                                                           'description'=>'New Amount','transaction-type'=>'credit',
                                                           'transaction-key'=>'10cc','update-total-receipt'=>'true'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
*/

/*
//add debt note to customer
$pay_customer=$apicaller->billing()->addDebtNoteCustomer(array('customer-id'=>'11178171','selling-amount'=>'20000',
                                                           'description'=>'New Amount','debit-note-date'=>'20140521',
                                                           'transaction-key'=>'10cc45','update-total-receipt'=>'true'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
*/


/*
//add debt note to sub-reseller
$pay_customer=$apicaller->billing()->addDebtNoteSubReseller(array('reseller-id'=>'529303','selling-amount'=>'20000',
                                                           'description'=>'New Amount','debit-note-date'=>'20140521',
                                                           'transaction-key'=>'10cc45','update-total-receipt'=>'true'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
*/

/*
//add miscellaneous invoice to customer
$pay_customer=$apicaller->billing()->addMisInvoiceCustomer(array('order-id'=>'54761757','customer-id'=>'10704470',
                                                           'selling-amount'=>'15000','description'=>'New Amount',
                                                           'invoice-date'=>'20140521','transaction-key'=>'00cv55'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
*/

/*
//add miscellaneous invoice to sub-reseller
$pay_customer=$apicaller->billing()->addMisInvoiceSubReseller(array('order-id'=>'123456','reseller-id'=>'529303',
                                                           'selling-amount'=>'15000','description'=>'New Amount',
                                                           'invoice-date'=>'20140521','transaction-key'=>'00cv556','invoice-due-date'=>'20140530',
                                                           'invoice-deletion-date'=>'20140531'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
*/


/*
//suspend order
$suspend=$apicaller->ordermanagement()->suspend(array('order-id'=>'54761757','reason'=>'More Funds is needed',
                                                           
                                                                      
));
echo"<pre>";
print_r ($suspend);
echo"</pre>";
*/


/*
//unsuspend order
$unsuspend=$apicaller->ordermanagement()->Unsuspend(array('order-id'=>'54761757'
                                                           
                                                                      
));
echo"<pre>";
print_r ($unsuspend);
echo"</pre>";
*/


/*
//search current action
$search_current=$apicaller->actions()->searchCurrent(array('no-of-records'=>'20','page-no'=>'1'
                                                           
                                                                      
));
echo"<pre>";
print_r ($search_current);
echo"</pre>";
*/


/*
//search archived action
$search_archived=$apicaller->actions()->searchArchived(array('no-of-records'=>'2','page-no'=>'1'
                                                           
                                                                      
));
echo"<pre>";
print_r ($search_archived);
echo"</pre>";
*/

/*
//legal agreement
$value=$apicaller->legalagreementdata()->agreement(array('type'=>'resellermasteragreement'
                                                           
                                                                      
));
echo"<pre>";
print_r ($value);
echo"</pre>";
*/

/*
//customer list
$value=$apicaller->paymentgateway()->customerList(array('customer-id'=>'11178171',
                                                       'payment-type'=>'AddFund',    
                                                                      
));
echo"<pre>";
print_r ($value);
echo"</pre>";
*/

/*
//reseller list
$value=$apicaller->paymentgateway()->resellerList(array());
echo"<pre>";
print_r ($value);
echo"</pre>";
*/

/*
//customer transactions
$value=$apicaller->paymentgateway()->customerTransaction(array('payment-type-id'=>'1','transaction-type'=>'addfund',
                                                               'no-of-records'=>'20','page-no'=>'1'
                                                           
                                                                      
));
echo"<pre>";
print_r ($value);
echo"</pre>";
*/



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

  $c_order = $apicaller->domain()->waitingToCancelTransferOrder(array (
  'order-id' => '54761757',
 
  ));
  print_r($c_order);

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















?>