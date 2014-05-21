<?php

namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class Actions extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


     /*
     * Search Current Action
     */
    public function searchCurrent(array $params) {
        $endPoint = Http::prepare('actions/search-current.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
    
    /*
     * Search Archived Action
     */
    public function searchArchived(array $params) {
        $endPoint = Http::prepare('actions/search-archived.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
}