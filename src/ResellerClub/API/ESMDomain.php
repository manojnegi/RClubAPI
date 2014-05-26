<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class ESMDomain extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }



     /*
     * Check availability for a product
     */
    public function isOwnershipVerified(array $params) {
        $endPoint = Http::prepare('mail/domain/is-ownership-verified.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        
        return $response;
    }



     /*
     * 2 add domain alias
     */
    public function addDomainAlias(array $params) {
        $endPoint = Http::prepare('mail/domain/add-alias.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
     /*
     * 3  delete domain alias .
     */
    public function deleteDomainAlias(array $params) {

        $endPoint = Http::prepare('mail/domain/delete-alias.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
  
     /*
     *  4  getNotificationEmail
     */
    public function getNotificationEmail(array $params) {
        $endPoint = Http::prepare('mail/domain/notification-email.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    
     /*
     *   5 modify notification email
     */
    public function modifyNotificationEmail(array $params) {
        $endPoint = Http::prepare('mail/domain/update-notification-email.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

      /*
     *   6 get catch all account
     */
    public function getCatchAllAcount(array $params) {
        $endPoint = Http::prepare('mail/domain/catchall.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

      /*
     *   7 activate catch all account 
     */
    public function activateCatchAllAcount(array $params) {
        $endPoint = Http::prepare('mail/domain/activate-catchall.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

      /*
     *   8 deactivate catch all account 
     */
    public function deactivateCatchAllAcount(array $params) {
        $endPoint = Http::prepare('mail/domain/deactivate-catchall.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

      /*
     *   9 get   dns records
     */
    public function getDNSRecords(array $params) {
        $endPoint = Http::prepare('mail/domain/dns-records.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

}
