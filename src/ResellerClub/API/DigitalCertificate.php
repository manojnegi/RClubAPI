<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class DigitalCertificate extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }



     /*
     * 1. add
     */
    public function add(array $params) {
        $endPoint = Http::prepare('digitalcertificate/add.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }



     /*
     * 2. cancel
     */
    public function cancel(array $params) {
        $endPoint = Http::prepare('digitalcertificate/cancel.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


     /*
     * 3. Enroll
     */
    public function enroll(array $params) {
        $endPoint = Http::prepare('digitalcertificate/enroll-for-thawtecertificate.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
     /*
     * 4. check status
     */
    public function checkStatus(array $params) {
        $endPoint = Http::prepare('digitalcertificate/check-status.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
  
     /*
     * 5 details
     */
    public function details(array $params) {
        $endPoint = Http::prepare('digitalcertificate/details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    
     /*
     * 6 search
     */
    public function search(array $params) {
        $endPoint = Http::prepare('digitalcertificate/search.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

    /*
     *7 get order id
     */
    public function getOrderId(array $params) {
        $endPoint = Http::prepare('digitalcertificate/orderid.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
     * 8 reissue
     */
    public function reissue(array $params) {
        $endPoint = Http::prepare('digitalcertificate/reissue.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
     * 9 renew
     */
    public function renew(array $params) {
        $endPoint = Http::prepare('digitalcertificate/renew.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * 10 suspend  //control redirect to order management suspend
     */
    public function suspend(array $params) {
        $endPoint = Http::prepare('digitalcertificate/suspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * 11 unsuspend  redirect to order management unsuspend
     */
    public function unsuspend(array $params) {
        $endPoint = Http::prepare('digitalcertificate/unsuspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * 12 delete
     */
    public function delete(array $params) {
        $endPoint = Http::prepare('digitalcertificate/delete.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

}
