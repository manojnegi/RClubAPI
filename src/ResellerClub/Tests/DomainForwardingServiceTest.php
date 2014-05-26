<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class DomainForwardingServiceTest {

	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/


	

	public function activate() {

		$ca = $this->apicaller->domainforwardingservice()->activate(array (
																'order-id'=>'54792315',
												
		));

		print_r($ca);
	}



	/*

	

	*/
	public function getDetails() {

	
		$ca = $this->apicaller->domainforwardingservice()->getDetails(array (
																'order-id'=>'54792315',
												
		));

		print_r($ca);
	}




	public function manage() {
		
		$ca = $this->apicaller->domainforwardingservice()->manage(array (
																'order-id'=>'54792315',
																'forward-to'=>'www.hosting.netfunda.com'
												
		));

		print_r($ca);

	}


	public function getDnsRecords(){

			$ca = $this->apicaller->domainforwardingservice()->getDnsRecords(array (
																'domain-name'=>'www.netfunda.com'
												
		));

		print_r($ca);


	}


}



 