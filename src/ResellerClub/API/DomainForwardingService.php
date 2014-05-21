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
     * activate domain forwarding service.
     */
    public function activate(array $params) {

        $endPoint = Http::prepare('domainforward/activate.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
	

    


      /*
     * get details of domain forwarding service.
     */
    public function getDetails(array $params) {

        $endPoint = Http::prepare('domainforward/details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

      /*
     * manage domain forwarding service.
     */
    public function manage(array $params) {

        $endPoint = Http::prepare('domainforward/manage.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

	
      /*
     *get dns records 
     */
    public function getDnsRecords(array $params) {

        $endPoint = Http::prepare('domainforward/dns-records.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

}
