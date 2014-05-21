<?php

namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class Customer extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


     /*
     * Customer Signup
     */
    public function createAccount(array $params) {
        $endPoint = Http::prepare('customers/signup.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
	
	
	/*
     * Modify customer details
     */
    public function modifyCustomer(array $params) {
        $endPoint = Http::prepare('customers/modify.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
	
	/*
     * Fetch customer details By Username
     */
    public function fetchCustomerByUserName(array $params) {
        $endPoint = Http::prepare('customers/details.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
    /* Fetch customer details By Id
     */
    public function fetchCustomerById(array $params) {
        $endPoint = Http::prepare('customers/details-by-id.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    /*
     * Generating A Token
     */
    public function tokenGenerate(array $params) {
        $endPoint = Http::prepare('customers/generate-token.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
    /*
     * Authenticating A Token
     */
    public function authenticateToken(array $params) {
        $endPoint = Http::prepare('customers/authenticate-token.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
    
     /*
     * Change Customer Password
     */
    public function changePassword(array $params) {
        $endPoint = Http::prepare('customers/change-password.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    } 
    
    
    /*
     * Generate Temp Password
     */
    public function tempPassword(array $params) {
        $endPoint = Http::prepare('customers/temp-password.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
     /*
     * Search Customer
     */
    public function searchCustomer(array $params) {
        $endPoint = Http::prepare('customers/search.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    /*
     * Delete Customer
     */
    public function deleteCustomer(array $params) {
        $endPoint = Http::prepare('customers/delete.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }

}
