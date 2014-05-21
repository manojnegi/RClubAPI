<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class Dns extends APICallerAbstract {

   protected $mandnsrecord ;




    public function __construct($apicaller) {
        parent::__construct($apicaller);


        $this->managednsrecord = new ManageDnsRecord($apicaller) ;


    }



     /*
     * to activate dns service ;
     */
    public function activateDnsService(array $params) {

        $endPoint = Http::prepare('dns/activate.xml');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }



     
    

}
