<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class RHLinuxPlans extends APICallerAbstract {

    
    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }



     /*
     * 1 . Places a VPS Linux Order for the specified domain name.
     */
    public function add(array $params,$slcode) {
        
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/add.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
    }



     /*
     * 2. Renews an existing Reseller Linux Hosting Order.
     */
    public function renew(array $params,$slcode) {
        
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/renew.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
        
    }
    
    
     /*
     * 3. Modifies/upgrades an existing Reseller Linux Hosting Order.
     */
    public function modify(array $params,$slcode) {
        
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/modify.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
        
    }
    
  
     /*
     * 4. AAdds a dedicated IP for an existing Reseller Linux Hosting Order.
     */
    public function addDedicatedIP(array $params,$slcode) {
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/add-dedicated-ip.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;
    }


    /*
    *  5. Deletes the specified dedicated IP(s) of the Reseller Linux Hosting Order.
    */
    public function deleteDedicatedIP(array $params,$slcode) {
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/delete-dedicated-ip.json');
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
    * 8. Deletes an existing Reseller Linux Hosting Order.
    */
    public function delete(array $params,$slcode) {
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/delete.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

    /*
    *  9. Gets the details of an existing Reseller Linux Hosting Order.
    */
    public function getDetails(array $params,$slcode) {
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


     /*
    * 10. Generates the license key for the specified Reseller Linux Hosting Order. If already generated, will return the existing key.
    */
    public function generateLicenseKey(array $params,$slcode) {
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/generate-license-key.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
     /*
    *  11. Returns details of the plans of the VPS Linux product, along with the plan details of other Products of the Reseller.  //product->get plan details
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
    *  12 Gets the associated Reseller Linux Hosting Order ID from the domain name.
    */
    public function getOrderId(array $params,$slcode) {
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/orderid.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  13 Gets a list and details of the Reseller Linux Hosting Orders matching the search criteria.
    */
    public function searchOrders(array $params,$slcode) {
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/search.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


      /*
     * 14. Gets the applicable modify/upgrade price for a particular Reseller Linux Hosting Order.
     */
    public function modifyPrice(array $params,$slcode) {
        
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/modify-pricing.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
        
    }







    /*
    * 15 Gets the generic Customer Pricing or a particular Customer's Cost Price if the Customer ID is provided.
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
    *  16  Gets the Reseller Slab Pricing.  //exists in common->pricing
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
    *  17. Changes the hosting panel password of the specified Reseller Linux Hosting Order.
    */
    public function changeHostingPanelPassword(array $params,$slcode) {
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/change-password.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        
        return $response;
    }


    /*
    *  18  Gets the DNS records of an Enterprise Email Order.
    */
    public function getDNSRecords(array $params,$slcode) {
        $endPoint = Http::prepare('resellerhosting/linux/'.$slcode.'/dns-record.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

}
