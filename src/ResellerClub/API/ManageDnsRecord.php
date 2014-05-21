<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class ManageDnsRecord extends APICallerAbstract {

   

    public function __construct($apicaller) {
       
        parent::__construct($apicaller);
    
    }



     /*
     * Check availability for a product
     */
    public function addIPv4AddressRecord(array $params) {
        $endPoint = Http::prepare('dns/manage/add-ipv4-record.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }



     
     /*
     * Check availability for a product
     */
    public function addIPv6AddressRecord(array $params) {
        $endPoint = Http::prepare('dns/manage/add-ipv6-record.json.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }



     /*
     * 3Check availability for a product
     */
    public function addCNAMERecord(array $params) {
        $endPoint = Http::prepare('dns/manage//add-cname-record.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

     /*
     * 3Check availability for a product
     */
    public function addMXRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//add-mx-record.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    


     /*
     * 3Check availability for a product
     */
    public function addNSRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//add-ns-record.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

      /*
     * 3Check availability for a product
     */
    public function addTXTRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//add-txt-record.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

      /*
     * 3Check availability for a product
     */
    public function addSRVRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//add-srv-record.json.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

      /*
     * 3Check availability for a product
     */
    public function ModifyIPv4AddressRecord(array $params) {
        $endPoint = Http::prepare('dns/manage/update-ipv4-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        
        return $response;
    }



      /*
     * 3Check availability for a product
     */
    public function ModifyIPv6AddressRecord(array $params) {
        $endPoint = Http::prepare('dns/manage/update-ipv6-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        
        return $response;
    }

      /*
     * 3Check availability for a product
     */
    public function ModifyCNAMERecord(array $params) {
        $endPoint = Http::prepare('dns/manage//update-cname-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');

        return $response;
    }


       /*
     * 3Check availability for a product
     */
    public function ModifyMXRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//update-mx-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        
        return $response;
    }

      /*
     * 3Check availability for a product
     */
    public function  ModifyNSRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//update-ns-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }

      /*
     * 3Check availability for a product
     */
    public function  ModifyTXTRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//update-txt-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }


      /*
     * 3Check availability for a product
     */
    public function  ModifySRVRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//update-srv-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }


      /*
     * 3Check availability for a product
     */
    public function  ModifySOARecord(array $params) {
        $endPoint = Http::prepare('dns/manage//update-soa-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }


      /*
     * 3Check availability for a product
     */
    public function searchDnsRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//search-records.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


     /*
     * 3Check availability for a product  //it is deprecated.
     */
    public function  deleteDnsRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//delete-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }



     /*
     * 3Check availability for a product  //it is deprecated.
     */
    public function  deleteIPv4Record(array $params) {
        $endPoint = Http::prepare('dns/manage//delete-ipv4-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }



     /*
     * 3Check availability for a product  //it is deprecated.
     */
    public function  deleteIPv6Record(array $params) {
        $endPoint = Http::prepare('dns/manage//delete-ipv6-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }



     /*
     * 3Check availability for a product  //it is deprecated.
     */
    public function  deleteCNAMERecord(array $params) {
        $endPoint = Http::prepare('dns/manage//delete-cname-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }

     /*
     * 3Check availability for a product  //it is deprecated.
     */
    public function  deleteMXRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//delete-mx-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }

 /*
     * 3Check availability for a product  //it is deprecated.
     */
    public function  deleteNSRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//delete-ns-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }

 /*
     * 3Check availability for a product  //it is deprecated.
     */
    public function  deleteTXTRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//delete-txt-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }

 /*
     * 3Check availability for a product  //it is deprecated.
     */
    public function  deleteSRVRecord(array $params) {
        $endPoint = Http::prepare('dns/manage//delete-srv-record.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }

     
}
