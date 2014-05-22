<?php

namespace ResellerClub\API;


class MDHWindowsPlan extends APICallerAbstract {


    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


 public function Add(array $params,array $country) {

     $con=Country::getCountry($country); 
     $endPoint = Http::prepare("multidomainhosting/windows/".$con."/add.json");
       
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
	

    

public function ReNew(array $params,$country){

   $endPoint = Http::prepare("multidomainhosting/windows/".$country."/renew.json");
   $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;

}



public function Modify(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/windows/'.$country.'/modify.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}




public function EnableSSL(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/windows/'.$country.'/enable-ssl.json');
      $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}


public function DisableSSL(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/windows/'.$country.'/disable-ssl.json');
      $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}


public function SuspendOrder(array $params){

 
      $endPoint = Http::prepare('orders/suspend.json');
      $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}

public function UnSuspendOrder(array $params){

 
      $endPoint = Http::prepare('orders/unsuspend.json');
      $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}

public function Delete(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/windows/'.$country.'/delete.json');
      $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}


public function Details(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/windows/'.$country.'/details.json');
      $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;

}





public function PlanDetails(array $params){


      $endPoint = Http::prepare('products/plan-details.json');
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



public function GetOrderId(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/windows/'.$country.'/orderid.json');
      $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}

public function SearchOrder(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/windows/'.$country.'/search.json');
      $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}

public function GetUpgradePrice(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/windows/'.$country.'/modify-pricing.json');
      $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}


public function ChangeHostingPanelPassword(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/windows/'.$country.'/change-password.json');
      $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}


public function DNSRecord(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/windows/'.$country.'/dns-record.json');
      $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}


}