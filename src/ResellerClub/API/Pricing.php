<?php
namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class Pricing extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


     /*
     * Customer Price
     */
    public function customerPrice(array $params) {
        $endPoint = Http::prepare('products/customer-price.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
	
	
	/*
     * Reseller Price
     */
    public function resellerPrice(array $params) {
        $endPoint = Http::prepare('products/reseller-price.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
	
	/*
     * Reseller CostPrice
     */
    public function resellerCostPrice(array $params) {
        $endPoint = Http::prepare('products/reseller-cost-price.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    } 
    
}

?>