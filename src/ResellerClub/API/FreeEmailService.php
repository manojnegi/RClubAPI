<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class FreeEmailService extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }



     /*
     * 1. activate the free email service.
     */
    public function activate(array $params) {
        $endPoint = Http::prepare('/mail/activate.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }



    
}
