<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class EnterpriseEmail extends APICallerAbstract {

    
    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }



     /*
     * 1 . Places an Enterprise Email Order for the specified domain name.
     */
    public function add(array $params) {
        
        $endPoint = Http::prepare('enterpriseemail/us/add.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
    }



     /*
     * 2. Renews an existing Enterprise Email Order.
     */
    public function renew(array $params) {
        
        $endPoint = Http::prepare('enterpriseemail/us/renew.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
        
    }
    
    
    
  
     /*
     * 3. Adds Email Accounts to an existing Enterprise Email Order.
     */
    public function addEmailAccounts(array $params) {
        $endPoint = Http::prepare('/enterpriseemail/us/add-email-account.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
    }


    /*
    *  4. delete Email Accounts to an existing Enterprise Email Order.
    */
    public function deleteEmailAccounts(array $params) {
        $endPoint = Http::prepare('enterpriseemail/us/delete-email-account.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        
        return $response;
    }


    /*
    *  5. Applies the Suspension on the specified Order.
    */
    public function suspend(array $params) {
        $endPoint = Http::prepare('orders/suspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        
        return $response;
    }


    /*
    *  6. Removes the Suspension on the specified Order.
    */
    public function unsuspend(array $params) {
        $endPoint = Http::prepare('orders/unsuspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        
        return $response;
    }
    


    /*
    *  7. Deletes an existing Enterprise Email Order.
    */
    public function delete(array $params) {
        $endPoint = Http::prepare('enterpriseemail/us/delete.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

    /*
    *  8. Gets the details of an existing Enterprise Order.
    */
    public function getDetails(array $params) {
        $endPoint = Http::prepare('enterpriseemail/us/details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

    /*
    *  9  Gets the associated Enterprise Email Order Id from the domain name.
    */
    public function getOrderId(array $params) {
        $endPoint = Http::prepare('enterpriseemail/us/orderid.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  10  Gets a list and details of the Enterprise Email Orders matching the search criteria.
    */
    public function searchOrders(array $params) {
        $endPoint = Http::prepare('enterpriseemail/us/search.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
    *  11 Gets the generic Customer Pricing or a particular Customer's Cost Price if the Customer ID is provided.
        // exists in common->pricing.
    */
    public function getCustomerPricing(array $params) {
       $endPoint = Http::prepare('products/customer-price.json');
       
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  12  Gets the Reseller Slab Pricing.  //it has problems ..need to be discuss.
    */
    public function  getResellerPricing(array $params) {
        $endPoint = Http::prepare('products/reseller-price.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  13  Gets the DNS records of an Enterprise Email Order.
    */
    public function getDNSRecords(array $params) {
        $endPoint = Http::prepare('enterpriseemail/us/dns-record.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }



}
