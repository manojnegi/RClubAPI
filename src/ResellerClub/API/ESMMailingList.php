<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class ESMMailingList extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }



     /*
     *  1 add mailing list
     */
    public function addMailingList(array $params) {
        $endPoint = Http::prepare('mail/mailinglist/add.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        
        return $response;
    }



     /*
     * 2 modify mailing list
     */
    public function modifyMailingList(array $params) {
        $endPoint = Http::prepare('mail/mailinglist/update.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
     /*
     * 3  get mailing list of domain
     */
    public function getMailingListDomain(array $params) {

        $endPoint = Http::prepare('mail/mailinglists.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
  
     /*
     *  4  get details
     */
    public function getDetails(array $params) {
        $endPoint = Http::prepare('api/mail/mailinglist.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        
        return $response;
    }


    
     /*
     *   5 add subscribers
     */
    public function addSubscribers(array $params) {
        $endPoint = Http::prepare('mail/mailinglist/add-subscribers.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

      /*
     *   6 list subscribers
     */
    public function listSubscribers(array $params) {
        $endPoint = Http::prepare('mail/mailinglist/subscribers.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

      /*
     *   7 delete subscribers
     */
    public function deleteSubscribers(array $params) {
        $endPoint = Http::prepare('mail/mailinglist/delete-subscribers.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

      /*
     *   8 delete mailing lists
     */
    public function deleteMailingList(array $params) {
        $endPoint = Http::prepare('mail/mailinglist/delete.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

      /*
     *   9  add moderators
     */
    public function addModerators(array $params) {
        $endPoint = Http::prepare('mail/mailinglist/add-moderators.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


     /*
     *   10  delete moderators
     */
    public function deleteModerators(array $params) {
        $endPoint = Http::prepare('mail/mailinglist/delete-moderators.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

}
