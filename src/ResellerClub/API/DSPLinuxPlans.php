<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class DSPLinuxPlans extends APICallerAbstract {

    
    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }



     /*
     * 1 . Places an edicated Server Linux Order for the specified domain name.
     */
    public function add(array $params) {
        
        $endPoint = Http::prepare('dedicatedserver/linux/us/add.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
    }



     /*
     * 2. Renews an existing Dedicated Server Linux Order.
     */
    public function renew(array $params) {
        
        $endPoint = Http::prepare('dedicatedserver/linux/us/renew.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
        
    }
    
    
    
  
     /*
     * 3. add the specified Add-on of the Dedicated Server Linux Order.
     */
    public function addAddOn(array $params) {
        $endPoint = Http::prepare('dedicatedserver/linux/us/addon/add.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
    }


    /*
    *  4. Deletes the specified Add-on of the Dedicated Server Linux Order.
    */
    public function deleteAddOn(array $params) {
        $endPoint = Http::prepare('dedicatedserver/linux/us/addon/delete.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        
        return $response;
    }


    /*
    *  5. Applies the Suspension on the specified Order.  //order management
    */
    public function suspend(array $params) {
        $endPoint = Http::prepare('orders/suspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        
        return $response;
    }


    /*
    *  6 Removes the Suspension on the specified Order.   //order management
    */
    public function unsuspend(array $params) {
        $endPoint = Http::prepare('orders/unsuspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        
        return $response;
    }
    
    

    /*
    * 7. Deletes an existing Dedicated Server Linux Order.
    */
    public function delete(array $params) {
        $endPoint = Http::prepare('dedicatedserver/linux/us/delete.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

    /*
    *  8. Gets the details of an existing Dedicated Server Linux Order.
    */
    public function getDetails(array $params) {
        $endPoint = Http::prepare('dedicatedserver/linux/us/details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
     /*
    *  8. Returns details of the plans of the Dedicated Server Linux product, along with the plan details of other Products of the Reseller.   //product->get plan details
    */
    public function getPlanDetails(array $params) {
        $endPoint = Http::prepare('products/plan-details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
    *  10 Gets the associated Dedicated Server Linux Order ID from the domain name. 
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
    *  11  Gets a list and details of the Dedicated Server Linux Orders matching the search criteria.
    */
    public function searchOrders(array $params) {
        $endPoint = Http::prepare('dedicatedserver/linux/us/search.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
    *  12 Gets the generic Customer Pricing or a particular Customer's Cost Price if the Customer ID is provided.
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
    *  13  Gets the Reseller Slab Pricing.  //exists in common->pricing
    */
    public function  getResellerPricing(array $params) {
        $endPoint = Http::prepare('products/reseller-price.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }





}
