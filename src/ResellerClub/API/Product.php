<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class Product extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }



     /*
     * Check availability for a product
     */
    public function checkAvailability(array $params) {
        $endPoint = Http::prepare('products/availability.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }



     /*
     * get details of a product
     */
    public function getDetails(array $params) {
        $endPoint = Http::prepare('products/details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
     /*
     * get details of a product
     */
    public function getProductCategoryProductKeysMapping(array $params) {
        $endPoint = Http::prepare('products/category-keys-mapping.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
  
     /*
     * get plan details of a product
     */
    public function getPlanDetails(array $params) {
        $endPoint = Http::prepare('products/plan-details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    
     /*
     * Validate domain transfer request
     */
    public function move(array $params) {
        $endPoint = Http::prepare('products/move.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

}
