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
	
	 
    

}
