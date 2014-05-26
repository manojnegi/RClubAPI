<?php
/*
This indextest.php file is used to test the various classes of the library .

*/

include("vendor/autoloader.php");


//replace Product in the below line with the class you want to test.

//use ResellerClub\Tests\ProductTest as RClubAPI;
//use ResellerClub\Tests\VPSLinuxPlansTest as RClubAPI;
//use ResellerClub\Tests\ESMMailingListTest as RClubAPI;
//use ResellerClub\Tests\EmailAccountTest as RClubAPI;
//use ResellerClub\Tests\EnterpriseEmailTest as RClubAPI;
//use ResellerClub\Tests\ManageDnsRecordTest as RClubAPI;
//use ResellerClub\Tests\ESMDomainTest as RClubAPI;
//use ResellerClub\Tests\DSPLinuxPlansTest as RClubAPI;
// use ResellerClub\Tests\DigitalCertificateTest as RClubAPI;
 use ResellerClub\Tests\DomainForwardingServiceTest as RClubAPI;



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

//$apicaller->add() ;
//$apicaller->renew() ;
//$apicaller->modify() ;
//$apicaller->addAddOn() ;
//$apicaller->deleteAddOn() ;
//$apicaller->suspend() ;
//$apicaller->unsuspend() ;
//$apicaller->delete() ;
//$apicaller->getDetails() ;
//$apicaller->getPlanDetails() ;
//$apicaller->getOrderId() ;
//$apicaller->searchOrders() ;
//$apicaller->modifyPrice() ;
//$apicaller->getCustomerPricing() ;
//$apicaller->getResellerPricing() ;


//ESMMailing Test=>

//$apicaller->addMailingList() ;
//$apicaller->modifyMailingList() ;
//$apicaller->getMailingListDomain() ;
//$apicaller->getDetails() ;
//$apicaller->addSubscribers() ;
//$apicaller->listSubscribers() ;
//$apicaller->deleteSubscribers() ;
//$apicaller->deleteMailingList() ;
//$apicaller->addModerators() ;
//$apicaller->deleteModerators() ;



//ESMDomain Test=>

//$apicaller->isOwnershipVerified() ;
//$apicaller->addDomainAlias() ;
//$apicaller->deleteDomainAlias() ;
//$apicaller->getNotificationEmail() ;
//$apicaller->modifyNotificationEmail() ;
//$apicaller->getCatchAllAcount() ;
//$apicaller->activateCatchAllAcount() ;
//$apicaller->deactivateCatchAllAcount() ;
//$apicaller->getDNSRecords() ;



//All Functions of Email Account Test


//$apicaller->addUser() ;
//$apicaller->addForwardOnlyAccount() ;
//$apicaller->getUserDetails() ;
//$apicaller->modifyUserDetails() ;
//$apicaller->suspendUser() ;
//$apicaller->suspendUsers() ;
//$apicaller->unsuspendUser() ;
//$apicaller->unsuspendUsers() ;
//$apicaller->searchUsers() ;
//$apicaller->getNoOfUsers() ;
//$apicaller->changePassword() ;
//$apicaller->resetPassword() ;
//$apicaller->updateAutoResponder() ;
//$apicaller->authenticateUser() ;
//$apicaller->deleteUser() ;
//$apicaller->deleteUsers() ;
//$apicaller->addAdminForwards() ;
//$apicaller->deleteAdminForwards() ;
//$apicaller->addUserForwards() ;
//$apicaller->deleteUserForwards() ;


//All Functions of EnterpriseEmailTest


//$apicaller->add() ;
//$apicaller->renew() ;
//$apicaller->addEmailAccounts() ;
//$apicaller->deleteEmailAccounts() ;
//$apicaller->suspend() ;
//$apicaller->unsuspend() ;
//$apicaller->delete() ;
//$apicaller->getDetails() ;
//$apicaller->getOrderId() ;
//$apicaller->searchOrders() ;
//$apicaller->getCustomerPricing() ;
//$apicaller->getResellerPricing() ;
//$apicaller->getDNSRecords() ;




//All Functions of ManageDnsRecordTest


//$apicaller->addIPv4AddressRecord() ;
//$apicaller->addIPv6AddressRecord() ;
//$apicaller->addCNAMERecord() ;
//$apicaller->addMXRecord() ;
//$apicaller->addNSRecord() ;
//$apicaller->addTXTRecord() ;
//$apicaller->addSRVRecord() ;
//$apicaller->modifyIPv4AddressRecord() ;



//$apicaller->modifyIPv6AddressRecord() ;
//$apicaller->modifyCNAMERecord() ;
//$apicaller->modifyMXRecord() ;
//$apicaller->modifyNSRecord() ;
//$apicaller->modifyTXTRecord() ;
//$apicaller->modifySRVRecord() ;
//$apicaller->modifySOARecord() ;
//$apicaller->searchDnsRecord() ;
//$apicaller->deleteDnsRecord() ;
//$apicaller->deleteIPv4Record() ;
//$apicaller->deleteIPv6Record() ;
//$apicaller->deleteCNAMERecord() ;
//$apicaller->deleteMXRecord() ;
//$apicaller->deleteNSRecord() ;
//$apicaller->deleteTXTRecord() ;
//$apicaller->deleteSRVRecord() ;



/*----DSP linux Plan---*/

//$apicaller->add() ;

//$apicaller->renew() ;

//$apicaller->renew() ;

//$apicaller->addAddOn() ;

//$apicaller->getDetails() ;

//$apicaller->deleteAddOn() ;

//$apicaller->suspend() ;

//$apicaller->unsuspend() ;

//$apicaller->delete() ;

//$apicaller->getPlanDetails() ;

//$apicaller->getOrderId() ;

//$apicaller->searchOrders() ;

//$apicaller->getCustomerPricing() ;

//$apicaller->getResellerPricing() ;


/*---Digital Certificate Test---*/

//$apicaller->add() ;

//$apicaller->cancel() ;

//$apicaller->enroll() ;

//$apicaller->checkStatus() ;

//$apicaller->details() ;

//$apicaller->search() ;

//$apicaller->getOrderId() ;

//$apicaller->reissue() ;

//$apicaller->renew() ;

//$apicaller->suspend() ;

//$apicaller->unsuspend() ;

//$apicaller->delete() ;


/*------DomainForwardingServiceTest-----*/

//$apicaller->activate() ;

//$apicaller->getDetails() ;

//$apicaller->manage() ;

$apicaller->getDnsRecords() ;

?>
