<?php
namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class LegalAgreement extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


     /*
     * fetch agreement
     */
    public function agreement(array $params) {
        $endPoint = Http::prepare('commons/legal-agreements.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
   
}

