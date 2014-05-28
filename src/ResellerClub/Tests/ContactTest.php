<?php

namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class ContactTest {

    protected $apicaller;

    public function __construct($apihost, $authid, $apikey) {

        $this->apicaller = new RClubAPI($apihost, $authid);

        $this->apicaller->setAuth('apikey', $apikey);
    }

  
    //Adds a Contact to the domain using the details provided.
    public function addContact() {
     $data=   $this->apicaller->contact()->addContact(array(
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
        print_r($data);
    }

    //Modifies the details of the specified Contact.
    public function modifyContact() {
        $data_contact=   $this->apicaller->contact()->modifyContact(array(
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
        print_r($data_contact);
    }

    //Gets the details for the specified Contact.
    public function gettingContactDetails() {
        $data=   $this->apicaller->contact()->gettingContactDetails(array(
           'contact-id' => '36411094'
        ));
        print_r($data);
    }

    /*
     * Gets the Contact Details of the Contacts that match 
     * the Search criteria.
     */

    public function searchingContactDetails() {
       $data=$this->apicaller->contact()->searchingContactDetails(array(
            'contact-id' => '36411094',
    'customer-id' => '10701373',
    'phone' => '98800417876',
    'no-of-records' => '10',
    'page-no' => '1'
        ));
        print_r($data);
    }

    /*
     *  Associates mandatory extra details with the specified Contact to register .US, .COOP, .ASIA, .CA, .ES, .RU, .PRO and .NL domain names
     */

    public function addExtraDetailsToRegister( ) {
       $data=   $this->apicaller->contact()->addExtraDetailsToRegister(array(
           'contact-id' => '36411094',
    'attr-name1' => 'sponsor1',
    'attr-value1' => '0',
    'product-key' => 'dotcoop',
        ));
        print_r($data);
    }

    //Gets the details of the Default Contacts for the Customer.
    public function gettingDefaultContactDetails( ) {
      $data=   $this->apicaller->contact()->gettingDefaultContactDetails(array(
            'customer-id' => '10701373',
    'type' => 'Contact'
        ));
        print_r($data);
    }

    //Deletes the specified Contacts
    public function deleteContact( ) {
        $data=   $this->apicaller->contact()->deleteContact(array(
        'contact-id' => '36411094'
        ));
        print_r($data);
    }

    //Adds a Sponsor (Co-operative Reference) for a specified Customer
    public function addingCoopSponsor( ) {
      $data=   $this->apicaller->contact()->addingCoopSponsor(array(
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
        print_r($data);
    }

    /*
     * Gets a list of system default .COOP Sponsors 
     * (Co-operative Reference) and associated Sponsor 
     *  of the specified Customer.
     */

    public function gettingCoopSponsor( ) {
     $data=   $this->apicaller->contact()->gettingCoopSponsor(array(
            'customer-id' => '10701373'
        ));
        print_r($data);
    }

    /*
     * Gets the Registrant Agreement mandated by the Canadian 
     * Internet Registration Authority (CIRA).
     */

    public function gettingCARegistrantAgreement( ) {
       $data=   $this->apicaller->contact()->gettingCARegistrantAgreement(array(
            
        ));
        print_r($data);
    }

    /*
     * Validates the Registrant Contact(s) against
     *  the eligibility criteria(s) provided.
     */

    public function ValidatingRegistrationContact( ) {
       $data=   $this->apicaller->contact()->ValidatingRegistrationContact(array(
             'contact-id' => '10701373',
    'eligibility-criteria'=>'CED_ASIAN_COUNTRY'
        ));
        print_r($data);
    }

}
