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

		$ca = $apicaller->domainforwardingservice()->activate(array (
																'order-id'=>'0',
												
		));

		print_r($ca);
	}



	/*

	

	*/
	public function getDetails() {

	
		$ca = $apicaller->domainforwardingservice()->getDetails(array (
																'order-id'=>'0',
												
		));

		print_r($ca);
	}




	public function manage() {
		
		$ca = $apicaller->domainforwardingservice()->manage(array (
																'order-id'=>'0',
												
		));

		print_r($ca);

	}


	public function getDnsRecords(){

			$ca = $apicaller->domainforwardingservice()->getDnsRecords(array (
																'domain-name'=>'domainname.com'
												
		));

		print_r($ca);


	}


}



 