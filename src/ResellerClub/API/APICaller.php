<?php
namespace ResellerClub\API;


/*
 * APICaller class, base level access
 */
class APICaller {

	protected $authid;
    protected $apikey;
	protected $password;
    protected $apiUrl;

	// add your class name as proptected property
    protected $domain;
	protected $customer;
    protected $subResellers ;
    protected $pricing ;
    protected $billing ;
    protected $orderManagement ;
    protected $product ;
    protected $digitalcertificate ;
    protected $freeemailservice ;


    protected $dns ;



    public function __construct($apihost, $authid) {
        $this->apiUrl = $apihost;
		$this->authid = $authid;
		$this->debug = new Debug();
		
	// instantiates your classes		
        $this->domain = new Domain($this);
		$this->customer = new Customer($this);
        $this->product = new Product($this);
        $this->digitalcertificate = new DigitalCertificate($this) ;
         $this->freeemailservice = new FreeEmailService($this) ;

        

        $this->dns = new Dns($this);
		
    }

 
    /*
     * Returns the generated api URL
     */
    public function getApiUrl() {
        return $this->apiUrl;
    }
	
	
	/*
     * Configure the authorization method
     */
	public function setAuth($method, $value) {
        switch($method) {
            case 'password':    $this->password = $value;
                                $this->apikey = '';
                                break;
            case 'apikey':      $this->password = '';
                                $this->apikey = $value;
                                break;
        }
    }
	
	
	/*
     * Returns a text value indicating the type of authorization configured
     */
    public function getAuthType() {
        return ($this->apikey ? 'apikey' : 'password');
    }
	
	
	/*
     * Returns an array for auth-userid and apikey/password
     */
    public function getAuthUserIDKey() {
 		if($this->getAuthType()=='apikey'){
			return array("auth-userid"=>$this->authid, "api-key"=>$this->apikey);
		} else {
			return array("auth-userid"=>$this->authid, "auth-password"=>$this->password);
		}
     }

  
  
    /*
     * Set debug information as an object
     */
    public function setDebug($lastRequestHeaders, $lastResponseCode, $lastResponseHeaders) {
        $this->debug->lastRequestHeaders = $lastRequestHeaders;
        $this->debug->lastResponseCode = $lastResponseCode;
        $this->debug->lastResponseHeaders = $lastResponseHeaders;
    }

    /*
     * Returns debug information in an object
     */
    public function getDebug() {
        return $this->debug;
    }

   
    /*
     * Generic method to object getter. Since all objects are protected, this method
     * exposes a getter function with the same name as the protected variable, for example
     * $apicaller->domain can be referenced by $apicaller->domain()
     */
    public function __call($name, $arguments) {
        if(isset($this->$name)) {
            return ((isset($arguments[0])) && ($arguments[0] != null) ? $this->$name->setLastId($arguments[0]) : $this->$name);
        }
        $namePlural = $name.'s'; // try pluralize
        if(isset($this->$namePlural)) {
            return $this->$namePlural->setLastId($arguments[0]);
        } else {
            throw new CustomException("No method called $name available in ".__CLASS__);
        }
    }




    /*
    *
    * this function call the reseller club apis and get the response.
    *
    */
    public function callApi($endpointurl,$params,$method) {


         $endPoint = Http::prepare($endpointurl);

         if($method == 'GET') {
                $response = json_decode(Http::send($this->apicaller, $endPoint, $params, $method));
                 if (!is_object($response)) {
                     throw new ResponseException(__METHOD__);
                    }
        } else if($method == 'POST') {

             $response = Http::send($this->apicaller, $endPoint, $params, $method);
        }
        return $response;

    }

    /*
     * These ones don't follow the usual construct -- TO BE REMOVED
     */
    public function category($id) { return $this->categories->setLastId($id); }
    public function activities($id = null) { return ($id != null ? $this->activityStream()->setLastId($id) : $this->activityStream()); }
    public function activity($id) { return $this->activityStream()->setLastId($id); }
    public function jobStatus($id) { return $this->jobStatuses()->setLastId($id); }
    public function search(array $params) { return $this->search->search($params); }
    public function anonymousSearch(array $params) { return $this->search->anonymousSearch($params); }

}
