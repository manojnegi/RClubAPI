<?php


namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class PaymentGateway extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


     /*
     * customer list
     */
    public function customerList(array $params) {
        $endPoint = Http::prepare('pg/allowedlist-for-customer.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
	
	
	/*
     * reseller list
     */
    public function resellerList(array $params) {
        $endPoint = Http::prepare('pg/list-for-reseller.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
	
	/*
     * customer transaction
     */
    public function customerTransaction(array $params) {
        $endPoint = Http::prepare('pg/customer-transactions.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
}