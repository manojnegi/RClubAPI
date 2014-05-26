<?php

namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class Contact extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


    //Adds a Contact to the domain using the details provided.
    public function addContact(array $params) {
        $endPoint = Http::prepare('contacts/add.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
	
  //Modifies the details of the specified Contact.
    public function modifyContact(array $params) {
        $endPoint = Http::prepare('contacts/modify.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
	
	 //Gets the details for the specified Contact.
    public function gettingContactDetails(array $params) {
        $endPoint = Http::prepare('contacts/details.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    

    /*
     * Gets the Contact Details of the Contacts that match 
     * the Search criteria.
     */
    public function searchingContactDetails(array $params) {
        $endPoint = Http::prepare('contacts/search.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    
   
  /*
   *  Associates mandatory extra details with the specified Contact to register .US, .COOP, .ASIA, .CA, .ES, .RU, .PRO and .NL domain names
   */
    public function addExtraDetailsToRegister(array $params) {
        $endPoint = Http::prepare('contacts/set-details.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
    
     //Gets the details of the Default Contacts for the Customer.
    public function gettingDefaultContactDetails(array $params) {
        $endPoint = Http::prepare('contacts/default.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
    
   //Deletes the specified Contacts
    public function deleteContact(array $params) {
        $endPoint = Http::prepare('contacts/delete.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
    
     //Adds a Sponsor (Co-operative Reference) for a specified Customer
    public function addingCoopSponsor(array $params) {
        $endPoint = Http::prepare('contacts/coop/add-sponsor.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
   /*
     * Gets a list of system default .COOP Sponsors 
     * (Co-operative Reference) and associated Sponsor 
     *  of the specified Customer.
     */
    public function gettingCoopSponsor(array $params) {
        $endPoint = Http::prepare('contacts/sponsors.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
    
  /*
  * Gets the Registrant Agreement mandated by the Canadian 
  * Internet Registration Authority (CIRA).
  */
    public function gettingCARegistrantAgreement(array $params) {
        $endPoint = Http::prepare('contacts/dotca/registrantagreement.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
    
  /*
  * Validates the Registrant Contact(s) against
  *  the eligibility criteria(s) provided.
  */  
    public function ValidatingRegistrationContact(array $params) {
        $endPoint = Http::prepare('contacts/validate-registrant.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
}
