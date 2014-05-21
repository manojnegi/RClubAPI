<?php

namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class General extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


     /*
     * Fetch All Currency
     */
    public function currency(array $params) {
        $endPoint = Http::prepare('currency/details.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    /*
     * Fetch All Country
     */
    public function country(array $params) {
        $endPoint = Http::prepare('country/list.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    
    /*
     * Fetch State of A specific Country
     */
    public function state(array $params) {
        $endPoint = Http::prepare('country/state-list.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
}

