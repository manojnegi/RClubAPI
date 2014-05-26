<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class VPSLinuxPlans extends APICallerAbstract {

    
    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }



     /*
     * 1 . Places a VPS Linux Order for the specified domain name.
     */
    public function add(array $params) {
        
        $endPoint = Http::prepare('vps/linux/add.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
    }



     /*
     * 2. Renews an existing VPS Linux Order.
     */
    public function renew(array $params) {
        
        $endPoint = Http::prepare('vps/linux/renew.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
        
    }
    
    
     /*
     * 3. Modifies/upgrades an existing VPS Linux Order.
     */
    public function modify(array $params) {
        
        $endPoint = Http::prepare('vps/linux/modify.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
        
    }
    
  
     /*
     * 4. Adds the specified Add-on for an existing VPS Linux Order.
     */
    public function addAddOn(array $params) {
        $endPoint = Http::prepare('vps/linux/add-addon.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
    }


    /*
    *  5. Deletes the specified Add-on of the VPS Linux Order.
    */
    public function deleteAddOn(array $params) {
        $endPoint = Http::prepare('vps/linux/delete-addon.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        
        return $response;
    }


    /*
    *  6. Applies the Suspension on the specified Order.  //order management
    */
    public function suspend(array $params) {
        $endPoint = Http::prepare('orders/suspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        
        return $response;
    }


    /*
    *  7 Removes the Suspension on the specified Order.   //order management
    */
    public function unsuspend(array $params) {
        $endPoint = Http::prepare('orders/unsuspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        
        return $response;
    }
    
    

    /*
    * 8. Deletes an existing VPS Linux Order.
    */
    public function delete(array $params) {
        $endPoint = Http::prepare('/vps/linux/delete.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

    /*
    *  9. Gets the details of an existing VPS Linux Order.
    */
    public function getDetails(array $params) {
        $endPoint = Http::prepare('vps/linux/details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
     /*
    *  10. Returns details of the plans of the VPS Linux product, along with the plan details of other Products of the Reseller.  //product->get plan details
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
    *  11 Gets the associated VPS Linux Order ID from the domain name.
    */
    public function getOrderId(array $params) {
        $endPoint = Http::prepare('vps/linux/orderid.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  12  Gets a list and details of the VPS Linux Orders matching the search criteria.
    */
    public function searchOrders(array $params) {
        $endPoint = Http::prepare('vps/linux/search.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


      /*
     * 13. Gets the applicable modify/upgrade price for a particular VPS Linux Order.
     */
    public function modifyPrice(array $params) {
        
        $endPoint = Http::prepare('vps/linux/modify-pricing.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
        
    }







    /*
    *  14 Gets the generic Customer Pricing or a particular Customer's Cost Price if the Customer ID is provided.
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
    *  15  Gets the Reseller Slab Pricing.  //exists in common->pricing
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
