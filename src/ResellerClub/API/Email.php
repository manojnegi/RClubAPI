<?php

namespace ResellerClub\API;


class Email extends APICallerAbstract {


    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


public function AddWeb(array $params){


      $endPoint = Http::prepare('webservices/add.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;

}

public function ReNew(array $params){


      $endPoint = Http::prepare('webservices/renew.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;

}

public function ModifyWebServiceOrder(array $params){


      $endPoint = Http::prepare('webservices/modify.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;

}

public function EnableSSL(array $params){


      $endPoint = Http::prepare('webservices/enable-ssl.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;

}

public function DisableSSL(array $params){


      $endPoint = Http::prepare('webservices/disable-ssl.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;

}

public function SuspendOrder(array $params){


      $endPoint = Http::prepare('orders/suspend.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;

}


public function UnSuspendOrder(array $params){


      $endPoint = Http::prepare('orders/unsuspend.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;

}

public function DeleteWebServiceOrder(array $params){


      $endPoint = Http::prepare('webservices/delete.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;

}
public function Details(array $params){


      $endPoint = Http::prepare('webservices/details.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;

}


public function ActivePlan(array $params){


      $endPoint = Http::prepare('webservices/active-plan-categories.json');
	  $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}


public function CustomerPricing(array $params){


      $endPoint = Http::prepare('products/customer-price.json');
	  $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}


public function ResellerPricing(array $params){


      $endPoint = Http::prepare('products/reseller-price.json');
	  $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}


public function ResellerPricingOnBandwidth(array $params){


      $endPoint = Http::prepare('mock/products/reseller-price.json');
	  $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}

public function GetOrderId(array $params){


      $endPoint = Http::prepare('webservices/orderid.json');
	  $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}

public function SearchOrder(array $params){


      $endPoint = Http::prepare('webservices/search.json');
	  $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}

public function GetUpgradePrice(array $params){


      $endPoint = Http::prepare('webservices/modify-pricing.json');
	  $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}

public function ChangeHostingPanelPassword(array $params){


      $endPoint = Http::prepare('webservices/change-password.json');
	  $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}

public function DNSRecord(array $params){


      $endPoint = Http::prepare('webservices/dns-record.json');
	  $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}


}