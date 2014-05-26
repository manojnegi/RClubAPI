<?php

namespace ResellerClub\API;


class SubReseller extends APICallerAbstract {


    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


 public function checkAvailability(array $params) {
       
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
	

    

public function SubReseller_SignUp(array $params){

   $endPoint = Http::prepare('resellers/signup.xml');
   $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
   return $response;

}



public function Reseller_Details(array $params){

 
      $endPoint = Http::prepare('resellers/details.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}


public function Generate_Token(array $params){


	$endPoint = Http::prepare('resellers/generate-token.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}

public function Authenticate_Token(array $params){


	$endPoint = Http::prepare('resellers/authenticate-token.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}

public function promo_price(array $params){

 

	$endPoint = Http::prepare('resellers/promo-details.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
}


public function Temporary_Password(array $params){


$endPoint = Http::prepare('resellers/temp-password.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}

public function Search_Reseller(array $params){

 
 $endPoint = Http::prepare('resellers/search.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}

public function Modify_Sub_Reseller(array $params){


 $endPoint = Http::prepare('resellers/modify-details.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
}

public function Premium_Domain_Product(array $params){

 
  $endPoint = Http::prepare('domains/premium/set-selling.json');
	  $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
 
 
}

public function Premium_Domain_Signup(array $params){

 
 $endPoint = Http::prepare('domains/premium/selling.json');
	  $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
   return $response;

}


}