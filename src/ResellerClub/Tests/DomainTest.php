<?php

namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class DomainTest {

    protected $apicaller;

    public function __construct($apihost, $authid, $apikey) {

        $this->apicaller = new RClubAPI($apihost, $authid);

        $this->apicaller->setAuth('apikey', $apikey);
    }

    /*
     * Check availability for a domain
     */

    public function checkAvailability() {
        $data = $this->apicaller->domain()->checkAvailability(array(
            'domain-name' => 'fgfg',
            'tlds' => 'com',
            'suggest-alternative' => true,
        ));
        print_r($data);
    }

    /*
     *    Show domain suggestions
     */

    public function suggestDomains() {
        $data = $this->apicaller->domain()->suggestDomains(array(
           'keyword' => 'AjayKumarGupta',
  'tlds' => array('com','net'),
  'no-of-results' => 100,
  'hyphen-allowed' => true,
  'add-related' => true,
        ));
        print_r($data);
    }

    /*
     * Validate domain transfer request
     */

    public function validateTransferRequest() {
       $data = $this->apicaller->domain()->validateTransferRequest(array(
              'domain-name' => 'netfunda.com',
        ));
        print_r($data);
    }

    /*
     * Validate Renews Domains request
     */

    public function renewsDomainRegistration() {
       $data = $this->apicaller->domain()->renewsDomainRegistration(array(
         'order-id' => '54761757',
  'years' => '1',
  'exp-date' => '1279012036',
  'invoice-option' => 'NoInvoice',
        ));
        print_r($data);
    }

    /*
     * Gets a list of Domain Registration Orders 
     * matching the search criteria, along with the details.
     */

    public function DomainRegistrationOrders() {
       $data = $this->apicaller->domain()->DomainRegistrationOrders(array(
         'no-of-records' => '10',
  'page-no' => '1',
        ));
        print_r($data);
    }

    /*
     * Gets the default Name Servers of the specified Customer
     */

    public function getSeverNameOfCustomer() {
       $data = $this->apicaller->domain()->getSeverNameOfCustomer(array(
           'customer-id' => '10704470',
        ));
        print_r($data);
    }

    /*
     * Gets the Order Id of a Registered domain name.
     */

    public function orderIdAgainstDomain() {
       $data = $this->apicaller->domain()->orderIdAgainstDomain(array(
           'domain-name' => 'rtrtyhtyty.com',
));
        print_r($data);
    }

    /*
     * Gets details of the Domain Registration 
     * Order associated with the specified Order Id.
     */

    public function detailOfDomainRegistration() {
        $data = $this->apicaller->domain()->detailOfDomainRegistration(array(
             'order-id' => '53223912',
  'options' => 'OrderDetails',
        ));
        print_r($data);
    }

    /*
     * Gets details of the Domain Registration Order 
     * associated with the specified domain name.
     */

    public function detailOfSpecifiedDomain() {
       $data = $this->apicaller->domain()->detailOfSpecifiedDomain(array(
            'domain-name' => 'rtrtyhtyty.com',
  'options' => 'OrderDetails',
        ));
        print_r($data);
    }

    /*
     * Modifies the Name Servers of 
     * the specified Domain Registration Order.
     */

    public function modifyServerName() {
        $data = $this->apicaller->domain()->modifyServerName(array(
           'order-id' => '54761757',
  'ns' => 'sdfsdf.hh',
        ));
        print_r($data);
    }

    /*
     * Adds Child Name Servers for
     *  the specified Domain Registration Order..
     */

    public function addChildNameServer() {
       $data = $this->apicaller->domain()->addChildNameServer(array(
            'order-id' => '54761757',
  'cns' => 'hgj.rtrtyhtyty.com',
  'ip' => 'rtrtyhtyty.com',
        ));
        print_r($data);
    }

    /*
     * Modifies the Host Name of the Child 
     * Name Server for the specified Domain Registration Order.
     */

    public function modifyHostNameChild() {
       $data = $this->apicaller->domain()->modifyHostNameChild(array(
            'order-id' => '54761757',
  'old-cns' => 'sdfsdf.jj',
  'new-cns' => 'dsdf.jj',
        ));
        print_r($data);
    }

    /*
     * Modifies the IP address associated with the 
     * specified Child Name Server of the specified 
     * Domain Registration Order.
     */

    public function modifyIPAddressChildServeName() {
        $data = $this->apicaller->domain()->modifyIPAddressChildServeName(array(
            'order-id' => '54761757',
  'cns' => 'sdfsdf.jj',
  'old-ip' => 'dfgfg.com',
  'new-ip' => 'sdfsd.gg',
        ));
        print_r($data);
    }

    /*
     * Deletes the IP address associated with the 
     * specified Child Name Server of the particular
     *  Domain Registration Order.
     */

    public function deleteIPAddressChildName() {
      $data = $this->apicaller->domain()->deleteIPAddressChildName(array(
            'order-id' => '54761757',
  'cns' => 'sdfsdf.jj',
  'ip' => 'ajaukj.com',
        ));
        print_r($data);
    }

    /*
     * Modifies the Contacts of the specified Domain Registration Order.
     */

    public function modifySpecifiedDomainContacts() {
        $data = $this->apicaller->domain()->modifySpecifiedDomainContacts(array(
            'order-id' => '54761757',
  'reg-contact-id' => '0',
  'admin-contact-id' => '0',
  'tech-contact-id' => '0',
  'billing-contact-id' => '0',
        ));
        print_r($data);
    }

    /*
     * Adds / Renews the Privacy Protection service for the
     *  specified Domain Registration Order.
     */

    public function renewPrivacyDomain() {
        $data = $this->apicaller->domain()->renewPrivacyDomain(array(
            'order-id' => '54761757',
  'invoice-option' => 'NoInvoice',

        ));
        print_r($data);
    }

    /*
      Changes the Privacy Protection
     * status of the specified Domain Registration Order.
     */

    public function modifyPrivacyProcDomain() {
        $data = $this->apicaller->domain()->modifyPrivacyProcDomain(array(
            'order-id' => '54761757',
  'protect-privacy' => 'true',
  'reason' => 'somereason',
        ));
        print_r($data);
    }

    /*
      Modifies the Auth-Code of the specified Domain Registration Order
     */

    public function modifyAuthCodeProcDomain() {
       $data = $this->apicaller->domain()->modifyAuthCodeProcDomain(array(
            'order-id' => '54761757',
  'auth-code' => 'a2@ ',
        ));
        print_r($data);
    }

    /*
      Applies the Theft Protection Lock on the specified Order.
     */

    public function theftProtectionLock() {
       $data = $this->apicaller->domain()->theftProtectionLock(array(
           'order-id' => '54761757',
        ));
        print_r($data);
    }

    /*
      Disables the Theft Protection Lock on the specified order.
     */

    public function disableTheftProtectionLock() {
       $data = $this->apicaller->domain()->disableTheftProtectionLock(array(
            'order-id' => '54761757',
        ));
        print_r($data);
    }

    /*
      Gets the list of the Locks applied on
     * the specified Domain Registration Order..
     */

    public function listLockDomain() {
       $data = $this->apicaller->domain()->listLockDomain(array(
            'order-id' => '54761757',
        ));
        print_r($data);
    }

    /*
      GGets the CTH Login Details for the specified
     * .TEL Domain Registration Order.
     */

    public function CTHLoginDetails() {
       $data = $this->apicaller->domain()->CTHLoginDetails(array(
           'order-id' => '54761757',
        ));
        print_r($data);
    }

    /*
      Modifies the Whois Preference of the .TEL Domain Registration Order.
     */

    public function modifyTelDomain() {
       $data = $this->apicaller->domain()->modifyTelDomain(array(
            'order-id' => '54761757',
           'whois-type' => 'Legal'
        ));
        print_r($data);
    }

    /*
      Resends the Transfer Approval Mail for the specified Order.
     */

    public function resendMailOrder() {
        $data = $this->apicaller->domain()->resendMailOrder(array(
             'order-id' => '54761757',
        ));
        print_r($data);
    }

    /*
      Releases (transfers out) the specified .UK domain name to the specified Registrar.
     */

    public function releaseUKDomain() {
       $data = $this->apicaller->domain()->releaseUKDomain(array(
           'order-id' => '54761757',
  'new-tag' => 'newregistrartag',
        ));
        print_r($data);
    }

    /*
      30 Cancels the Transfer-In Order that is awaiting Admin approval.trar.
     */

    public function cancelTransferOrder() {
       $data = $this->apicaller->domain()->cancelTransferOrder(array(
       'order-id' => '54761757',
        ));
        print_r($data);
    }

    /*
     * 32 Suspend order
     */

    public function suspend() {
        $data = $this->apicaller->domain()->suspend(array(
            'order-id' => '54792315',
  'reason' => 'no reason',
        ));
        print_r($data);
    }

    // public function suspend(array $params) {
    //     return $this->apicaller->ordermanagement()->suspend($params) ;
    // }

    /*
     * 33 Unsuspend order
     */
    public function Unsuspend() {
        $data = $this->apicaller->domain()->Unsuspend(array(
          'order-id' => '54792315',
        ));
        print_r($data);
    }

    // public function unsuspend(array $params) {
    // //     return $this->apicaller->ordermanagement()->unsuspend($params) ;
    // // }


    /*
     * 34 Deletes the specified Domain Registration Order.
     */
    public function delete() {
       $data = $this->apicaller->domain()->delete(array(
           'order-id' => '54792315',
        ));
        print_r($data);
    }

    /*
     * 35 Restores the specified Domain Registration Order.  //order-id=0&invoice-option=KeepInvoice
     */

    public function restore() {
        $data = $this->apicaller->domain()->restore(array(
            'order-id' => '54792315',
  'invoice-option' => 'KeepInvoice',
        ));
        print_r($data);
    }

    /*
     * 36 Recheck zone configuration with .DE Registry of the expired .DE Domain Registration order.
      // order-id=0
     */

    public function recheckNS() {
        $data = $this->apicaller->domain()->recheckNS(array(
         'order-id' => '54792315',
        ));
        print_r($data);
    }

    /*
      37  Allows associating/dissociating the Membership Token/ID provided by the .XXX Registry,
      to a Domain Registration Order.
      // order-id=123&association-id=123
     */

    public function DotXXXAssociationDetails() {
        $data = $this->apicaller->domain()->DotXXXAssociationDetails(array(
           'order-id' => '54792315',
 'association-id' => '54761757',
        ));
        print_r($data);
    }

    /*
      38  Adds a Delegation Signer (DS) Record for a Domain Registration Order.
      //order-id=0&attr-name1=keytag&attr-value1=123&attr-name2=algorithm&attr-value2=3
      &attr-name3=digesttype&attr-value3=1&attr-name4=digest
      &attr-value4=49FD46E6C4B45C55D4AC49FD46E6C4B45C55D111
     */

    public function addDSRecord() {
       $data = $this->apicaller->domain()->addDSRecord(array(
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
    }

    /*
      39  delete a Delegation Signer (DS) Record for a Domain Registration Order.
      //order-id=0&attr-name1=keytag&attr-value1=123&attr-name2=algorithm
      &attr-value2=3&attr-name3=digesttype&attr-value3=1&attr-name4=digest
      &attr-value4=49FD46E6C4B45C55D4AC49FD46E6C4B45C55D111
     */

    public function deleteDSRecord() {
        $data = $this->apicaller->domain()->deleteDSRecord(array(
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
    }

    //40 access denied for skip Verification of Registrant Contact Email Address


    /*
      41 Resends the verification email to the Registrant Contact Email Address for the specified Domain Registration Order.
      //order-id=0
     */
    public function resendVerification() {
        $data = $this->apicaller->domain()->resendVerification(array(
             'order-id' => '54792315',
        ));
        print_r($data);
    }

    /*
      42 RAdds a Pre-Registration Order for the specified Domain Name(s).
      //customerid=0&domain=domain1.ads
     */

    public function addPreRegistrationOrder() {
        $data = $this->apicaller->domain()->addPreRegistrationOrder(array(
       'customerid' => '10693064',
  'domain' => 'mrinmoy.com',
        ));
        print_r($data);
    }

    /*
      43  Deletes the Pre-Registration Order for the specified Domain Name(s).
      //customerid=0&domain=domain1.ads
     */

    public function deletePreRegistrationOrder() {
        $data = $this->apicaller->domain()->deletePreRegistrationOrder(array(
            'customerid' => '10693064',
  'domain' => 'mrinmoy.com',
        ));
        print_r($data);
    }

    /*
      44  Fetches the Pre-Registration Wishlist.
      //no-of-records=10&page-no=1
     */

    public function fetchPreRegistrationWishlist() {
       $data = $this->apicaller->domain()->fetchPreRegistrationWishlist(array(
           'no-of-records' => '10',
  'page-no' => '1',
        ));
        print_r($data);
    }

    /*
      45  Fetches the TLDs for the specified Category.
      //category=services
     */

    public function fetchPreRegistrationTLDs() {
        $data = $this->apicaller->domain()->fetchPreRegistrationTLDs(array(
          'category' => 'services',
        ));
        print_r($data);
    }

    /*
      46  Checks the availability of the specified Domain Name(s) in the Sunrise Phase.
      //domainname=domain1&tld=bike&smd=<smd_file_content>
     */

    public function checkAvailabilitySunRise() {
       $data = $this->apicaller->domain()->checkAvailabilitySunRise(array(
         'domainname' => 'mrinmoy.com',
  'tld' => 'bike',
  'smd' => 'fdgdf',
        ));
        print_r($data);
    }

    /*
      47  Fetches the Trademark Claim Data, based on the Trademark Claim Key.
      //lookup-key=claim-key
     */

    public function fetchTMNotice() {
       $data = $this->apicaller->domain()->fetchTMNotice(array(
           'lookup-key' => 'claim-key',//not getting claim-key
        ));
        print_r($data);
    }

    /*
      48 Fetches the list of TLDs currently in the Sunrise / Landrush Period
      //phase=sunrise
     */

    public function fetchTLDSunRise() {
        $data = $this->apicaller->domain()->fetchTLDSunRise(array(
           'phase' => 'sunrise',
        ));
        print_r($data);
    }

}
