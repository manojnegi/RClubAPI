<?php

namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class Domain extends APICallerAbstract {

    
    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


     /*
     * Check availability for a domain
     */
    public function checkAvailability(array $params) {
        $endPoint = Http::prepare('domains/available.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
	
	/*
     * Show domain suggestions
     */
	public function suggestDomains(array $params) {
        $endPoint = Http::prepare('domains/suggest-names.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
	
	
	/*
     * Validate domain transfer request
     */
	public function validateTransferRequest(array $params) {
        $endPoint = Http::prepare('domains/validate-transfer.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
	
    
    

}
