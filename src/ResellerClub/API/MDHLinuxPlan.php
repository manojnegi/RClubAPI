<?php

namespace ResellerClub\API;


class MDHLinuxPlan extends APICallerAbstract {


    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


 public function Add(array $params,array $country) {

     $con=Country::getCountry($country); 
     $endPoint = Http::prepare("multidomainhosting/linux/".$con."/add.json");
       
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'POST'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
	

    

public function ReNew(array $params,$country){

   $endPoint = Http::prepare("multidomainhosting/linux/".$country."/renew.json");
   $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
       
        return $response;

}



public function Modify(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/linux/'.$country.'/modify.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}




public function EnableSSL(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/linux/'.$country.'/enable-ssl.json');
      $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}


public function DisableSSL(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/linux/'.$country.'/disable-ssl.json');
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

 
      $endPoint = Http::prepare('multidomainhosting/linux/'.$country.'/delete.json');
      $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}


public function Details(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/linux/'.$country.'/details.json');
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

 
      $endPoint = Http::prepare('multidomainhosting/linux/'.$country.'/orderid.json');
      $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}

public function SearchOrder(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/linux/'.$country.'/search.json');
      $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}

public function GetUpgradePrice(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/linux/'.$country.'/modify-pricing.json');
      $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}


public function ChangeHostingPanelPassword(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/linux/'.$country.'/change-password.json');
      $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}


public function DNSRecord(array $params,$country){

 
      $endPoint = Http::prepare('multidomainhosting/linux/'.$country.'/dns-record.json');
      $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;

}


}