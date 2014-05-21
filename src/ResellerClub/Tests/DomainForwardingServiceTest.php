<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class ProductTest {

	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

	public function activate() {
			auth-userid=0&api-key=key&order-id=0

		$ca = $apicaller->product()->checkAvailability(array (
																'domain-name'='domain.com',
																'product-key'='key'
		));

		print_r($ca);
	}



	/*

	

	*/
	public function getDetails() {

		auth-userid=0&api-key=key&order-id=0
	}




	public function manage() {
		auth-userid=0&api-key=key&order-id=0

	}


	public function getDnsRecords(){

			auth-userid=0&api-key=key&domain-name=domainname.com


	}


}



 